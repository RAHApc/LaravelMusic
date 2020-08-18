
<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">

        <div class="navbar-left">
            <div class="navbar-btn">
                <a href="index.html"><img src="{{asset('assets/mainAdmin/images/icon.svg')}}" alt="Brego Logo" class="img-fluid logo"></a>
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>
            <form id="navbar-search" class="navbar-form search-form">
                <input value="" class="form-control" placeholder="جستجو در اینجا..." type="text">
                <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
            </form>
        </div>

        <div class="navbar-right">
            <div id="navbar-menu">
                <ul class="nav navbar-nav">
                    <li><a href="page-social.html" class="social icon-menu" title="News">اجتماعی</a></li>
                    <li><a href="page-news.html" class="news icon-menu" title="News">اخبار</a></li>
                    <li><a href="javascript:void(0);" class="megamenu_toggle icon-menu" title="منوی مگا">مگا</a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                            <i class="icon-envelope"></i>
                            <span class="notification-dot bg-green">4</span>
                        </a>
                        <ul class="dropdown-menu right_chat email vivify fadeIn">
                            <li class="header green">شما 4 ایمیل جدید دارید</li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <div class="avtar-pic w35 bg-red"><span>FC</span></div>
                                        <div class="media-body">
                                            <span class="name">آرش خادملو <small class="float-right">همین حالا</small></span>
                                            <span class="message">به روز رسانی گیتهاب</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <div class="avtar-pic w35 bg-indigo"><span>FC</span></div>
                                        <div class="media-body">
                                            <span class="name">آرش خادملو <small class="float-right">12 دقیقه پیش</small></span>
                                            <span class="message">پیام جدید</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="{{asset('assets/mainAdmin/images/xs/avatar5.jpg')}}" alt="">
                                        <div class="media-body">
                                            <span class="name">آرش خادملو <small class="float-right">12 دقیقه پیش</small></span>
                                            <span class="message">رفع اشکال طراحی</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media mb-0">
                                        <img class="media-object " src="{{asset('assets/mainAdmin/images/xs/avatar2.jpg')}}" alt="">
                                        <div class="media-body">
                                            <span class="name">آرش خادملو <small class="float-right">2 ساعت پیش</small></span>
                                            <span class="message">رفع اشکال</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                            <i class="icon-bell"></i>
                            <span class="notification-dot bg-azura">4</span>
                        </a>
                        <ul class="dropdown-menu feeds_widget vivify fadeIn">
                            <li class="header blue">شما 4 اطلاعیه جدید دارید</li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="feeds-left bg-red"><i class="fa fa-check"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-danger">مشکل حل شده<small class="float-right text-muted">9:10 صبح</small></h4>
                                        <small>ما همه اشکال طراحی با پاسخگو را رفع کرده ایم</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <div class="feeds-left bg-info"><i class="fa fa-user"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-info">کاربر جدید <small class="float-right text-muted">9:15 صبح</small></h4>
                                        <small>حس خوبی دارم توپ توپم! با تشکر از تیم</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <div class="feeds-left bg-orange"><i class="fa fa-question-circle"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-warning">هشدار سرور <small class="float-right text-muted">9:10 صبح</small></h4>
                                        <small>اتصال شما خصوصی نیست</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <div class="feeds-left bg-green"><i class="fa fa-thumbs-o-up"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-success">2 بازخورد جدید <small class="float-right text-muted">9:10 صبح</small></h4>
                                        <small>این یک پایان هوشمند برای سایت شما خواهد بود</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="right_toggle icon-menu" title="Right Menu"><i class="icon-bubbles"></i></a></li>
                    <li><a href="page-login.html" class="icon-menu"><i class="icon-power"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
