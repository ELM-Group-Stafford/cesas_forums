@if ($paginator->hasPages())
    <aside class="card card-pagination {{ $cardClasses ?? '' }}" @testhook("pagination")>
        <nav class="actions actions-no-collapse">
            <span class="action action-flexible-space"></span>

            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <a class="action btn btn-tertiary btn-disabled btn-size-less-tall" aria-label="@lang('pagination.previous')"><span aria-hidden="true">&lsaquo;</span></a>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="action btn btn-tertiary btn-size-less-tall" aria-label="@lang('pagination.previous')">&lsaquo;</a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="action pagination-hellip hide-s" aria-disabled="true">{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="action btn btn-tertiary btn-active btn-size-less-tall hide-s" aria-current="page">{{ $page }}</a>
                        @else
                            <a href="{{ $url }}" class="action btn btn-tertiary btn-size-less-tall hide-s">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="action btn btn-tertiary btn-size-less-tall" aria-label="@lang('pagination.next')">&rsaquo;</a>
            @else
                <a class="action btn btn-tertiary btn-disabled btn-size-less-tall" aria-label="@lang('pagination.next')"><span aria-hidden="true">&rsaquo;</span></a>
            @endif

            <span class="action action-flexible-space"></span>
        </nav>
    </aside>
@elseif(isset($padIfNoPagination) && $padIfNoPagination === true)
    <div>&nbsp;</div>
@endif
