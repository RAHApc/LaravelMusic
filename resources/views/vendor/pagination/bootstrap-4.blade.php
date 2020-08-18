
<?php
    /** @var Illuminate\Pagination\LengthAwarePaginator  $paginator */
//         LengthAwarePaginator
?>
@if($paginator->hasPages())
<div class="blog_pagination_section ms_cover">
    <ul>
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li >
                <a href="{{ $paginator->previousPageUrl() }}" class="prev page-link"> <i class="flaticon-right-arrow"></i> </a>
            </li>
        @else
        <li>
            <a href="{{ $paginator->previousPageUrl() }}" class="prev page-link"> <i class="flaticon-right-arrow"></i> </a>
        </li>

        @endif

{{--        <li><a href="#"></a>--}}
{{--        </li>--}}
{{--        <li class="third_pagger"><a href="#">2</a>--}}
{{--        </li>--}}
{{--        <li class="d-block d-sm-block d-md-block d-lg-block"><a href="#"></a>--}}
{{--        </li>--}}
{{--        <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">...</a>--}}
{{--        </li>--}}
{{--        <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">6</a>--}}
{{--        </li>--}}

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
            @endif
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="third_pagger" ><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" class="prev page-link"> <i class="flaticon-left-arrow"></i> </a>
            </li>
        @else
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" class="prev page-link"> <i class="flaticon-left-arrow"></i> </a>
            </li>
        @endif

    </ul>
</div>
@endif




{{--@if ($paginator->hasPages())--}}
{{--    <nav>--}}
{{--        <ul class="pagination">--}}
{{--            --}}{{-- Previous Page Link --}}
{{--            @if ($paginator->onFirstPage())--}}
{{--                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">--}}
{{--                    <span class="page-link" aria-hidden="true">&lsaquo;</span>--}}
{{--                </li>--}}
{{--            @else--}}
{{--                <li class="page-item">--}}
{{--                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>--}}
{{--                </li>--}}
{{--            @endif--}}

{{--            --}}{{-- Pagination Elements --}}
{{--            @foreach ($elements as $element)--}}
{{--                --}}{{-- "Three Dots" Separator --}}
{{--                @if (is_string($element))--}}
{{--                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>--}}
{{--                @endif--}}

{{--                --}}{{-- Array Of Links --}}
{{--                @if (is_array($element))--}}
{{--                    @foreach ($element as $page => $url)--}}
{{--                        @if ($page == $paginator->currentPage())--}}
{{--                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>--}}
{{--                        @else--}}
{{--                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
{{--                @endif--}}
{{--            @endforeach--}}

{{--            --}}{{-- Next Page Link --}}
{{--            @if ($paginator->hasMorePages())--}}
{{--                <li class="page-item">--}}
{{--                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>--}}
{{--                </li>--}}
{{--            @else--}}
{{--                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">--}}
{{--                    <span class="page-link" aria-hidden="true">&rsaquo;</span>--}}
{{--                </li>--}}
{{--            @endif--}}
{{--        </ul>--}}
{{--    </nav>--}}
{{--@endif--}}
