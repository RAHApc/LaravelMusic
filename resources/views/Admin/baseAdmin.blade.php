@extends('Layout.mainAdmin')

@section('content')
    @include('Admin.page_loader')

        @include('Admin.wrapper.navbar')
        @include('Admin.wrapper.megamenu')
        @include('Admin.wrapper.rightbar')
        @include('Admin.wrapper.left_sidebar')
        @include('Admin.wrapper.main_content')

@endsection
