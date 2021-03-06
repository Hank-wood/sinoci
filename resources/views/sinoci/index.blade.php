@extends('sinoci.layout')

@section('内容')
    @include('sinoci.content-head')
    @include('sinoci.content-tabs')
    @include('sinoci.content-list')
    @include('sinoci.content-form')
@endsection

@section('页面')
    @include('sinoci.header')
    @include('sinoci.content')
@endsection

@section('弹窗')
    @yield('弹窗.添加')
    @yield('弹窗.修改')
@endsection