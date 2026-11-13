<footer class="site-footer">
    <div class="site-footer__inner">
        <section class="site-footer__callout" aria-label="Explore the awards">
            <div class="site-footer__callout-copy">
                <h2>Celebrating work shaping Africa’s future.</h2>
                <p>Discover the people, teams and organisations making a lasting difference.</p>
                <a href="{{ route('categories') }}">Explore categories <span aria-hidden="true">→</span></a>
            </div>
            <div class="site-footer__callout-art" aria-hidden="true"><img src="{{ asset('images/eiaa-logo-white.png') }}" alt=""></div>
        </section>

        <div class="site-footer__main">
            <div class="site-footer__identity">
                <a href="{{ route('home') }}" class="site-footer__brand"><img src="{{ asset('images/eiaa-logo-white.png') }}" alt="" width="34" height="34"><span>{{ $site['name'] }}</span></a>
                <p>{{ $site['footer_description'] }}</p>
                <address>{{ $site['location'] }}</address>
                <a class="site-footer__email" href="mailto:{{ $site['email'] }}">{{ $site['email'] }}</a>
            </div>
            <nav aria-label="Quick links" class="site-footer__links"><h2>Quick links</h2><ul>@foreach ($site['navigation'] as $item)<li><a href="{{ route($item['route']) }}">{{ $item['label'] }}</a></li>@endforeach</ul></nav>
            <div class="site-footer__links"><h2>Social</h2><ul>@foreach ($site['socials'] as $social)<li><a href="{{ $social['url'] }}">{{ $social['label'] }}<span class="sr-only"> (placeholder link)</span></a></li>@endforeach</ul></div>
            <nav aria-label="Information" class="site-footer__links"><h2>Information</h2><ul><li><a href="{{ route('guidelines') }}">Guidelines</a></li><li><a href="{{ route('judging') }}">Judging approach</a></li><li><a href="{{ route('contact') }}">Contact us</a></li></ul></nav>
        </div>
        <div class="site-footer__bottom"><p>Copyright {{ date('Y') }} {{ $site['name'] }}. All rights reserved.</p><p>Content on this site is introductory and subject to confirmation.</p></div>
    </div>
</footer>
