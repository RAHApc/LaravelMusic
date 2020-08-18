@extends('Layout.main')
@section('content')
    @include('Home.header.nav')
    @include('Home.content.music.music_title')
    {{--@include('Home.content.music.slidre_treanding_album')--}}

    <!-- artist single wrapper start -->
    <div class="artist_wrapper ms_cover">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="artist_wrapper_content ms_cover">
                        <img src="{{asset($album->image_url)}}" class="img-responsive" alt="تصویر">
                        <div class="artist_wrapper_text">
                            <div class="artist_wrapper_left">
                                <h1>{{$album->name}}</h1>
                                <p>{{$album->singer->name}}</p>
                                <p>{{$album->description}}</p>


                                <!-- partial:index.partial.html -->
                                {{--                                <div class="container">--}}
                                {{--                                    <div class="column add-bottom">--}}
                                {{--                                        <div id="mainwrap">--}}
                                {{--                                            <div id="nowPlay">--}}
                                {{--                                                <span id="npAction">Paused...</span><span id="npTitle"></span>--}}
                                {{--                                            </div>--}}
                                {{--                                            <div id="audiowrap">--}}
                                {{--                                                <div id="audio0">--}}
                                <audio id="audio1" src="" preload controls>Your browser does not support
                                    HTML5 Audio! 😢
                                </audio>
                                {{--                                                </div>--}}
                                {{--                                                <div id="tracks">--}}
                                {{--                                                    <a id="btnPrev">&vltri;</a><a id="btnNext">&vrtri;</a>--}}
                                {{--                                                </div>--}}
                                {{--                                            </div>--}}
                                {{--                                            <div id="plwrap">--}}
                                {{--                                                <ul id="plList"></ul>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="column add-bottom center">--}}
                                {{--                                        <p>Music by <a href="http://www.mythium.net/">Mythium</a></p>--}}
                                {{--                                        <p>Download: <a href="https://archive.org/download/mythium/mythium_vbr_mp3.zip">zip</a>--}}
                                {{--                                            / <a href="https://archive.org/download/mythium/mythium_archive.torrent">torrent</a>--}}
                                {{--                                        </p>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- artist single wrapper end -->

        <!-- top song wrapper start -->
        <div class="album_inner_list ms_cover">
            <div class="container trackalbum">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div>
                            <div class="album_list_wrapper" id="liopsamusic">
                                <ul class="album_list_name ms_cover">
                                    <li>#</li>
                                    <li class="song_title_width">عنوان آهنگ</li>
                                    <li>زمان</li>
                                    <li>دانلود</li>
                                    <li>علاقه</li>

                                </ul>

                                @foreach($musics as $key=>$music)
                                    <ul class="album_inner_list_padding mtviop">


                                        <li><a href="#" class="item-music" data-musicplayid="{{$music->id}}"><span
                                                    class="play_no">0{{$key+1}}</span><span class="play_hover"><i
                                                        class="flaticon-play-button"></i></span></a></li>

                                        <li class="song_title_width">
                                            <div class="top_song_artist_wrapper">

                                                <img src="{{asset($music->image_url)}}" alt="تصویر">

                                                <div class="top_song_artist_contnt">
                                                    <h1><a href="{{$music->path()}}">{{$music->name}}</a></h1>
                                                    <p class="various_artist_text"><a
                                                            href="{{$music->path()}}">{{$music->singer->name}}</a>
                                                    </p>
                                                </div>

                                            </div>
                                        </li>
                                        <li><a href="#" class="item-music" data-musicplayid="{{$music->id}}">{{$music->fullTime}}</a></li>

                                        <li><a href="{{$music->download()}}"><i class="flaticon flaticon-download"></i></a></li>
                                        <li class="text-center">
                                            <a href="#"
                                               class="like-or-dislike-btn {{$music->likes->isEmpty() ? '':'liked'}}"
                                               data-id="{{$music->id}}">
                                                <i class="fa fa-heart"
                                                   style=""></i>
                                            </a>
                                        </li>


                                    </ul>

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('Home.content.music.slidre_treanding_album')

    <!-- top songs wrapper end -->

    @include('Home.footer.quick_link')
    @include('Home.footer.footer')
    {{--@include('Home.footer.play_list')--}}
@endsection

@push('js')
    <script>
        // $('.like-or-dislike-btn').on('click', function (e) {
        //     e.preventDefault();
        //     var $this = $(this),
        //         id = $this.data('id');
        //
        //     $.ajax({
        //         url: '/music/like/' + id,
        //         type: 'get',
        //         dataType: 'json',
        //         success: function (response) {
        //             $this.toggleClass('liked');
        //         }
        //     });
        // });

        $('.item-music').on('click', function (e) {
            e.preventDefault();
            var id = $(this).data('musicplayid');
            $.get('/music/itemAudio/' + id, function (response) {
                var data = JSON.parse(response);
                var source = document.getElementById('audio1');
                source.src = 'http://localhost:8000/' + data.file_url;
                source.load();
                source.play();
            });

        });

    </script>
@endpush
