<!-- top songs wrapper start -->
<div class="top_songs_wrapper index3_top_songs_wrapper ms_cover">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                <div class="song_heading_wrapper ms_cover">
                    <div class="ms_heading_wrapper white_heading_wrapper">
                        <h1>آهنگ های</h1>
                    </div>
                    <div class="relaese_viewall_wrapper">
                        <a href="/music/trackMusic"> مشاهده همه <i class="flaticon-left-arrow"></i></a>
                    </div>
                    @foreach($musics->take(6) as $itemMusic)
                        <div class="top_songs_list index3_top_songs_list ms_cover">
                            <div class="top_songs_list_left">
                                <div class="treanding_slider_main_box top_lis_left_content">
                                    <div class="top_songs_list0img">
                                        <img src="{{asset($itemMusic->image_url)}}" alt="تصویر"
                                             style="width: 60px;height: 50px">
                                        <div class="ms_treanding_box_overlay">
                                            <div class="ms_tranding_box_overlay"></div>

                                            <div class="tranding_play_icon">
                                                <a href="#" class="itemmusicid" data-itemMusic="{{$itemMusic}}">
                                                    <i class="flaticon-play-button"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="release_content_artist top_list_content_artist">
                                        <p><a href="{{$itemMusic->path()}}">{{$itemMusic->name}}</a></p>
                                        <p class="various_artist_text"><a
                                                href="{{$itemMusic->path()}}">{{$itemMusic->singer->name}}</a>
                                        </p>
                                    </div>

                                </div>
                                <div class="top_list_tract_time">
                                    <p>{{$itemMusic->fullTime}}</p>
                                </div>
                            </div>
                            <div class="top_songs_list_right">
                                <div class="top_list_tract_view">
                                    <a href="#"
                                       class="like-or-dislike-btn {{$itemMusic->likes->isEmpty() ? '':'liked'}}"
                                       data-id="{{$itemMusic->id}}" style="font-size: 17px;margin-right: 101px"><i
                                            class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">

                <div class="ms_heading_wrapper white_heading_wrapper">
                    <h1>آهنگ های تک</h1>
                </div>

                <div class="featured_song_slider index3_featured_song_slider">
                    <div class="owl-carousel owl-theme">

                        @for($i=1;$i<=3;$i++)
                            <div class="item">
                                @foreach($listMusicsNotPivot->forpage($i,3) as $music)
                                    <div class="featured_artist_list index3_featured_list ms_cover">
                                        <img src="{{asset($music->image_url)}}" class="img-responsive" alt="تصویر" style="height: 150px">
                                        <div class="featured_artist_detail">
                                            <p><a href="{{$music->path()}}">{{$music->name}} </a></p>
                                            <p class="various_artist_text"><a
                                                    href="{{$music->path()}}">{{$itemMusic->singer->name}}</a>
                                            </p>
{{--                                            <p class="various_artist_text"><a href="#">51 آهنگ +</a>جزییات </p>--}}
                                            <div class="lang_apply_btn">
                                                <ul>
                                                    <li>
                                                        <a href="#" class="itemmusicid" data-itemMusic="{{$music}}">پخش موزیک</a>
                                                    </li>
                                                </ul>

                                            </div>

                                        </div>
                                    </div>

                                @endforeach

                            </div>

                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- top songs wrapper end -->



