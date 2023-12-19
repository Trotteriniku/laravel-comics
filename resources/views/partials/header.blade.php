@php
    $navitems = config('comicsdb.navitems');
@endphp

<header>
    <div class=" d-flex justify-content-lg-evenly py-4  ">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc logo">

        <ul class="nav align-content-center justify-content-end ms-5">
            @foreach ($navitems as $items)
                <li class="nav-item">
                    <a class="nav-link text-secondary text-uppercase fs-5 " href.prevent="#">{{ $items['name'] }}</a>
                </li>
            @endforeach

        </ul>
    </div>

</header>
