<!-- blog wrapper start -->
<div class="blog_wrapper index3_blog_wrapper ms_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="ms_heading_wrapper white_heading_wrapper">
                    <h1>رویداد های اخیر
                    </h1>
                </div>
                <div class="relaese_viewall_wrapper">
                    <a href="/music/event"> مشاهده همه <i class="flaticon-left-arrow"></i></a>
                </div>
            </div>

            <div class="event_single_slider">
                <div class="owl-carousel owl-theme">
                    @foreach($events as $event)
                        <div class="item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="prs_ec_ue_left_img_wrapper">
                                    <img src="{{asset($event->image_url)}}" alt="event_img"
                                         style="height: 453px">
                                </div>
                                <div class="prs_ec_ue_right_img_wrapper">
                                    <div class="prs_feature_img_cont prs_ec_ue_right_img_cont">
                                        <h2> اجرای زنده هنرمند {{$event->name}} </h2>
                                        <div class="prs_ft_small_cont_left">
                                            <p>{{$event->city}}</p>
                                        </div>

                                        <ul>
                                            <li>{{verta($event->dateStart)->format('%d %B %Y')}}</li>
                                            <li>{{$event->timeStartEnd}}</li>
                                        </ul>
                                        <p class="prs_up_pera_sec">
                                            {{$event->description}}
                                        </p>
                                    </div>
                                    <event-music :event="{{$event}}"></event-music>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>

<!-- blog wrapper end -->

@push('js')
@endpush
