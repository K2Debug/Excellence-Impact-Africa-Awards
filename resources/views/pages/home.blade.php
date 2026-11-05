@extends('layouts.app')
@section('content')
<section class="home-hero dark-band">
    <div class="home-hero__image" aria-hidden="true"><img src="{{ asset('images/hero-award.jpg') }}" alt="" loading="eager"><div class="home-hero__shade"></div></div>
    <div class="home-hero__content">
            <p class="eyebrow">Enny Centre of Excellence Presents</p>
            <h1>Excellence Impact Africa Awards</h1>
        <div class="home-hero__bottom"><p>{{ $site['name'] }} recognises people and institutions whose work in AI serves society with skill, integrity and care.</p><div class="home-hero__actions"><a href="{{ route('categories') }}">Explore the categories <span aria-hidden="true">↗</span></a><a href="{{ route('guidelines') }}">Read the guidelines <span aria-hidden="true">↗</span></a></div><span class="home-hero__status">Nominations opening soon</span></div>
    </div>
    <span class="home-hero__index" aria-hidden="true">EIAA / 01</span>
</section>
<section class="editorial-section introduction">
    <div class="editorial-heading"><p class="eyebrow">About the awards</p><h2>Recognising work across the field</h2></div>
    <div class="editorial-copy"><p>{{ $site['name'] }} exists to recognise outstanding achievement in artificial intelligence across Africa. It honours research, enterprise, education and public service with the same seriousness and grace.</p><a class="text-link" href="{{ route('about') }}">Who we are <span aria-hidden="true">↗</span></a></div>
    <div class="introduction__image"><img src="{{ asset('images/hero-award.jpg') }}" alt="A moment of recognition at an awards ceremony" loading="lazy"></div>
    <div class="introduction__statement"><span class="eyebrow">Our principle</span><p>“We celebrate diligence, integrity and lasting benefit to people and institutions.”</p><small>Programme statement, {{ $site['name'] }}</small></div>
</section>
<section class="category-section">
    <div class="section-topline"><div><p class="eyebrow">Areas of recognition</p><h2>16 clusters, 200 awards</h2><p class="section-lead">Recognition spans leadership, business, technology, education, health, culture, community impact and more.</p></div><a class="text-link" href="{{ route('categories') }}">Explore other award categories <span aria-hidden="true">↗</span></a></div>
    <div class="category-grid">@foreach (collect($content['categories'])->groupBy('cluster')->take(8) as $cluster => $awards)<a href="{{ route('categories') }}#{{ \Illuminate\Support\Str::slug($cluster) }}" class="category-tile"><span class="category-tile__number">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }} - {{ $awards->count() }} awards</span><h3>{{ $cluster }}</h3><p>Explore all {{ $awards->count() }} awards in this recognition cluster.</p><span class="category-tile__link">Explore cluster <span aria-hidden="true">&rarr;</span></span></a>@endforeach</div>
</section>
<section class="process-section">
    <div class="section-topline"><div><p class="eyebrow">Key dates</p><h2>Our awards timeline</h2><p class="section-lead">From nominations opening to celebrating the honorees.</p></div></div>
    <ol class="process-timeline">
        <li class="process-timeline__item"><time class="process-timeline__date" datetime="2026-03-01"><span class="process-timeline__month">March</span><strong>01</strong><span class="process-timeline__year">2026</span></time><span class="process-timeline__marker" aria-hidden="true"></span><div class="process-timeline__card"><span class="process-timeline__number">01</span><h3>Nominations Open</h3><p>The portal opens for all 15 categories.</p></div></li>
        <li class="process-timeline__item"><time class="process-timeline__date" datetime="2026-07-15"><span class="process-timeline__month">July</span><strong>15</strong><span class="process-timeline__year">2026</span></time><span class="process-timeline__marker" aria-hidden="true"></span><div class="process-timeline__card"><span class="process-timeline__number">02</span><h3>Nominations Close</h3><p>Final deadline for nominations.</p></div></li>
        <li class="process-timeline__item"><time class="process-timeline__date" datetime="2026-08-01"><span class="process-timeline__month">August</span><strong>01</strong><span class="process-timeline__year">2026</span></time><span class="process-timeline__marker" aria-hidden="true"></span><div class="process-timeline__card"><span class="process-timeline__number">03</span><h3>Finalists Announced</h3><p>Top nominees in each category are made public.</p></div></li>
        <li class="process-timeline__item"><time class="process-timeline__date" datetime="2026-08-30"><span class="process-timeline__month">August</span><strong>30</strong><span class="process-timeline__year">2026</span></time><span class="process-timeline__marker" aria-hidden="true"></span><div class="process-timeline__card"><span class="process-timeline__number">04</span><h3>Awards Gala</h3><p>The grand ceremony.</p></div></li>
    </ol>
