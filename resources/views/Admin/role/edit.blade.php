@extends('Layout.mainAdmin')

@section('content')
    @include('Admin.wrapper.navbar')
    @include('Admin.wrapper.left_sidebar')

    <div id="main-content">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>ویرایش آلبوم</h2>
                </div>
                <div class="body">
                    <form action="{{route('roles.update',$role->id)}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" value="{{$role->name}}"
                                   aria-label="نام کاربری"
                                   aria-describedby="basic-addon1" autocomplete="off">
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" name="label" class="form-control" value="{{$role->label}}"
                                   aria-label="نام کاربری"
                                   aria-describedby="basic-addon1" autocomplete="off">
                        </div>
                        <div>
                            @foreach($permissions as $permission)
                                {{$permission->name}} - {{$permission->label}} <input type="checkbox"   name="permission[]" value="{{$permission->id}}" {{ in_array($permission->id,$role->permissions->pluck('id')->toArray()) ?'checked':''}} id="" style="color: #ffffff;margin-left: 10%;margin-top: 10px">
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
