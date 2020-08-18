<!DOCTYPE html>
<!--[if !IE]><!-->
<html lang="zxx">
<!--[endif]-->


<!-- Mirrored from tunien.iranneginhotel.ir/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 07:54:44 GMT -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <meta charset="utf-8"/>
    <title>Music</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="description" content="Tunein,music,song"/>
    <meta name="keywords" content="Tunein,music,song"/>
    <meta name="author" content=""/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">--}}
{{--    <link rel='stylesheet' href='https://cdn.plyr.io/3.5.6/plyr.css'>--}}
{{--    <link rel="stylesheet" href="{{asset('assets/player/style.css')}}">--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>--}}

<!--Template style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/main/css/animate.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/main/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/main/css/fonts.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/main/css/flaticon.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/main/css/font-awesome.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/main/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/main/css/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/main/css/nice-select.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/main/css/swiper.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/main/css/magnific-popup.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/main/css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/main/css/dark_theme.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/main/css/responsive.css')}}"/>
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/main/images/favicon.png')}}"/>
</head>


<body>
{{--@include('Home.loader')--}}
{{--@include('Home.header.nav')--}}
<div id="app">
    @yield('content')
</div>
{{--    <!-- language modal section -->--}}
{{--</div>--}}


<script src="{{asset('/js/app.js')}}"></script>

<!--custom js files-->
<script src="{{asset('assets/main/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/main/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/main/js/modernizr.js')}}"></script>
<script src="{{asset('assets/main/js/plugin.js')}}"></script>
<script src="{{asset('assets/main/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/main/js/jquery.inview.min.js')}}"></script>
<script src="{{asset('assets/main/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('assets/main/js/swiper.min.js')}}"></script>
<script src="{{asset('assets/main/js/comboTreePlugin.js')}}"></script>
<script src="{{asset('assets/main/js/mp3/jquery.jplayer.min.js')}}"></script>
<script src="{{asset('assets/main/js/mp3/jplayer.playlist.js')}}"></script>
<script src="{{asset('assets/main/js/owl.carousel.js')}}"></script>

