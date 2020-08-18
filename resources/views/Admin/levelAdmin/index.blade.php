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
                            <th>نام کاربر</th>
                            <th>ایمیل</th>
                            <th>مقام</th>
                            <th>تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($roles as $role)
                            @if(count($role->users))
                                @foreach($role->users as $user)
                                    <tr>
                                        <td scope="row">{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$role->name}}</td>
                                        <td>
                                            <div style="display: flex">
                                                <a href="{{route('levels.edit',$user->id)}}" class="btn btn-info"
                                                   style="margin-left: 5px">ویرایش</a>
                                                <form action="{{route('levels.destroy',$user->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">حذف</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {!! $roles->render() !!}
        </div>
    </div>

@endsection


