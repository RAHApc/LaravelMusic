<!-- release album wrapper start -->
<div class="treanding_songs_wrapper release_wrapper index3_release_wrapper ms_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="ms_heading_wrapper white_heading_wrapper">
                    <h1>انتشار آلبوم های جدید
                    </h1>
                </div>
                <div class="relaese_viewall_wrapper">
                    <a href="/album/all"> مشاهده همه <i class="flaticon-left-arrow"></i></a>
                </div>
                <div class="release_tabs_wrapper">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active list-cat-id" id="hom" data-albumid="itemTab(0)"
                                                data-toggle="tab" href="#home">همه</a>
                        </li>
                        @foreach($childrenCategory as $item)
                            <li class="nav-item"><a class="nav-link list-cat-id"
                                                    data-toggle="tab" data-albumid="{{$item->id}}"
                                                    href="#men">{{$item['name']}}</a>
                            </li>
                        @endforeach

                    </ul>
                </div>

            </div>
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="tab-content">

                    <div class="tab-pane active">
                        <div class="row">
                            @foreach($albums as $album)
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                    <div class="treanding_slider_main_box release_box_main_content ms_cover">
                                        <img src="{{asset($album->image_url)}}" alt="تصویر" style="height: 400px;">
                                        <div class="release_content_artist release_content_artist2">
                                            <p><a href="{{$album->path()}}">{{$album->name}}</a></p>
                                            <p class="various_artist_text"><a
                                                    href="{{$album->path()}}">{{$album->singer->name}}</a></p>
                                        </div>
                                        <div class="ms_treanding_box_overlay release_box_overlay">
                                            <div class="ms_tranding_box_overlay"></div>
                                            <div class="ms_tranding_more_icon">
                                                <i class="flaticon-menu"></i>
                                            </div>
                                            <ul class="tranding_more_option">
                                                <li><a href="#"><span class="opt_icon"><i
                                                                class="flaticon-playlist"></i></span>لیست پخش</a></li>
                                                <li><a href="#"><span class="opt_icon"><i
                                                                class="flaticon-star"></i></span>مورد
                                                        علاقه</a></li>
                                                <li><a href="#"><span class="opt_icon"><i
                                                                class="flaticon-share"></i></span>اشتراک
                                                        گذاری</a></li>
                                                <li><a href="#"><span class="opt_icon"><i
                                                                class="flaticon-files-and-folders"></i></span>مشاهده
                                                        اشعار</a></li>
                                                <li><a href="#"><span class="opt_icon"><i
                                                                class="flaticon-trash"></i></span>حذف</a>
                                                </li>
                                            </ul>
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
</div>

<!-- release album wrapper end -->
@push('js')
<script>
    $('.list-cat-id').on('click', function () {
        var id = $(this).data('albumid');
        $.ajax({
            type: 'GET',
            url: '/album/listItem/' + id,
            dataType: 'html',
            success: function (data) {
                $('.tab-content').empty();
                if (data.length > 0) {
                    $('.tab-content').append(data);
                } else {
                    $('.tab-content').append("موردی یافت نشد.");
                }
            }
        });
    });
</script>
@endpush