<script src="{{asset('assets/main/js/custom.js')}}"></script>
{{--<script src='https://cdnjs.cloudflare.com/ajax/libs/html5media/1.1.8/html5media.min.js'></script>--}}
{{--<script src="{{asset('assets/player/plyr.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/player/script.js')}}"></script>--}}
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    $('.like-or-dislike-btn').on('click', function (e) {
        e.preventDefault();
        var $this = $(this),
            id = $this.data('id');

        $.ajax({
            url: '/music/like/' + id,
            type: 'get',
            dataType: 'json',
            success: function (response) {
                $this.toggleClass('liked');
            }
        });
    });


    var adonisPlaylist, currentPlaylistId, adonisPlayer = {}, adonisAllPlaylists = [],
        adonisPlayerID = "adonis_jplayer_main", adonisPlayerContainer = "adonis_jp_container";
    jQuery(document).ready(function (a) {
        "use strict";

        $('.itemmusicid').on('click', function (e) {
            e.preventDefault();
            console.log($(this).data('itemmusic'));


            var data = $(this).data('itemmusic');
            var trackList = [];

            trackList.push({
                title: data.name,
                artist: data.singer.name || 'ناشناخته',
                mp3: 'http://localhost:8000/' + data.file_url,
                poster: 'http://localhost:8000/' + data.image_url
            });
            audioInitializer(trackList);

        });


        function audioInitializer(audioList) {
            adonisPlayer.init = function () {
                function t(a) {
                    var t = /{(.*?\})/, e = a.replace(t, ""), s = a.match(t, "");
                    if (null != s) var r = s[1].replace("}", "");
                    return {link: r, name: e}
                }

                adonisPlaylist = new adonisJPlayerPlaylist({
                    jPlayer: "#" + adonisPlayerID,
                    cssSelectorAncestor: "#" + adonisPlayerContainer
                }, audioList, {
                    playlistOptions: {enableRemoveControls: !0},
                    swfPath: "/js",
                    supplied: "oga, mp3",
                    useStateClassSkin: !0,
                    autoBlur: !1,
                    smoothPlayBar: !1,
                    keyEnabled: !1,
                    audioFullScreen: !0,
                    display: !1,
                    autoPlay: !1
                }), a("#" + adonisPlayerID).bind(a.jPlayer.event.loadeddata, function (e) {
                    t(a(this).data("jPlayer").status.media.artist);
                    var s = a(this).data("jPlayer").status.media.poster;
                    a(this).data("jPlayer").status.media.title;
                    a("#" + adonisPlayerContainer + " .current-item .song-poster img").attr("src", s), a("#" + adonisPlayerID).find("img").attr("alt", "")
                }), a(document).on("click", "#adonis-playlist .playlist-item .song-poster", function () {
                    a(this).parent().find(".jp-playlist-item").trigger("click")
                }), a("#" + adonisPlayerID).bind(a.jPlayer.event.play + ".jp-repeat", function (e) {
                    var s = a(this).data("jPlayer").status.media.poster;
                    a("#" + adonisPlayerContainer).find(".adonis-player .song-poster img").attr("src", s), a("#" + adonisPlayerContainer).find(".blurred-bg").css("background-image", "url(" + s + ")");
                    var r = t(a(this).data("jPlayer").status.media.artist);
                    r.name ? a("#" + adonisPlayerContainer + " .artist-name").html('<a href="' + r.link + '">' + r.name + "</a>") : a("#" + adonisPlayerContainer + " .artist-name").html(r.name), void 0 !== currentPlaylistId && a("[data-album-id='" + currentPlaylistId + "']").addClass("jp-playing")
                }), a(".adonis-mute-control").click(function () {
                    var t = a(this);
                    if (t.hasClass("muted")) {
                        var e = t.attr("data-volume");
                        a("#" + adonisPlayerID).jPlayer("unmute"), t.removeClass("muted"), a("#" + adonisPlayerID).jPlayer("volume", e)
                    } else {
                        e = a("#" + adonisPlayerID).data("jPlayer").options.volume;
                        t.attr("data-volume", e), a("#" + adonisPlayerID).jPlayer("mute").addClass("muted"), t.addClass("muted")
                    }
                }), a("#" + adonisPlayerID).bind(a.jPlayer.event.pause + ".jp-repeat", function (t) {
                    void 0 !== currentPlaylistId && a("[data-album-id='" + currentPlaylistId + "']").removeClass("jp-playing")
                });
                var e = !1;
                a(".jp-progress").mousedown(function (t) {
                    e = !0;
                    var o = r(t.pageX, a(this));
                    a(this).addClass("dragActive"), s(o)
                }), a(document).mouseup(function (t) {
                    if (e) {
                        e = !1;
                        var o = r(t.pageX, a(".jp-progress.dragActive"));
                        a(".jp-progress.dragActive"), o && (a(".jp-progress.dragActive").removeClass("dragActive"), s(o))
                    }
                }), a(document).mousemove(function (t) {
                    if (e) {
                        var o = r(t.pageX, a(".jp-progress.dragActive"));
                        s(o)
                    }
                });
                var s = function (t) {
                    var e = a("#" + adonisPlayerID).jPlayer.duration;
                    return a(".jp-play-bar").css("width", t + "%"), a("#" + adonisPlayerID).jPlayer("playHead", t), a("#" + adonisPlayerID).jPlayer.currentTime = e * t / 100, !1
                };

                function r(t, e) {
                    var s = e, r = (a("#" + adonisPlayerID).jPlayer.duration, 100 * (t - s.offset().left) / s.width());
                    return r > 100 && (r = 100), r < 0 && (r = 0), r
                }

                var o = !1;
                a(document).on("mousedown", ".jp-volume-bar", function (a) {
                    o = !0, i(a.pageX)
                }), a(document).mouseup(function (a) {
                    o && (o = !1, i(a.pageX))
                }), a(document).mousemove(function (a) {
                    o && i(a.pageX)
                });
                var i = function (t) {
                    var e = a(".jp-volume-bar"), s = 100 * (t - e.offset().left) / e.width();
                    s > 100 && (s = 100), s < 0 && (s = 0), a("#" + adonisPlayerID).jPlayer("volume", s / 100)
                };
                a(document).on("click", ".remove-track-item-playlist", function () {
                    var a = openMenu.parents("li.item");
                    adonisPlaylist.remove(a.length - 1)
                }), a(document).on("click", ".remove-track-item-current", function () {
                    adonisPlaylist.remove(adonisPlaylist.current)
                }), adonisPlayer.addTrack = function (a) {
                    var t, e = tracks[a], s = !1;
                    return adonisPlaylist.playlist.forEach(function (e, r) {
                        e.id == a && (s = !0, t = r)
                    }), !1 === s && (adonisPlaylist.add(e), t = adonisPlaylist.playlist.length - 1), t
                }, adonisPlayer.transferAlbum = function (t) {
                    a(document).on("click", t, function (t) {
                        t.preventDefault();
                        var e = a(this).attr("data-poster-target"), s = a(this).attr("data-poster"),
                            r = a(this).attr("data-track"), o = a(e).clone();
                        o.css("background-image", "url(" + s + ")").fadeOut(0), o.insertAfter(a(e)), a(e).fadeOut("slow", function () {
                            a(this).remove()
                        }), o.fadeIn("slow");
                        var i = adonisPlayer.addTrack(r);
                        adonisPlaylist.play(i)
                    })
                }, adonisPlayer.transferAlbum(".transfer-album"), a(document).on("click", ".adonis-album-button", function (t) {
                    var e = parseInt(a(this).attr("data-album-id"));
                    e && void 0 !== adonisAllPlaylists[e] && currentPlaylistId !== e && (adonisPlaylist.setPlaylist(adonisAllPlaylists[e]), currentPlaylistId = e), a("#" + adonisPlayerID).data().jPlayer.status.paused ? setTimeout(function () {
                        adonisPlaylist.play(0)
                    }, 700) : adonisPlaylist.pause()
                }), adonisPlayer.addPlaylist = function (a) {
                    a && void 0 !== adonisAllPlaylists[a] && adonisAllPlaylists[a].forEach(function (a) {
                        adonisPlaylist.add(a)
                    })
                }
            }, adonisAllPlaylists[0] = audioList, a(window).imagesLoaded(function () {
                setTimeout(function () {
                    adonisPlayer.init()
                }, 100), setTimeout(function () {
                    adonisPlaylist.setPlaylist(adonisAllPlaylists[0])
                }, 5e3)
            })
        }

    });


</script>
@stack('js')

<!-- custom js-->


</body>


</html>
