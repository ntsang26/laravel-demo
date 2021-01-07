<?php

namespace App\Http\Controllers\Admin;

use App\Helper\_ApiCode;
use App\Http\Business\Admin\BzProduct;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{

    #Region *** Product ***
    public function getListProduct() {
        $product = Product::orderBy('id', 'desc')->get();
        return view('admin.product.list_product', compact('product'));
    }

    public function getAddProduct() {
        return view('admin.product.add_product');
    }
    #end region


    #Region *** Cate Product ***
    public function getListCate(Request $request) {
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
        if ($keyword != '') {
            $cate = Category::where('name', 'like', '%'.$keyword.'%')
            ->orWhere('id', $keyword)
            ->get();
        } else {
            $cate = Category::orderBy('id', 'desc')->get();
        }
        return view('admin.product.list_cate', compact('cate'));
    }

    public function getAddCate() {
        return view('admin.product.add_cate');
    }

    public function postAddCate(CategoryRequest $request) {
        $cate = new Category();
        $cate->name = $request->name;
        $cate->status = 1;
        if($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $name = $file->getClientOriginalExtension();
            $image = time().'_'.$name;
            while(file_exists("storage/category".$image)){
                $image = time().'_'.$name;
            }
            $file->move("storage/category", $image);
            $cate->thumbnail = $image;
        } else $cate->thumbnail = '';
        $cate->save();
        return redirect()->back()->with(['success_message' => 'Thêm mới danh mục thành công']);
    }

    public function getEditCate($cateId) {
        $cate = Category::find($cateId);
        return view('admin.product.edit_cate', compact('cate'));
    }

    public function postEditCate(Request $request, $cateId){
        $cate = Category::find($cateId);
        $cate->name = $request->name;
        $cate->status = 1;
        if($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $name = $file->getClientOriginalExtension();
            $image = time().'_'.$name;
            while(file_exists("storage/category".$image)){
                $image = time().'_'.$name;
            }
            $file->move("storage/category", $image);
            unlink("storage/category/".$cate->thumbnail);
            $cate->thumbnail = $image;
        }
        $cate->save();
        return redirect()->back()->with(['success_message' => 'Chỉnh sửa danh mục thành công']);
    }

    public function getDeleteCate($cateId) {
        $cate = Category::find($cateId);
        $cate->update(['status' => -1]);
        return redirect()->back()->with(['success_message' => 'Xóa danh mục thành công']);
    }
    #end Region
}
