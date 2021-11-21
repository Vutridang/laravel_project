@extends('layouts.layout')

@section('title', 'update product')

@section('css')
   
@endsection

@section('header')
    @include('childview/header')
@endsection

@section('content')
<div class="container">
      <form method="POST" action="{{route('product-update')}}">
         @csrf
         <input type="hidden" class="form-control" name="id" placeholder="" value="{{$product->id}}">
         <div class="mb-3">
           <label for="name" class="form-label">Tên sản phẩm</label>
           <input type="text" class="form-control" name="name" placeholder="" value="{{$product->name}}">
         </div>
         <div class="mb-3">
           <label for="price" class="form-label">Giá</label>
           <input type="number" class="form-control" name="price" placeholder="" value="{{$product->price}}">
         </div>
         <div class="mb-3">
           <label for="main-image" class="form-label">Ảnh đại diện</label>
           <input type="text" class="form-control" name="main-image" placeholder=""
           value="{{$product->image}}">
         </div>
         <div class="mb-3">
           <label for="description" class="form-label">Mô tả</label>
           <textarea type="text" class="form-control" name="product-name" placeholder="">{{$product->description}}</textarea>
         </div>
         <div class="mb-3">
           <label for="rate" class="form-label">Đánh giá</label>
           <input type="text" class="form-control" name="rate" placeholder="" value="{{$product->rate}}">
         </div>
         <div class="mb-3">
           <input style="color: white; background: #57C88A; font-weight: bold;" type="submit" class="form-control" placeholder="" value="Update">
           <a href="{{route('product-delete',['id' => $product->id])}}">Delete</a>
         </div>
      </form>
   </div>
@endsection

@section('footer')
   @include('childview/footer')
@endsection

@section('script')
    
@endsection