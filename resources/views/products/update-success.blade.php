@extends('layouts.layout')

@section('title', "Create product")

@section('css')

@endsection

@section('content')
@include("/childview/header")
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Update dữ liệu thành công!</h4>
  <p>Click vào <a href='{{route("product-show", ["id" => $id])}}'>update</a>để chỉnh sửa dữ liệu</p>
</div>
@endsection


@section('footer')
@include("/childview/footer")
@endsection

@section('script')

@endsection