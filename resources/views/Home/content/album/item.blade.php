
<div id="men" class="tab-pane active">
    <div class="row">
        @foreach($categoryAlbum as $m)
        <div  class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1" id="listm">
            <div class="treanding_slider_main_box release_box_main_content ms_cover">
                <img src="{{asset($m->image_url)}}" alt="تصویر" style="height: 400px;">
                <div class="release_content_artist release_content_artist2">
                    <p ><a href="{{$m->path()}}" id="titlem">{{$m->name}}</a></p>
                    <p class="various_artist_text"><a href="{{$m->path()}}">{{$m->singer->name}}</a></p>
                </div>
                <div class="ms_treanding_box_overlay release_box_overlay">
                    <div class="ms_tranding_box_overlay"></div>

                </div>
            </div>
        </div>
       @endforeach
    </div>
</div>


@if(isset($status))
{{$categoryAlbum->onEachSide(1)->links()}}
@endif
