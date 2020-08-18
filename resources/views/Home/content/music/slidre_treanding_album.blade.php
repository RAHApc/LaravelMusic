<!-- treanding song wrapper start -->
<div class="treanding_songs_wrapper index3_punjabi_songs ms_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="ms_heading_wrapper white_heading_wrapper">
                    <h1>آلبوم های {{$album->singer->name}}</h1>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="treanding_song_slider index3_featured_song_slider index3_border_none">
                    <div class="owl-carousel owl-theme">
                        @foreach($singers as $singer )

                            <div class="item">

                                <div class="treanding_slider_main_box ms_cover">
                                    <img src="{{asset($singer->image_url)}}" alt="تصویر">

                                    <div class="ms_treanding_box_overlay">
                                        <div class="ms_tranding_box_overlay"></div>
                                        <div class="ms_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i class="flaticon-playlist"></i></span>لیست پخش</a></li>
                                            <li><a href="#"><span class="opt_icon"><i class="flaticon-star"></i></span>مورد علاقه</a></li>
                                            <li><a href="#"><span class="opt_icon"><i class="flaticon-share"></i></span>اشتراک گذاری</a></li>
                                            <li><a href="#"><span class="opt_icon"><i class="flaticon-files-and-folders"></i></span>مشاهده اشعار</a></li>
                                            <li><a href="#"><span class="opt_icon"><i class="flaticon-trash"></i></span>حذف</a></li>
                                        </ul>
                                        <div class="tranding_play_icon various_concert_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="various_song_playlist">
                                        <p><a href="{{$album->path()}}"> {{$singer['name']}}</a></p>

                                    </div>
                                </div>

                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- treanding song wrapper end -->


