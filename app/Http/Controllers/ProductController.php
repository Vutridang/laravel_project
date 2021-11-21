<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;  

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //b1 lấy được tất cả các sản phẩm
        $listProduct = Product::all();
        
        return view('home', ['listProduct' => $listProduct]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create_product_view");
    }

    public function debug(Request $request)
    {
        dd($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return view("products.create");
        //dd($request->all());
        //Lấy dữ liệu input từ client đẩy lên server
        $data =$request->all();
        //Khởi tạo model
        $productModel = new Product;
        //muốn gọi class Product ta sử dụng new Product
        //gán giá trị vào model
        $productModel->name = $data["name"];
        $productModel->price = $data["price"];
        $productModel->image = $data["main-image"];
        $productModel->description = $data["product-name"];
        $productModel->rate = $data["rate"];
        $productModel->created_by = 1;
        $productModel->updated_by = 1;
        //lưu model vào database
        if($productModel->save()){
        return view("products.success", ["id" => $productModel->id]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        Product::withTrashed()->find($id)->restore();
        $product = Product::findOrFail($id);
        return view("products.update", ["product" => $product]);
        //truyền biến product vào trong trang update.blade.php 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->all();
        //dd($data); mục đích để xem người dùng gửi gì
        //lấy giá trị id
        $id = $data["id"];
        //tìm kiếm record theo id
        $product = Product::findOrFail($id);
        //gán giá trị chỉnh sửa từ $data
        $product->name = $data["name"];
        $product->price = $data["price"];
        $product->image = $data["main-image"];
        $product->description = $data["product-name"];
        $product->rate = $data["rate"];
        $product->created_by = 1;
        $product->updated_by = 1;
        //lưu model vào database
        if($product->save()){
        return view("products.update-success", ["id" => $product->id]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $product = Product::find($id);
        if($product->delete()){
            echo "Xóa record có id: " . $id . " thành công";
        }else{
            echo "Xóa dữ liệu thất bại " ;
        }
    }
}
