@extends('Layout.mainAdmin')

@section('content')
    @include('Admin.wrapper.navbar')
    @include('Admin.wrapper.left_sidebar')

    <div id="main-content">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="header">
                    <h2> درج دسته بندی جدید</h2>
                </div>
                <div class="body">
                    <form action="{{route('singers.update',$singer->id)}}" method="post">
                        @method('PUT')
                        @csrf

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">نام خواننده</span>
                            </div>
                            <input type="text" name="name" class="form-control" placeholder="نام خواننده" value="{{$singer->name}}"                                    aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group" style="margin: 19px 50%;">
                            <button style="padding: 7px 50px;" type="submit" class="btn btn-default">درج</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>

@endsection