</section>
<section class="recognition-section dark-band" aria-label="Testimonials from award winners">
    <div class="recognition-section__image" aria-hidden="true"></div>
    <div class="recognition-section__content">
        <p class="eyebrow">Testimonials</p>
        <div class="recognition-section__slides" data-testimonials>
            <article class="recognition-testimonial is-active" aria-hidden="false">
                <h2>Her work now reaches five countries and communities.</h2>
                <p>The 2024 Humanitarian Award helped Grace Mbeki grow her work across borders, bringing its support to people in five countries.</p>
                <footer class="recognition-testimonial__byline"><img class="recognition-testimonial__avatar" src="{{ asset('images/testimonials/grace-mbeki.png') }}" alt="" width="48" height="48"><span><strong>Grace Mbeki</strong><small>2024 Humanitarian Award Winner</small></span></footer>
            </article>
            <article class="recognition-testimonial" aria-hidden="true">
                <h2>Age is no barrier to leading meaningful change.</h2>
                <p>For 2024 Youth Leadership winner James Odhiambo, the award affirmed that young people can inspire others and shape what comes next.</p>
                <footer class="recognition-testimonial__byline"><img class="recognition-testimonial__avatar" src="{{ asset('images/testimonials/james-odhiambo.png') }}" alt="" width="48" height="48"><span><strong>James Odhiambo</strong><small>2024 Youth Leadership Winner</small></span></footer>
            </article>
            <article class="recognition-testimonial" aria-hidden="true">
                <h2>Recognition opened doors to partnerships across West Africa.</h2>
                <p>After receiving the 2024 Innovation Award, Dr. Amara Okafor found new partners across the region and saw her work reach further.</p>
                <footer class="recognition-testimonial__byline"><img class="recognition-testimonial__avatar" src="{{ asset('images/testimonials/amara-okafor.png') }}" alt="" width="48" height="48"><span><strong>Dr. Amara Okafor</strong><small>2024 Innovation Award Winner</small></span></footer>
            </article>
        </div>
    </div>
</section>
<section class="editorial-section judging-section">
    <div class="editorial-heading"><p class="eyebrow">Judging</p><h2>Fair, independent and transparent</h2></div><div class="editorial-copy"><p>{{ $site['name'] }} is guided by fairness, independence and careful attention to evidence. Judges consider lasting benefit over novelty, and context over reputation.</p><a class="text-link" href="{{ route('judging') }}">Meet the judging approach <span aria-hidden="true">↗</span></a></div>
    <div class="judging-detail">@include('partials.selection-method')</div>
</section>
<section class="closing-section dark-band"><div class="closing-section__image" aria-hidden="true"></div><p class="eyebrow">Excellence Impact Africa Awards</p><h2>Let’s recognise work that moves Africa forward.</h2><p>For partnerships, press or nominee questions, the organising team welcomes your message.</p><a href="{{ route('contact') }}">Contact the team <span aria-hidden="true">↗</span></a></section>
@endsection
