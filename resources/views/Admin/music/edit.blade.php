@extends('Layout.mainAdmin')

@section('content')
    @include('Admin.wrapper.navbar')
    @include('Admin.wrapper.left_sidebar')

    <div id="main-content">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>ویرایش موزیک</h2>
                </div>
                <div class="body">
                    <form action="{{route('musics.update',$music->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect01" name="singer_id">
                                @foreach($singers as $singer)
                                    <option
                                        value="{{$singer->id}}" {{$singer->id===$music->singer_id? 'selected':''}}>{{$singer->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect01" name="album_id">
                                @if($albums!=null)
                                @foreach($albums as $albumitem)
                                    <option
                                        value="{{$albumitem->id}}" {{$albumitem->id===$albumId? 'selected':''}}>{{$albumitem->name}}</option>
                                @endforeach
                                    @endif
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect01" name="category_id">
                                @foreach($categories as $categorie)
                                    <option
                                        value="{{$categorie->id}}" {{$categorie->id===$categorId? 'selected':''}}>{{$categorie->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" value="{{$music->name}}"
                                   placeholder="نام موزیک"
                                   aria-describedby="basic-addon1" autocomplete="off">
                        </div>

                        <div class="input-group mb-3">
                            <img src="{{asset($music->image_url)}}" style="width: 50px;height: 50px">
                            <div class="custom-file">
                                <input type="file" name="image_url" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">انتخاب فایل تصویر</label>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <audio src="{{asset($music->file_url)}}" controls autoplay="off"></audio>
                            <div class="custom-file">
                                <input type="file" name="file_url"
                                       class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">انتخاب فایل صوتی</label>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" name="fullTime" value="{{$music->fullTime}}" class="form-control"
                                   placeholder="زمان موزیک"
                                   aria-describedby="basic-addon1" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <label for="description" class="control-label">متن</label>
                                <textarea rows="5" class="form-control" name="description" id="description" placeholder="متن مقاله را وارد کنید">{{$music->description}}</textarea>
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
