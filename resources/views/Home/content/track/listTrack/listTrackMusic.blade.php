<div id="grid" class="tab-pane active">
    <div class="row">
        @foreach($listMusics as $music)
            <div class="col-md-4">
                <div class="featured_artist_list shop_video_wrapper  ms_cover">
                    <img src="{{asset($music->image_url)}}" class="img-responsive"
                         alt="تصویر" style="height: 260px">
                    <div class="featured_artist_detail shop_featured_artist">
                        <p><a href="{{$music->path()}}">{{$music->name}}</a></p>
                        <p class="various_artist_text"><a href="{{$music->path()}}">{{$music->singer->name}}</a></p>


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
                        <p><a href="{{$music->path()}}">{{$music->name}}</a></p>
                        <p class="various_artist_text"><a href="{{$music->path()}}">{{$music->singer->name}}</a></p>


                    </div>

                </div>
            </div>
        @endforeach
    </div>
</div>


{{$listMusics->onEachSide(1)->links()}}
