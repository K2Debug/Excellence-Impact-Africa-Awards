<header class="site-header site-header--overlay">
    <div class="site-header__inner">
        <a href="{{ route('home') }}" aria-label="{{ $site['name'] }}, home" class="site-brand">
            <img width="32" height="32" class="site-brand__logo" src="{{ asset('images/eiaa-logo-white.png') }}" alt="" aria-hidden="true">
            <span class="site-brand__name">{{ $site['name'] }}</span>
        </a>
        <nav aria-label="Primary" class="site-nav">
            @foreach ($site['navigation'] as $item)
                <a href="{{ route($item['route']) }}" @if (request()->routeIs($item['route'])) aria-current="page" @endif>{{ $item['label'] }}</a>
            @endforeach
            <span class="site-nav__note">Nominations opening soon</span>
        </nav>
        <button type="button" data-menu-button aria-expanded="false" aria-controls="mobile-menu" aria-label="Open menu" class="menu-button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="1.6" stroke-linecap="square"/></svg>
        </button>
    </div>
    <nav id="mobile-menu" data-mobile-menu hidden aria-label="Mobile" class="mobile-menu">
        @foreach ($site['navigation'] as $item)<a href="{{ route($item['route']) }}" @if (request()->routeIs($item['route'])) aria-current="page" @endif>{{ $item['label'] }}</a>@endforeach
        <p>Nominations are opening soon. Please read the guidelines to prepare.</p>
    </nav>
</header>
