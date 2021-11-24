@extends('layouts.layout')

@section('title', 'create product view')

@section('css')
    
@endsection

@section('header')
    @include('childview/header')
@endsection

@section('content')
   @include('products/create')
@endsection

@section('footer')
   @include('childview/footer')
@endsection

@section('script')
    
@endsection