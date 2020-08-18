@extends('Layout.main')
@section('content')
    @include('Home.header.nav')

    {{--    <div class="container">--}}
    <div class="row">
        <div class="col-md-12">


            <div class="leave_comment_wrapper ms_cover">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="artist_wrapper_content ms_cover">
                                <img src="{{asset($music->image_url)}}" class="img-responsive" alt="تصویر">
                                <div class="artist_wrapper_text">
                                    <div class="artist_wrapper_left">
                                        <h1>{{$music->name}}</h1>
                                        <p>{{$music->singer->name}}</p>
                                        <p></p>
                                        <div class="artist_btn ms_cover">
                                            <a href="{{$music->download()}}" style="font-size: 50px;margin-left: 20px;"><i class="flaticon flaticon-download"></i></a>
                                            <audio id="audio1" src="{{asset($music->file_url)}}" preload controls>Your
                                                browser does not support
                                                HTML5 Audio! 😢
                                            </audio>

                                        </div>

                                    </div>
                                    <div class="artist_list_icon">
                                        <div>
                                            <a href="#" class="like-or-dislike-btn {{$musicLike->isEmpty() ? '':'liked'}}" data-id="{{$music->id}}"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@include('Home.content.track.slidre_treanding_music')
    <!-- contact_wrapper start -->
    {{--    <div class="container">--}}
    <div class="row">
        <div class="col-md-12">
            <div class="leave_comment_wrapper ms_cover">


                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">

                            <div>
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">پیام
                                            بگذارید</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu1">متن
                                            پیام</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu2">متن
                                            موزیک</a>
                                    </li>

                                </ul>
                            </div>

                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="tab-content">
                                <div id="home" class="tab-pane active">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="contact_section ms_cover">
                                                <div class="container">
                                                    <div class="row">
                                                      <comment-music :music="{{$music}}"></comment-music>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <div class="row">

                                        <div class="leave_comment_wrapper ms_cover">
                                            @foreach($comments as $comment)
                                                <div class="comments_Box">

                                                    <div class="img_wrapper">
                                                        <img src="{{asset('assets/main/images/author2.jpg')}}" class=""
                                                             alt="author_img">
                                                    </div>
                                                    <div class="text_wrapper">
                                                        <div class="author_detail">
                                                            <span class="author_name">{{$comment->name}}</span>
                                                            <span class="publish_date" style="float: left;direction: ltr">{{verta($comment->dateComment)->format('Y m d')}}</span>
                                                        </div>
                                                        <div class="author_content">
                                                            <p>{{$comment->body}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>


                                    </div>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="contact_section ms_cover">
                                                <div class="container">
                                                    <div class="row">
                                                        <div
                                                            class="col-lg-10 offset-lg-1 col-md-12 col-sm-12 col-12">
                                                            <p>
                                                                {!! $music->description !!}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>




    @include('Home.footer.footer')
    {{--    @include('Home.footer.play_list')--}}
@endsection

@push('js')
{{--    <script>--}}
{{--        $('#formCommentSingleMusic').on('submit', function (e) {--}}
{{--            debugger;--}}
{{--            e.preventDefault();--}}
{{--            var token = $('#token').val(),--}}
{{--                id = $('#musicID').val(),--}}
{{--                first_name = $('#first_name').val(),--}}
{{--                body = $('#messageTen').val();--}}

{{--            $.ajax({--}}
{{--                url: '/music/comment',--}}
{{--                type: 'POST',--}}
{{--                dataType: 'json',--}}
{{--                data: {--}}
{{--                    _token: token,--}}
{{--                    id: id,--}}
{{--                    first_name: first_name,--}}
{{--                    body: body,--}}
{{--                },--}}
{{--                success: function (response) {--}}
{{--                    $('#success_message').fadeOut(2000).append(response);--}}
{{--                },--}}
{{--                error: function (response) {--}}
{{--                    if (response.status === 422) {--}}
{{--                        var errors = Object.values(response.responseJSON.errors);--}}

{{--                        var tag = '<div style="background: #b96363;margin-bottom: 10px;padding: 10px 30px;font-size: 1em;color: #bf9c9c;border-radius: 20px;height: auto;padding-bottom: 10px;">' +--}}
{{--                        '<span>خطا های زیر را رفع کنید:</span>'+--}}
{{--                        '<ul style="padding: 0 30px;list-style: disc;">' +--}}
{{--                        '<li>' + errors[0] + '</li>' +--}}
{{--                        '<li>' + errors[1] + '</li>' +--}}
{{--                        '</ul>' +--}}
{{--                        '</div>';--}}
{{--                        $('#success_message').fadeOut(6000).append(tag);--}}

{{--                    }--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
@endpush
