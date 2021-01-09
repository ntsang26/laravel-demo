<?php

namespace App\Http\Controllers\Admin;

use App\Helper\_ApiCode;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\ProductRequest;

use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{

    #Region *** Product ***
    public function getListProduct() {
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
        if ($keyword != '') {
            $product = Product::where('status', 1)
            ->where('name', 'like', '%'.$keyword.'%')
            ->orWhere('id', $keyword)
            ->get();
        } else {
            $product = Product::orderBy('id', 'desc')
            ->where('status', 1)
            ->get();
        }
        return view('admin.product.list_product', compact('product'));
    }

    public function getAddProduct() {
        $cate = Category::all();
        return view('admin.product.add_product', compact('cate'));
    }

    public function postAddProduct(ProductRequest $request) {
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->prd_code = 'SP'.time();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->sale_off = $request->sale_off;
        $product->status = 1;
        $product->type = 1;
        if($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $name = $file->getClientOriginalExtension();
            $image = time().'_'.$name;
            while(file_exists("storage/product".$image)){
                $image = time().'_'.$name;
            }
            $file->move("storage/product", $image);
            $product->thumbnail = $image;
        } else $product->thumbnail = '';
        $product->save();
        return redirect()->back()->with(['success_message' => 'Thêm mới sản phẩm thành công']);
    }

    public function getEditProduct($prdId) {
        $cate = Category::all();
        $prd = Product::find($prdId);
        return view('admin.product.edit_product', compact('cate','prd'));
    }

    public function postEditProduct(ProductRequest $request, $prdId) {
        $product = Product::find($prdId);
        $product->category_id = $request->category_id;
        $product->prd_code = 'SP'.time();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->sale_off = $request->sale_off;
        $product->status = 1;
        $product->type = 1;
        if($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $name = $file->getClientOriginalExtension();
            $image = time().'_'.$name;
            while(file_exists("storage/product".$image)){
                $image = time().'_'.$name;
            }
            $file->move("storage/product", $image);
            unlink("storage/product/".$product->thumbnail);
            $product->thumbnail = $image;
        }
        $product->save();
        return redirect()->back()->with(['success_message' => 'Thêm mới sản phẩm thành công']);
    }

    public function getDeleteProduct($prdId) {
        $product = Product::find($prdId);
        $product->update(['status' => -1]);
        return redirect()->back()->with(['success_message' => 'Xóa sản phẩm thành công']);
    }

    #end region


    #Region *** Cate Product ***
    public function getListCate(Request $request) {
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
        if ($keyword != '') {
            $cate = Category::where('status', 1)
            ->where('name', 'like', '%'.$keyword.'%')
            ->orWhere('id', $keyword)
            ->get();
        } else {
            $cate = Category::orderBy('id', 'desc')
            ->where('status', 1)
            ->get();
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

    public function postEditCate(CategoryRequest $request, $cateId){
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
