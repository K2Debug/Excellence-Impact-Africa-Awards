<footer class="site-footer">
    <div class="site-footer__main">
        <div class="site-footer__identity">
            <a href="{{ route('home') }}" class="site-footer__brand">{{ $site['name'] }}</a>
            <p>{{ $site['footer_description'] }}</p>
            <a href="mailto:{{ $site['email'] }}">{{ $site['email'] }}</a>
        </div>
        <nav aria-label="Footer navigation" class="site-footer__links"><h2>Explore</h2><ul>@foreach ($site['navigation'] as $item)<li><a href="{{ route($item['route']) }}">{{ $item['label'] }}</a></li>@endforeach</ul></nav>
        <div class="site-footer__links"><h2>Connect</h2><ul>@foreach ($site['socials'] as $social)<li><a href="{{ $social['url'] }}">{{ $social['label'] }}<span class="sr-only"> (placeholder link)</span></a></li>@endforeach</ul><p>{{ $site['location'] }}</p></div>
    </div>
    <div class="site-footer__bottom"><p>Copyright {{ date('Y') }} {{ $site['name'] }}. All rights reserved.</p><p>Content on this site is introductory and subject to confirmation.</p></div>
</footer>
