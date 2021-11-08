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
        $listProduct = Product::all();
        //foreach ($listProduct as  $value) {
           //echo $value->name.'<br>';
        //}
        //$product = Product::where("price",">",30000)
        //khi nào có giá trị so sánh thì ta sẽ có 3 giá trị where::("tên cột","so sánh '>'", số)
        //->orderBy("rate", "DESC")
        //khi muốn sắp xếp theo giá trị giảm dần ta thêm "DESC" vào trong orderBy ban đầu đã là sắp xếp từ thấp lên cao
        //->get();
        //$product = Product::find(1);
        //$product = Product::where("name", "Kính cường lực iphone 21D full màn")->first();
        $product = Product::findOrFail(1);
        dd($product);
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
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        dd($product);
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
