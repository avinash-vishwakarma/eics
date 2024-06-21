<!-- resources/views/custom_pagination.blade.php -->
<ul>
    @if ($paginator->onFirstPage())
        <li class="disabled"><a href="#" class="page-numbers"><i class="fa-solid fa-chevron-left"></i></a></li>
    @else
        <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="page-numbers"><i class="fa-solid fa-chevron-left"></i></a></li>
    @endif

    @foreach ($elements as $element)
        @if (is_string($element))
            <li class="disabled"><a href="#"  class="page-numbers">{{ $element }}</a></li>
        @endif

        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li ><a href="#" class="active page-numbers">{{ $page }}</a></li>
                @else
                    <li><a href="{{ $url }}" class="page-numbers">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    @if ($paginator->hasMorePages())
        <li><a href="{{ $paginator->nextPageUrl() }}" rel="next" class="page-numbers"><i class="fa-solid fa-chevron-right"></i></a></li>
    @else
        <li class="disabled"><a href="#" class="page-numbers"><i class="fa-solid fa-chevron-right"></i></a></li>
    @endif
</ul>
