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
                    <form action="{{route('categories.store')}}" method="post">
                    @csrf

                    <div class="input-group mb-3">
                        <select class="custom-select" id="inputGroupSelect01" name="parent_id">
                            <option selected>انتخاب عنوان گروه</option>
                            @foreach($categoryParent as $categor)
                            <option value="{{$categor->id}}">{{$categor->name}}</option>
                            @endforeach
                        </select>
                    </div>



                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control" placeholder="عنوان گروه" aria-label="نام کاربری"
                               aria-describedby="basic-addon1" autocomplete="off">
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">توضیحات</span>
                        </div>
                        <textarea class="form-control" name="description" cols="10" rows="8" aria-label="با ناحیه متن"></textarea>
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
