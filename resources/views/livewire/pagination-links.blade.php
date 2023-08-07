@if ($paginator->hasPages())
    <div class="flex items-end my-2">

        @if ( ! $paginator->onFirstPage())
            {{-- First Page Link --}}
            <a
            class="mx-1 px-4 py-2 bg-amber-900 dark:bg-red-500 border-2 border-amber-900 dark:border-red-500 text-white font-bold text-center hover:bg-amber-400 hover:border-amber-400 rounded-lg  cursor-pointer"
            wire:click="gotoPage(1)"
            >
            <<
            </a>
            @if($paginator->currentPage() > 2)
            {{-- Previous Page Link --}}
            <a
                class="mx-1 px-4 py-2 bg-amber-900 border-2 dark:bg-red-500 border-amber-900 dark:border-red-500 text-white font-bold text-center hover:bg-amber-400 hover:border-amber-400 rounded-lg  cursor-pointer"
                wire:click="previousPage"
            >
            <
            </a>
            @endif
        @endif

        <!-- Pagination Elements -->
        @foreach ($elements as $element)
            <!-- Array Of Links -->
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    <!--  Use three dots when current page is greater than 3.  -->
                    @if ($paginator->currentPage() > 3 && $page === 2)
                        <div class="text-amber-800 dark:text-yellow-300 mx-1">
                            <span class="font-bold">.</span>
                            <span class="font-bold">.</span>
                            <span class="font-bold">.</span>
                        </div>
                    @endif

                    <!--  Show active page two pages before and after it.  -->
                    @if ($page == $paginator->currentPage())
                        <span class="mx-1 px-4 py-2 border-2 border-amber-400 bg-amber-400 text-white font-bold text-center hover:bg-amber-800 hover:border-amber-800 rounded-lg  cursor-pointer">{{ $page }}</span>
                    @elseif ($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() + 2 || $page === $paginator->currentPage() - 1 || $page === $paginator->currentPage() - 2)
                        <a class="mx-1 px-4 py-2 border-2 border-amber-900 dark:border-red-300 text-amber-900 dark:text-yellow-200 font-bold text-center hover:text-amber-400 rounded-lg  cursor-pointer" wire:click="gotoPage({{$page}})">{{ $page }}</a>
                    @endif

                    <!--  Use three dots when current page is away from end.  -->
                    @if ($paginator->currentPage() < $paginator->lastPage() - 2  && $page === $paginator->lastPage() - 1)
                        <div class="text-amber-800 dark:text-yellow-300 mx-1">
                            <span class="font-bold">.</span>
                            <span class="font-bold">.</span>
                            <span class="font-bold">.</span>
                        </div>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            @if($paginator->lastPage() - $paginator->currentPage() >= 2)
                <a class="mx-1 px-4 py-2 bg-amber-900 dark:bg-red-500 border-2 border-amber-900 dark:border-red-500 text-white font-bold text-center hover:bg-amber-400 hover:border-amber-400 rounded-lg  cursor-pointer"
                wire:click="nextPage"
                rel="next">
                >
                </a>
            @endif
            <a
                class="mx-1 px-4 py-2 bg-amber-900 dark:bg-red-500 border-2 border-amber-900 dark:border-red-500 text-white font-bold text-center hover:bg-amber-400 hover:border-amber-400 rounded-lg  cursor-pointer"
                wire:click="gotoPage({{ $paginator->lastPage() }})"
            >
            >>
            </a>
        @endif
    </div>
@endif
