<li>
    @if(request()->routeIs($routeIs))
        <a class="inline-block py-2 px-3 text-white no-underline" href="{{ route($route) }}">{{ $slot }}</a>
    @else
        <a
            class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3"
            href="{{ route($route) }}"
        >
            {{ $slot }}
        </a>
    @endif
</li>
