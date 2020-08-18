
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
                                <th>عنوان دسترسی</th>
                                <th>برچسب دسترسی</th>
                                <th>دستورات</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($permissions as $permission)
                            <tr>
                                <td scope="row">{{$permission->id}}</td>
                                <td>{{$permission->name}}</td>
                                <td>{{$permission->label}}</td>
                                <td>
                                    <div style="display: flex">
                                        <a href="{{route('permissions.edit',$permission->id)}}" class="btn btn-info" style="margin-left: 5px">ویرایش</a>
                                        <form action="{{route('permissions.destroy',$permission->id)}}" method="post">
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
                {!! $permissions->render() !!}
            </div>
        </div>

@endsection


