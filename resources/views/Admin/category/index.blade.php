
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
                                <th>سرگروه دسته بندی </th>
                                <th>عنوان گروه </th>
                                <th>دستورات </th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty(nestedCategories()))
                            @foreach(nestedCategories() as $category)
                            <tr>
                                <td scope="row">{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                            </tr>
                            @foreach($category->children as $cat)
                            <tr>
                                <td></td>
                                <td></td>
                                   <td>{{$cat->name}}</td>
                                <td>
                                    <div style="display: flex">
                                        <a href="{{route('categories.edit',$cat->id)}}" class="btn btn-info" style="margin-left: 5px">ویرایش</a>
                                        <form action="{{route('categories.destroy',$cat->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">حذف</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                                @endforeach
                            @endforeach
                                @endif
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
