@extends('Layout.main')

@section('content')
    @include('Home.loader')
    @include('Home.header.nav')
    @include('Home.header.slider')
    @include('Home.content.slider_treanding_song')
    @include('Home.content.slider_top_song')
    @include('Home.content.album')
    @include('Home.content.post_end')
{{--    @include('Home.content.eshterak')--}}
{{--    @include('Home.content.slider_berand')--}}
{{--    @include('Home.footer.quick_link')--}}
    @include('Home.footer.footer')
    @include('Home.footer.play_list')
@endsection

