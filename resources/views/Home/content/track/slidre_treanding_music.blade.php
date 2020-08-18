<!-- treanding song wrapper start -->
<div class="treanding_songs_wrapper index3_punjabi_songs ms_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="ms_heading_wrapper white_heading_wrapper">
                    <h1>موزیک های تک</h1>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="treanding_song_slider index3_featured_song_slider index3_border_none">
                    <div class="owl-carousel owl-theme">
                        @foreach($listMusicsNotPivot as $itemMusic )

                            <div class="item">

                                <div class="treanding_slider_main_box ms_cover">
                                    <img src="{{asset($itemMusic->image_url)}}" alt="تصویر" style="height: 150px">

                                    <div class="ms_treanding_box_overlay">
                                        <div class="ms_tranding_box_overlay"></div>

                                        <div class="tranding_play_icon various_concert_icon">
                                            <a href="{{$itemMusic->path()}}">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="various_song_playlist">
                                        <p><a href="{{$itemMusic->path()}}"> {{$itemMusic['name']}}</a></p>

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


