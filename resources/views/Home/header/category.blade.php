@foreach($item->children as $it)
    <ul>
        <li class="{{$it->children->count() > 0 ? 'has-sub' : ''}}">
            @if($it->children->count() > 0)
                <a href="#">
                    <i class="flaticon-album"></i>{{$it['name']}}
                </a>
                @include('Home.header.category', ['item' => $it])
            @else
                <a href="/music/all"> <i class="flaticon-vinyl"></i>{{$it['name']}}</a>
            @endif
        </li>
    </ul>

@endforeach
