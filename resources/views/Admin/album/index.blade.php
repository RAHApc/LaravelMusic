
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
                                <th>عنوان</th>
                                <th>ادرس تصویر</th>
                                <th>نام خواننده</th>
                                <th>دستورات</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($albums as $album)
                            <tr>
                                <td scope="row">{{$album->id}}</td>
                                <td>{{$album->name}}</td>
                                <td>
                                    <img src="{{asset($album->image_url)}}" style="width: 50px;height: 50px">
                                </td>
                                <td>{{\App\Singer::find($album->singer_id)->name}}</td>
                                <td>
                                    <div style="display: flex">
                                        <a href="{{route('albums.edit',$album->id)}}" class="btn btn-info" style="margin-left: 5px">ویرایش</a>
                                        <form action="{{route('albums.destroy',$album->id)}}" method="post">
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

{{--@push('js')--}}
{{-- <script>--}}
{{--     function deleteCategory(id)--}}
{{--     {debugger;--}}
{{--         $.ajax({--}}
{{--             url:'/admin/deleteCategory/'+id,--}}
{{--             type:'get',--}}

{{--             success:function(data)--}}
{{--             {--}}
{{--                 console.log(data);--}}
{{--             }--}}
{{--         });--}}
{{--     }--}}
{{-- </script>--}}
{{--@endpush--}}
