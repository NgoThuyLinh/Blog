@if ($paginator->hasPages())
    <ul class="pagination navigation" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true" style="float: left; list-style-type: none">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
            </li>
        @else
            <li class="page-item" style="float: left; list-style-type: none">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
            </li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item" style="list-style-type: none; float: left; position: relative;left: 405px;">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true" style="float: left; list-style-type: none;position: relative;left: 405px;">
                <span class="next">@lang('pagination.next')</span>
            </li>
        @endif
    </ul>
@endif
