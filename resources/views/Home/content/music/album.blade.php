@extends('Layout.main')
@section('content')
        @include('Home.header.nav')
    <!--inner Title Start -->
    <div class="indx_title_main_wrapper">
        <div class="title_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="indx_title_left_wrapper ms_cover">
                        <h2>لیست آلبوم</h2>

                        <ul>
                            <li><a href="#">خانه</a> &nbsp;&nbsp;&nbsp;/</li>
                            <li>لیست آلبوم</li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- inner Title End -->


    <!-- release album wrapper start -->
    <div class="treanding_songs_wrapper release_wrapper album_list_wrapper album_list_wrapper2 ms_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="release_tabs_wrapper album_list_tab">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active albumListItem" data-musicid="0"
                                                    data-toggle="tab"
                                                    href="#home"> همه</a>
                            </li>

                            @foreach($childrenCategory as $catMusic)
                                <li class="nav-item"><a class="nav-link albumListItem" data-musicid="{{$catMusic->id}}"
                                                        data-toggle="tab" href="#menu1">{{$catMusic->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="tab-content">
                        <div id="home" class="tab-pane active">
                            <div class="row">
                                @foreach($albums as $album)
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                        <div class="treanding_slider_main_box release_box_main_content ms_cover">
                                            <img src="{{asset($album->image_url)}}" alt="تصویر" style="height: 400px;">
                                            <div class="release_content_artist">
                                                <p><a href="{{$album->path()}}">{{$album->name}}</a></p>
                                                <p class="various_artist_text"><a href="{{$album->path()}}">{{$album->singer->name}}</a></p>
                                            </div>
                                            <div class="ms_treanding_box_overlay release_box_overlay">
                                                <div class="ms_tranding_box_overlay"></div>


                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            {{$albums->onEachSide(1)->links()}}
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- release album wrapper end -->


@endsection

@push('js')
    <script>
        function handlePagination() {
            $('.page-link').on('click', function (e) {
                e.preventDefault();

                $.ajax({
                    url: $(this).attr('href'),
                    type: 'get',
                    success: function (data) {
                        $('.tab-content').html(data);
                        handlePagination();
                    }
                });
            });
        }

        $('.albumListItem').on('click', function (e) {
            var id = $(this).data('musicid');
            $.ajax({
                url: '/listItemMusic/' + id,
                type: 'get',
                success: function (data) {
                    $('.tab-content').empty();
                    if (data.length > 0) {
                        $('.tab-content').append(data);
                        handlePagination();
                    } else {
                        $('.tab-content').append("موردی یافت نشد.");
                    }
                }

            });
        });

        handlePagination();
    </script>
@endpush
