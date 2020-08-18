
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
                            <th>تاریخ شروع</th>
                            <th>تاریخ اتمام</th>
                            <th>تصویر</th>
                            <th>دستورات</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($events as $event)
                            <tr>
                                <td scope="row">{{$event->id}}</td>
                                <td>{{Verta($event->dateStart)->format('%d  %B  %Y')}}</td>
                                <td>{{Verta($event->dateEnd)->format('%d  %B  %Y')}}</td>
                                <td>
                                    <img src="{{asset($event->image_url)}}" style="width: 50px;height: 50px">
                                </td>
                                <td>
                                    <div style="display: flex">
                                        <a href="{{route('events.edit',$event->id)}}" class="btn btn-info" style="margin-left: 5px">ویرایش</a>
                                        <form action="{{route('events.destroy',$event->id)}}" method="post">
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
