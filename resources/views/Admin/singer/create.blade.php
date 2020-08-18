@extends('Layout.mainAdmin')

@section('content')
    @include('Admin.wrapper.navbar')
    @include('Admin.wrapper.left_sidebar')

    <div id="main-content">

        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="header">
                    <h2> درج خواننده جدید</h2>
                </div>
                <div class="body">
                    <form action="{{route('singers.store')}}" method="post">
                    @csrf

                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control" placeholder="نام خواننده" aria-label="نام کاربری"
                               aria-describedby="basic-addon1" autocomplete="off">
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
