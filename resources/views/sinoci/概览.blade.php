@extends('sinoci.布局')

@section('内容')
    @include('sinoci.头部')
    @include('sinoci.列表')
@endsection

@section('页面')
    @include('sinoci.标题')
    @include('sinoci.导航')
    @include('sinoci.内容')
@endsection