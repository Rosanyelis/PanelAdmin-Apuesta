@if ($paginator->hasPages())
    <ul class="pagination page1-links" aria-label="{{ __('Pagination Navigation') }}">
        @if ($paginator->onFirstPage())
            <li class="page-item prev disabled">
                <a href="" class="page-link ">Anterior</a>
            </li>
        @else
            <li class="page-item prev">
                <a href="{{ $paginator->previousPageUrl() }}" class="page-link ">Anterior</a>
            </li>
        @endif
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
            <li class="page-item active">
                <a href="" class="page-link">{{ $element }}</a>
            </li>
                
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                    <li class="page-item active">
                        <a href="" class="page-link">{{ $page }}</a>
                    </li>
                       
                    @else
                    <li class="page-item">
                        <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                    </li>
                       
                    @endif
                @endforeach
            @endif
        @endforeach
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item next">
                <a href="{{ $paginator->nextPageUrl() }}" class="page-link">Siguiente</a>
            </li>
        @else
        <li class="page-item next disabled">
            <a href="" class="page-link">Siguiente</a>
        </li>
        @endif
    </ul>
                    
@endif
