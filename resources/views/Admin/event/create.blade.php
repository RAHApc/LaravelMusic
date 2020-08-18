@extends('Layout.mainAdmin')

@section('content')
    @include('Admin.wrapper.navbar')
    @include('Admin.wrapper.left_sidebar')

    <div id="main-content">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>درج رویداد های</h2>
                </div>
                <div class="body">
                    <form action="{{route('events.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="input-group mb-3">
                            <div>
                                <label>دامنه تاریخ</label>
                                <div class="input-daterange input-group" data-provide="datepicker" data-date-format="yyyy/mm/dd">
                                    <input type="text" class="input-sm form-control" name="dateStart">
                                    <span class="input-group-addon range-to">to</span>
                                    <input type="text" class="input-sm form-control" name="dateEnd">
                                </div>
                            </div>
                        </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-clock"></i></span>
                                </div>
                                <input type="text" name="timeStartEnd" class="form-control time24" placeholder="مثل: 23:59">
                            </div>


                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="نام خواننده"
                                   aria-describedby="basic-addon1" autocomplete="off">
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" name="city" class="form-control" placeholder="نام شهر"
                                   aria-describedby="basic-addon1" autocomplete="off">
                        </div>

                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" name="image_url" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">انتخاب فایل تصویر</label>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">توضیحات</span>
                            </div>
                            <textarea class="form-control" name="description" cols="10" rows="8"
                                      aria-label="با ناحیه متن"></textarea>
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
