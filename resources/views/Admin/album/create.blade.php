@extends('Layout.mainAdmin')

@section('content')
    @include('Admin.wrapper.navbar')
    @include('Admin.wrapper.left_sidebar')

    <div id="main-content">

        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>درج آلبوم</h2>
                </div>
                <div class="body">
                    <form action="{{route('albums.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect01" name="category_id">
                                <option selected>انتخاب دسته بندی</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect01" name="singer_id">
                                <option selected>انتخاب خواننده</option>
                                @foreach($singers as $singer)
                                    <option value="{{$singer->id}}">{{$singer->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="عنوان آلبوم"
                                   aria-label="نام کاربری"
                                   aria-describedby="basic-addon1" autocomplete="off">
                        </div>

                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" name="image_url" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">انتخاب تصویر</label>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">توضیحات</span>
                            </div>
                            <textarea class="form-control" name="description" cols="10" rows="8"
                                      aria-label="با ناحیه متن"></textarea>
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
