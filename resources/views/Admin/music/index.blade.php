
@extends('Layout.mainAdmin')

@section('content')
    @include('Admin.wrapper.navbar')
    @include('Admin.wrapper.left_sidebar')

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>ردیف های راه راه <small>استفاده از <code>.table-striped</code> برای افزودن zebra-striping به هر سطر جدول در داخل <code>&lt;tbody&gt;</code></small></h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>نام خواننده</th>
                            <th>نام موزیک</th>
                            <th>تصویر</th>
                            <th>موزیک</th>
                            <th>دستورات</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($musics as $music)
                            <tr>
                                <td scope="row">{{$music->id}}</td>
                                <td>{{\App\Singer::find($music->singer_id)->name}}</td>
                                <td>{{$music->name}}</td>
                                <td>
                                    <img src="{{asset($music->image_url)}}" style="width: 50px;height: 50px">
                                </td>
                                <td>
                                    <audio controls="" autoplay="off" name="media"><source src="{{asset($music->file_url)}}" type="audio/mpeg"></audio>
                                </td>
                                <td>
                                    <div style="display: flex">
                                        <a href="{{route('musics.edit',$music->id)}}" class="btn btn-info" style="margin-left: 5px">ویرایش</a>
                                        <form action="{{route('musics.destroy',$music->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">حذف</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
