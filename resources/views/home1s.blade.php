@extends('layouts.master')
@section('slide')
	@include('layouts/slide')  
	{{-- thêm trang web khác --}}
@endsection
@section('content')
	@include('layouts/blog-1s')  
	@include('layouts/sidebar')  
	{{-- thêm trang web khác --}}
@endsection