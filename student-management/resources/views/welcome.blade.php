@extends('layouts.app')

@section('title', 'Trang chủ')

@section('content')
    <h1>Chào mừng đến với ứng dụng của bạn</h1>
    @auth
        <p>Xin chào, {{ auth()->user()->name }}</p>
    @else
        <p>Vui lòng <a href="{{ route('login') }}">đăng nhập</a> hoặc <a href="{{ route('register') }}">đăng ký</a> để tiếp tục.</p>
    @endauth
@endsection