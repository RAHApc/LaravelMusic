
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
                                <th>نام کاربر</th>
                                <th>ایمیل کاربر</th>
                                <th>وضعیت اکانت</th>
                                <th>دستورات</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($users as $user)
                            <tr>
                                <td scope="row">{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>0</td>
                                <td>
                                    <div style="display: flex">
                                        <form action="{{route('users.destroy',$user->id)}}" method="post">
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
                {!! $users->render() !!}
            </div>
        </div>

@endsection


