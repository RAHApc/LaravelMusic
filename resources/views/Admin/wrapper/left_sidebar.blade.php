
<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="index.html"><img src="{{asset('assets/mainAdmin/images/icon.svg')}}" alt="Brego Logo" class="img-fluid logo"><span>برگو</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="{{asset('assets/mainAdmin/images/user.png')}}" class="user-photo" alt="User Profile Picture">
            </div>
            <div class="dropdown">
                <span>خوش آمديد،</span>
{{--                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>{{$infoUser->name}}</strong></a>--}}
                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                    <li><a href="page-profile.html"><i class="icon-user"></i>پروفایل من</a></li>
                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>پیام</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>تنظیمات</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-power"></i>خروج</a></li>
                </ul>
            </div>
            <a href="javascript:void(0);" class="btn btn-sm btn-block btn-primary btn-round mt-3" title=""><i class="icon-plus mr-1"></i> ایجاد جدید</a>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="header">اصلی</li>

                <li>
                    <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i><span>کاربران</span></a>
                    <ul>
                        <li><a href="/admin/users">نمایش کاربران</a></li>
                        <li><a href="/admin/levels">سطح مدیریت ادمین ها</a></li>
                        <li><a href="/admin/levels/create">ایجاد سطح مدیریت مدیران</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i><span>دسترسی ها</span></a>
                    <ul>
                        <li><a href="/admin/permissions">نمایش دسترسی</a></li>
                        <li><a href="/admin/permissions/create">درج دسترسی</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i><span>نقش ها</span></a>
                    <ul>
                        <li><a href="/admin/roles">نمایش نقش</a></li>
                        <li><a href="/admin/roles/create">درج نقش</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i><span>دسته بندی موزیک</span></a>
                    <ul>
                        <li><a href="/admin/categories">نمایش دسته ها</a></li>
                        <li><a href="/admin/categories/create">درج دسته بندی</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i><span>خواننده ها</span></a>
                    <ul>
                        <li><a href="/admin/singers">نمایش خواننده ها</a></li>
                        <li><a href="/admin/singers/create">درج خواننده</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i><span> آلبوم ها</span></a>
                    <ul>
                        <li><a href="/admin/albums">لیست آلبوم ها</a></li>
                        <li><a href="/admin/albums/create">درج آلبوم</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i><span>موزیک</span></a>
                    <ul>
                        <li><a href="/admin/musics">لیست موزیک ها</a></li>
                        <li><a href="/admin/musics/create">درج موزیک</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i><span>نظرات</span></a>
                    <ul>
                        <li><a href="/admin/comments">نظرهای موزیک ها</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i><span>رویدادها</span></a>
                    <ul>
                        <li><a href="/admin/events">لیست رویداد ها</a></li>
                        <li><a href="/admin/events/create">درج رویداد</a></li>
                    </ul>
                </li>
















                <li class="header">برنامه</li>
                <li><a href="app-inbox.html"><i class="icon-envelope"></i> <span>ایمیل</span> <span class="badge badge-default float-right mr-0">12</span></a></li>
                <li><a href="app-chat.html"><i class="icon-bubbles"></i> <span>چت</span></a></li>
                <li><a href="app-calendar.html"><i class="icon-calendar"></i> <span>تقویم</span></a></li>
                <li class="header">عناصر رابط کاربری</li>
                <li>
                    <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i><span>کامپونت ها</span></a>
                    <ul>
                        <li><a href="ui-helper-class.html">کلاس های کمکی</a></li>
                        <li><a href="ui-bootstrap.html">رابط کاربری بوت استرپ</a></li>
                        <li><a href="ui-typography.html">تایپوگرافی</a></li>
                        <li><a href="ui-tabs.html">زبانه ها</a></li>
                        <li><a href="ui-buttons.html">دکمه ها</a></li>
                        <li><a href="ui-icons.html">آیکون ها</a></li>
                        <li><a href="ui-notifications.html">اطلاعیه</a></li>
                        <li><a href="ui-colors.html">رنگ</a></li>
                        <li><a href="ui-dialogs.html">دیالوگ ها</a></li>
                        <li><a href="ui-list-group.html">گروه فهرست</a></li>
                        <li><a href="ui-media-object.html">شی رسانه</a></li>
                        <li><a href="ui-modals.html">مودال ها</a></li>
                        <li><a href="ui-nestable.html">تو در تو</a></li>
                        <li><a href="ui-progressbars.html">نوارهای پیشرفت</a></li>
                        <li><a href="ui-range-sliders.html">اسلایدرهای محدوده</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#forms" class="has-arrow"><i class="icon-pencil"></i><span>فرم ها</span></a>
                    <ul>
                        <li><a href="forms-basic.html">عناصر پایه</a></li>
                        <li><a href="forms-advanced.html">عناصر پیشرفته</a></li>
                        <li><a href="forms-validation.html">اعتبار سنجی فرم</a></li>
                        <li><a href="forms-wizard.html">فرم پیشرفته</a></li>
                        <li><a href="forms-dragdropupload.html">آپلود با کشیدن و رها کردن</a></li>
                        <li><a href="forms-cropping.html">برش تصویر</a></li>
                        <li><a href="forms-summernote.html">سامر نوت</a></li>
                        <li><a href="forms-editors.html">ویرایشگر CK</a></li>
                        <li><a href="forms-markdown.html">نشانه گذاری</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#Tables" class="has-arrow"><i class="icon-layers"></i><span>جداول</span></a>
                    <ul>
                        <li><a href="table-normal.html">جداول معمولی</a></li>
                        <li><a href="table-jquery-datatable.html">پایگاه داده جی کوئری</a></li>
                        <li><a href="table-editable.html">جداول قابل ویرایش</a></li>
                        <li><a href="table-color.html">رنگ جداول</a></li>
                        <li><a href="table-filter.html">فیلتر جدول</a></li>
                        <li><a href="table-dragger.html">جدول کشیدن</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#charts" class="has-arrow"><i class="icon-pie-chart"></i><span>نمودارها</span></a>
                    <ul>
                        <li><a href="chart-c3.html">نمودارهای C3</a></li>
                        <li><a href="chart-morris.html">موریس</a></li>
                        <li><a href="chart-flot.html">فلوت</a></li>
                        <li><a href="chart-chartjs.html">ChartJS</a></li>
                        <li><a href="chart-jquery-knob.html">جی کوئری Knoob</a></li>
                        <li><a href="chart-sparkline.html">نمودار اسپارک لاین</a></li>
                    </ul>
                </li>
                <li class="header">بیشتر</li>
                <li><a href="widgets.html"><i class="icon-puzzle"></i><span>ابزارک ها</span></a></li>
                <li>
                    <a href="#Pages" class="has-arrow"><i class="icon-docs"></i><span>صفحات</span></a>
                    <ul>
                        <li><a href="page-login.html">ورود</a></li>
                        <li><a href="page-register.html">ثبت نام</a></li>
                        <li><a href="page-forgot-password.html">فراموشی رمزعبور</a></li>
                        <li><a href="page-404.html">صفحه 404</a></li>
                        <li><a href="page-blank.html">صفحه خالی</a></li>
                        <li><a href="page-search-results.html">نتایج جستجو</a></li>
                        <li><a href="page-profile.html">پروفایل </a></li>
                        <li><a href="page-invoices.html">فاکتورها </a></li>
                        <li><a href="page-gallery.html">گالری تصویر </a></li>
                        <li><a href="page-timeline.html">خط زمانی</a></li>
                        <li><a href="page-pricing.html">قیمت گذاری</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#Maps" class="has-arrow"><i class="icon-map"></i><span>نقشه ها</span></a>
                    <ul>

                        <li><a href="map-jvectormap.html">نقشه jVector</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
