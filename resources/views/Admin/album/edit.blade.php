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
                    <form action="{{route('albums.update',$album->id)}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect01" name="singer_id">
                                @foreach($singers as $singer)
                                    <option value="{{$singer->id}}" {{$singer->id===$album->singer_id? 'selected':''}}>{{$singer->name}}</option>
                                @endforeach
                            </select>
                        </div>

                         <input type="hidden" name="idAlbum" value="{{$album->id}}">
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="عنوان موزیک" value="{{$album->name}}" aria-label="نام کاربری"
                                   aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <img src="{{asset($album->image_url)}}" style="width: 50px;height: 50px;" >
                            </div>
                            <div class="custom-file">
                                <input type="file" name="image_url" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">انتخاب فایل</label>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">توضیحات</span>
                            </div>
                            <textarea class="form-control" name="description" cols="10" rows="8" aria-label="با ناحیه متن">{{$album->description}}</textarea>
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
