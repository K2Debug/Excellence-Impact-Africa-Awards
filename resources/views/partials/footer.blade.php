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
            <nav aria-label="Quick links" class="site-footer__links site-footer__links--quick"><h2>Quick links</h2><ul>@foreach ($site['navigation'] as $item)<li><a href="{{ route($item['route']) }}">{{ $item['label'] }}</a></li>@endforeach</ul></nav>
            <nav aria-label="Social media" class="site-footer__links site-footer__links--social"><h2>Social</h2><ul class="site-footer__social-list">@foreach ($site['socials'] as $social)<li><a href="{{ $social['url'] }}" aria-label="{{ $social['label'] }} (placeholder link)"><svg aria-hidden="true" viewBox="0 0 24 24" focusable="false">@if ($social['label'] === 'LinkedIn')<path d="M5.2 8.6a1.9 1.9 0 1 0 0-3.8 1.9 1.9 0 0 0 0 3.8ZM3.6 10h3.2v10H3.6V10Zm5.2 0h3v1.4h.1c.4-.8 1.5-1.7 3.2-1.7 3.4 0 4 2.2 4 5V20h-3.2v-4.7c0-1.1 0-2.6-1.6-2.6s-1.9 1.2-1.9 2.5V20H8.8V10Z"/>@elseif ($social['label'] === 'X')<path d="M18.9 3H22l-6.8 7.8L23.2 21h-6.3L12 14.8 6.6 21H3.4l7.3-8.4L3 3h6.5l4.5 5.9L18.9 3Zm-1.1 16h1.7L8.5 4.9H6.7L17.8 19Z"/>@elseif ($social['label'] === 'Instagram')<path d="M7.2 2.8h9.6a4.4 4.4 0 0 1 4.4 4.4v9.6a4.4 4.4 0 0 1-4.4 4.4H7.2a4.4 4.4 0 0 1-4.4-4.4V7.2a4.4 4.4 0 0 1 4.4-4.4Zm0 2A2.4 2.4 0 0 0 4.8 7.2v9.6a2.4 2.4 0 0 0 2.4 2.4h9.6a2.4 2.4 0 0 0 2.4-2.4V7.2a2.4 2.4 0 0 0-2.4-2.4H7.2ZM12 7.4a4.6 4.6 0 1 1 0 9.2 4.6 4.6 0 0 1 0-9.2Zm0 2a2.6 2.6 0 1 0 0 5.2 2.6 2.6 0 0 0 0-5.2Zm5-3.3a1.1 1.1 0 1 1 0 2.2 1.1 1.1 0 0 1 0-2.2Z"/>@elseif ($social['label'] === 'YouTube')<path d="M23 7.1a3 3 0 0 0-2.1-2.1C19.1 4.5 12 4.5 12 4.5s-7.1 0-8.9.5A3 3 0 0 0 1 7.1 31 31 0 0 0 .5 12a31 31 0 0 0 .5 4.9A3 3 0 0 0 3.1 19c1.8.5 8.9.5 8.9.5s7.1 0 8.9-.5a3 3 0 0 0 2.1-2.1 31 31 0 0 0 .5-4.9 31 31 0 0 0-.5-4.9ZM9.7 15.6V8.4l6.2 3.6-6.2 3.6Z"/>@endif</svg><span class="sr-only">{{ $social['label'] }}</span></a></li>@endforeach</ul></nav>
            <nav aria-label="Information" class="site-footer__links"><h2>Information</h2><ul><li><a href="{{ route('guidelines') }}">Guidelines</a></li><li><a href="{{ route('judging') }}">Judging approach</a></li><li><a href="{{ route('contact') }}">Contact us</a></li></ul></nav>
        </div>
        <div class="site-footer__bottom"><p>Copyright {{ date('Y') }} {{ $site['name'] }}. All rights reserved.</p><p>Content on this site is introductory and subject to confirmation.</p></div>
    </div>
</footer>
