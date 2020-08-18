@extends('Layout.mainAdmin')

@section('content')
    @include('Admin.wrapper.navbar')
    @include('Admin.wrapper.left_sidebar')

    <div id="main-content">

        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>درج نقش مدیریت ادمین ها</h2>
                </div>
                <div class="body">
                    <form action="{{route('levels.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                            <div class="input-group mb-3">
                                <select class="custom-select" id="inputGroupSelect01" name="user_id">
                                    <option selected>انتخاب مدیر</option>
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                        <div>
                            <label style="margin: 30px 10px 10px;">انتخاب نقش های ادمین :</label>
                            <br>
                            @foreach($roles as $role)
                                {{$role->name}} - {{$role->label}} <input type="checkbox"   name="role_id[]" value="{{$role->id}}" id="role" style="color: #ffffff;margin-left: 10%;margin-top: 10px">
                                @endforeach

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
