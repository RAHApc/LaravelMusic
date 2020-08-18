@extends('Layout.mainAdmin')

@section('content')
    @include('Admin.wrapper.navbar')
    @include('Admin.wrapper.left_sidebar')

    <div id="main-content">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>درج موزیک</h2>
                </div>
                <div class="body">
                    <form action="{{route('musics.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect01" name="singer_id">
                                <option selected>انتخاب نام خواننده</option>
                                @foreach($singers as $singer)
                                    <option value="{{$singer->id}}">{{$singer->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect01" name="album_id">
                                <option selected>انتخاب نام آلبوم</option>
                                @foreach($albums as $album)
                                    <option value="{{$album->id}}">{{$album->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect01" name="category_id">
                                <option selected>انتخاب دسته بندی موزیک</option>
                                @foreach($categories as $categorie)
                                    <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="نام موزیک"
                                   aria-describedby="basic-addon1" autocomplete="off">
                        </div>

                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" name="image_url" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">انتخاب فایل تصویر</label>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" name="file_url" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">انتخاب فایل صوتی</label>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" name="fullTime" class="form-control" placeholder="زمان موزیک"
                                   aria-describedby="basic-addon1" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <label for="description" class="control-label">متن</label>
                                <textarea rows="5" class="form-control" name="description" id="description" placeholder="متن مقاله را وارد کنید"></textarea>
                            </div>
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
@push('js')
    <script src="{{asset('/assets/mainAdmin/ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
@endpush
