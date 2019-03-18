<nav class="side-menu">
    <div class="side-menu__overlay" onclick="typeof toggleMenu == 'function' && toggleMenu()"></div>
    {{--@todo remove inline style--}}
    <button onclick="typeof toggleMenu == 'function' && toggleMenu()" style="position: absolute; top: 0; left: 0; font-size: 15px;">
        X
    </button>
    <ul>
        @foreach($page->menu->items as $item => $link)
        <li class="side-menu__item">
            <a class="side-menu__item__link" href="{{ $page->baseUrl . $link }}">{{ $item }}</a>
        </li>
        @endforeach
    </ul>
</nav>
