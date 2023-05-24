@php
    $menu = [
        [
            'title' => 'CHARACTERS',
            'link' => 'characters',
        ],
        [
            'title' => 'COMICS',
            'link' => 'comics',
        ],
        [
            'title' => 'MOVIES',
            'link' => 'movies',
        ],
        [
            'title' => 'TV',
            'link' => 'tv',
        ],
        [
            'title' => 'GAMES',
            'link' => 'games',
        ],
        [
            'title' => 'COLLECTIBLES',
            'link' => 'collectibles',
        ],
        [
            'title' => 'VIDEOS',
            'link' => 'videos',
        ],
        [
            'title' => 'FANS',
            'link' => 'fans',
        ],
        [
            'title' => 'NEWS',
            'link' => 'news',
        ],
        [
            'title' => 'SHOP',
            'link' => 'shop',
        ],
    ];
@endphp

<nav>
    <div class="container">
        <div class="nav-list py-4 ">
            <ul class="list-unstyled d-flex justify-content-center align-items-center">
                @foreach ($menu as $item)
                    <li class="me-4">
                        <a href="{{ route($item['link']) }}">{{ $item['title'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
