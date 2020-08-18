@extends('Layout.mainAdmin')

@section('content')
    @include('Admin.wrapper.navbar')
    @include('Admin.wrapper.left_sidebar')

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>ردیف های راه راه <small>استفاده از <code>.table-striped</code> برای افزودن zebra-striping به هر سطر
                        جدول در داخل <code>&lt;tbody&gt;</code></small></h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>نام خواننده</th>
                            <th>دستورات</th>
                        </tr>
                        </thead>
                        <tbody>
{{--                        @if(!empty($singers))--}}
                            @foreach($singers as $singer)
                                <tr>
                                    <td scope="row">{{$singer->id}}</td>
                                    <td>{{$singer->name}}</td>
                                    <td>
                                        <div style="display: flex">
                                            <a href="{{route('singers.edit',$singer->id)}}" class="btn btn-info" style="margin-left: 5px">ویرایش</a>
                                            <form action="{{route('singers.destroy',$singer->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">حذف</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
{{--                        @endif--}}
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
