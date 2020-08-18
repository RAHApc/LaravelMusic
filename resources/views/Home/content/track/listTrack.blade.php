@extends('Layout.main')
@section('content')


    <!-- blog category wrapper start-->
    <div class="blog_category_wrapper blog_single_wrapper ms_cover">

        <div class="container">
            <div class="row">

                <div class="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="filter-area ms_cover">
                                <select id="selectitem">
                                    <option value="0">همه</option>
                                    <option value="1">پاپ</option>
                                    <option value="3">تک آهنگ</option>
                                </select>

                                <div class="list-grid">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#grid"> <i
                                                    class="fas fa-th-large"></i></a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#list"><i
                                                    class="fas fa-list-ul"></i></a>
                                        </li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="tab-content btc_shop_index_content_tabs_main jb_cover">
                                <div id="itemMusic">
                                    <div id="grid" class="tab-pane active">
                                        <div class="row">
                                            @foreach($listMusics as $music)
                                                <div class="col-md-4">
                                                    <div class="featured_artist_list shop_video_wrapper  ms_cover">
                                                        <img src="{{asset($music->image_url)}}" class="img-responsive"
                                                             alt="تصویر" style="height: 260px">
                                                        <div class="featured_artist_detail shop_featured_artist">
                                                            <p>
                                                                <a href="{{$music->path()}}">{{$music->name}}</a>
                                                            </p>
                                                            <p class="various_artist_text"><a
                                                                    href="{{$music->path()}}">{{$music->singer->name}}</a>
                                                            </p>


                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div id="list" class="tab-pane fade">
                                        <div class="row">
                                            @foreach($listMusics as $music)
                                                <div class="col-md-6">
                                                    <div
                                                        class="featured_artist_list shop_video_wrapper shop_list_img_wrapper ms_cover">
                                                        <img src="{{asset($music->image_url)}}" class="img-responsive"
                                                             alt="تصویر" style="height: 200px">
                                                        <div class="featured_artist_detail shop_featured_artist">
                                                            <p>
                                                                <a href="{{$music->path()}}">{{$music->name}}</a>
                                                            </p>
                                                            <p class="various_artist_text"><a
                                                                    href="{{$music->path()}}">{{$music->singer->name}}</a>
                                                            </p>


                                                        </div>

                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    {{$listMusics->onEachSide(1)->links()}}
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog category wrapper end -->

@endsection

@push('js')
    <script>
        listmenu();

        function listmenu() {
            $('.tab-pane.fade').hide();
            $('li.nav-item a').on('click', function (e) {
                var liToShow = $(this).attr("href");
                $('.tab-pane').hide();
                $(liToShow).show();
                e.preventDefault();
            });
        }

        function handlePagination() {
            $('.page-link').on('click', function (e) {
                e.preventDefault();
                $.ajax({
                    url: $(this).attr('href'),
                    type: 'get',
                    success: function (data) {
                        $('#itemMusic').html(data);
                        handlePagination();
                        listmenu();
                    }
                });
            });
        }

        $('#selectitem').on('change', function () {
            var id = $(this).val();
            $.ajax({
                url: '/music/selectItemMusic/' + id,
                type: 'get',
                success: function (response) {
                    $('#itemMusic').empty();
                    if (response.length > 0) {
                        $('#itemMusic').append(response);
                        handlePagination();
                        listmenu();
                    } else {
                        $('#itemMusic').append("موردی یافت نشد.")
                    }
                }

            });
        });
    </script>
@endpush
