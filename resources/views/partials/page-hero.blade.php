<section class="page-hero dark-band">
    <div class="home-hero__shade" aria-hidden="true"></div>
    <div class="page-hero__content">
        <p class="eyebrow">{{ $eyebrow }}</p>
        <h1>{{ $heading }}</h1>
        <div class="home-hero__bottom">
            <p>{{ $intro }}</p>
            <div class="home-hero__actions">@isset($action)<a href="{{ route($action['route']) }}">{{ $action['label'] }} <span aria-hidden="true">&rarr;</span></a>@endisset</div>
            <span class="home-hero__status">Nominations opening soon</span>
        </div>
    </div>
    @isset($index)<span class="home-hero__index" aria-hidden="true">EIAA / {{ $index }}</span>@endisset
</section>
