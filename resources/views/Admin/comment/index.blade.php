
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
                            <th>متن نظر</th>
                            <th>وضعیت</th>
                            <th>دستورات</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($comments as $comment)
                            <tr>
                                <td scope="row">{{$comment->id}}</td>
                                <td>{{$comment->body}}</td>
                                <form action="{{route('comments.update',$comment->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                <td><input type="checkbox" name="status"></td>


                                <td><button class="btn btn-block" type="submit">ویرایش</button>
                                </form>
                                    <form action="{{route('comments.destroy',$comment->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">حذف</button>
                                    </form>
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
