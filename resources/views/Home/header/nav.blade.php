<!-- preloader Start -->

<div class="cursor"></div>
<!-- top navi wrapper Start -->
<div class="m24_main_wrapper">
    <div id="sidebar" class="bounce-to-right index3_sidebar">
        <div id="toggle_close">×</div>
        <div id="cssmenu">
            <a href="index-2.html"><img src="{{asset('assets/main/images/logo3.png')}}" alt="آرم"></a>
            <ul class="sidebb">
                <li><a href="/"><i class="flaticon-home"></i>صفحات اصلی</a></li>

                @foreach($parentCategories as $item)
                    <li class="has-sub">
                        @if($item->children->count() > 0)
                            <a href="#">
                                <i class="flaticon-album"></i>{{$item['name']}}
                            </a>
                            @include('Home.header.category')
                        @else
                            <a href="/music/all"> <i class="flaticon-vinyl"></i>{{$item['name']}}</a>
                        @endif

                    </li>
                @endforeach


                <li><a href="/music/event"><i class="flaticon-clock"></i>رویدادهای موسیقی</a></li>


            </ul>

        </div>
    </div>
    <!-- top navi wrapper end -->
    <div class="m24_navi_main_wrapper index2_main_header index3_main_header ms_cover">
        <div class="container-fluid">
            <div class="m24_logo_wrapper">
                <div class="ms_logo_div">
                    <a href="index-2.html">
                        <img src="{{asset('assets/main/images/logo3.png')}}" alt="آرم">
                    </a>
                </div>
                <div id="toggle">
                    <a href="#"><i class="flaticon-menu-1"></i></a>
                </div>
            </div>

            <div class="m24_header_right_Wrapper d-none d-sm-none d-md-none d-lg-none d-xl-block">
                <div class="m24_signin_wrapper">
                    <a href="#" data-toggle="modal" data-target="#login_modal"><img
                            src="{{asset('assets/main/images/pf.png')}}" alt="تصویر">
                        <div class="login_top_wrapper">
                            <p>ورود / ثبت نام</p>

                        </div>
                    </a>
                </div>
                <div class="crm_message_dropbox_wrapper">
                    <div class="nice-select budge_noti_wrapper" tabindex="0"><span class="current budge_noti"><i
                                class="flaticon-bell"></i></span>

                        <ul class="list pullDown">
                            <li><a href="#">3 اعلان جدید</a>
                            </li>
                            <li>
                                <div class="crm_mess_main_box_wrapper">
                                    <div class="crm_mess_img_wrapper">
                                        <img src="{{asset('assets/main/images/nt1.jpg')}}" alt="تصویر">
                                    </div>
                                    <div class="crm_mess_img_cont_wrapper">
                                        <h4>قول پیاده روی <span>12:30 ظهر</span></h4>
                                        <p>آوا کورنیش</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="crm_mess_main_box_wrapper">
                                    <div class="crm_mess_img_wrapper">
                                        <img src="{{asset('assets/main/images/nt2.jpg')}}" alt="تصویر">
                                    </div>
                                    <div class="crm_mess_img_cont_wrapper">
                                        <h4>قرار وقت ملاقات<span>01:30</span></h4>
                                        <p>پوکال می گوید</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="crm_mess_main_box_wrapper">
                                    <div class="crm_mess_img_wrapper">
                                        <img src="{{asset('assets/main/images/nt3.jpg')}}" alt="تصویر">
                                    </div>
                                    <div class="crm_mess_img_cont_wrapper">
                                        <h4>باتو خوشحال میشم<span>12:30 ظهر</span></h4>
                                        <p>آهنگ عاشقانه</p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="crm_mess_all_main_box_wrapper">
                                    <p><a href="#">همه را ببین</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="m24_navigation_wrapper">
                <div class="mainmenu d-xl-block d-lg-block d-md-none d-sm-none d-none">
                    <ul class="main_nav_ul">

                        <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">مرور کردن <i
                                    class="flaticon-down-arrow"></i></a>
                            <ul class="navi_2_dropdown">
                                <li class="parent">
                                    <a href="add_playlist.html"><i class="fas fa-caret-right"></i>لیست پخش من</a>
                                </li>
                                <li class="parent">
                                    <a href="artist.html"><i class="fas fa-caret-right"></i>هنرمندان برتر</a>
                                </li>
                                <li class="parent">
                                    <a href="genres.html"><i class="fas fa-caret-right"></i>ژانرهای جدید</a>
                                </li>
                                <li class="parent">
                                    <a href="album.html"><i class="fas fa-caret-right"></i>همه آلبوم ها</a>
                                </li>
                                <li class="parent">
                                    <a href="album_list.html"><i class="fas fa-caret-right"></i>برترین های هفته</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="stations.html" class="gc_main_navigation">رادیو</a></li>
                        <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">بیشتر <i
                                    class="flaticon-down-arrow"></i></a>
                            <ul class="navi_2_dropdown">
                                <li class="parent">
                                    <a href="contact_us.html"><i class="fas fa-caret-right"></i>مخاطب</a>
                                </li>
                                <li class="parent">
                                    <a href="pricing_plan.html"><i class="fas fa-caret-right"></i>صفحه خرید اشتراک</a>
                                </li>
                                <li class="parent">
                                    <a href="error_page.html"><i class="fas fa-caret-right"></i> صفحه خطا </a>
                                </li>
                                <li class="parent">
                                    <a href="favourite.html"><i class="fas fa-caret-right"></i> آهنگ مورد علاقه </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- mainmenu end -->
               <search-web></search-web>
            </div>
        </div>
    </div>

    <!-- navi wrapper End -->
</div>

@push('js')
{{--    <script>--}}
{{--        $('#searchAM').on('click', function (e) {--}}
{{--            e.preventDefault();--}}
{{--            var searchText = $('#searchAMtxt').val();--}}
{{--            if (searchText == "") {--}}

{{--                $('#searchAMerror').css('display', 'block').fadeOut(3000);--}}
{{--            }--}}
{{--            $.ajax({--}}
{{--                url: '/search',--}}
{{--                type:'post',--}}
{{--                dataType: 'JSON',--}}
{{--                data: {searchText: searchText},--}}
{{--                success: function (response) {--}}
{{--                   document.baseURI+'/music/trackAlbum/'+response[0].id;--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
@endpush
