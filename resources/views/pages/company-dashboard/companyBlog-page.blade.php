@extends('layout.company-sidenav-layout')
@section('content')
    @include('components.company-blog.company-blog-list')
    @include('components.company-blog.company-blog-delete')
    @include('components.company-blog.company-blog-create')
    @include('components.company-blog.company-blog-update')
@endsection
