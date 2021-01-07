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
    protected $bzProduct;
    public function __construct()
    {
        parent::__construct();
        $this->bzProduct = new BzProduct;
    }

    //
    public function getListProduct() {
        $product = Product::orderBy('id', 'desc')->get();
        return view('admin.product.list_product', compact('product'));
    }

    public function getAddProduct() {
        return view('admin.product.add_product');
    }


    #Region *** Cate Product ***
    public function getListCate() {
        $cate = Category::orderBy('id', 'desc')->get();
        return view('admin.product.list_cate', compact('cate'));
    }

    public function getAddCate() {
        return view('admin.product.add_cate');
    }

    public function postAddCate(CategoryRequest $request) {
        $errorCode = $this->bzProduct->postAddCate($request);
        if($errorCode == _ApiCode::SUCCESS)
            return redirect()->back()->with(['success_message' => 'Thêm mới danh mục thành công']);
        else
            return redirect()->back()->with(['error_message' => 'Thêm mới danh mục không thành công']);
    }

    public function getEditCate($cateId) {
        $data = $this->bzProduct->getEditCate($cateId);
        return view('admin.product.edit_cate', compact('data'));
    }

    public function postEditCate(Request $request){
        $errorCode = $this->bzProduct->postEditCate($request);
        if($errorCode == _ApiCode::SUCCESS)
            return redirect()->back()->with(['success_message' => 'Chỉnh sửa danh mục thành công']);
        else
            return redirect()->back()->with(['error_message' => 'Chỉnh sửa danh mục không thành công']);
    }
    #end Region
}
