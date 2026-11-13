@extends('layouts.app')
@section('content')
@include('partials.page-hero', ['eyebrow' => 'About', 'heading' => 'Recognising work in African AI', 'intro' => 'Excellence Impact African Awards recognises people and organisations working in artificial intelligence across Africa.', 'action' => ['route' => 'contact', 'label' => 'Get in touch'], 'index' => '01'])
<div class="about-page">
    <div class="about-page__inner">
        <section class="about-story">
            <div class="about-story__copy">
                @include('partials.section-heading', ['eyebrow' => 'Our story', 'heading' => $content['about']['story_title']])
                <div class="about-story__text">@foreach ($content['about']['story'] as $p)<p>{{ $p }}</p>@endforeach</div>
            </div>
            <figure class="about-image about-image--story"><img src="{{ asset('images/hero-award.jpg') }}" alt="A moment of recognition at an awards ceremony" loading="lazy"></figure>
        </section>

        <section class="about-pillars" aria-label="Our mission and vision">
            <article class="about-pillar about-pillar--mission dark-band"><p class="eyebrow">Our purpose</p><h2>{{ $content['about']['mission']['title'] }}</h2><p>{{ $content['about']['mission']['text'] }}</p></article>
            <article class="about-pillar about-pillar--vision"><p class="eyebrow">Our ambition</p><h2>{{ $content['about']['vision']['title'] }}</h2><p>{{ $content['about']['vision']['text'] }}</p></article>
        </section>

        <section class="about-values">
            @include('partials.section-heading', ['eyebrow' => 'Our values', 'heading' => 'What guides the programme', 'intro' => 'Four commitments shape the awards, from the assessment of entries to the conduct of the ceremony.'])
            <div class="about-values__grid">@foreach ($content['about']['values'] as $value)<article><span class="tile-num">0{{ $loop->iteration }}</span><h3>{{ $value['name'] }}</h3><p>{{ $value['description'] }}</p></article>@endforeach</div>
        </section>

        <section class="about-context dark-band">
            <figure class="about-image about-image--context"><img src="{{ asset('images/hero-award.jpg') }}" alt="Guests gathered to celebrate achievement" loading="lazy"></figure>
            <div class="about-context__copy"><p class="eyebrow">The context</p><h2>{{ $content['about']['why_africa']['title'] }}</h2><div>@foreach ($content['about']['why_africa']['body'] as $p)<p>{{ $p }}</p>@endforeach</div></div>
        </section>

        <section class="about-team">
            <div class="about-team__heading">@include('partials.section-heading', ['eyebrow' => 'The people behind the programme', 'heading' => $content['about']['team']['title'], 'intro' => $content['about']['team']['intro']])</div>
            <div class="about-team__grid">@foreach ($content['about']['team']['members'] as $member)<article><div class="about-team__image"><img src="{{ asset('images/hero-award.jpg') }}" alt="Awards programme image placeholder" loading="lazy"></div><div class="about-team__person"><h3>{{ $member['name'] }}</h3><p>{{ $member['role'] }}</p></div></article>@endforeach</div>
            <p class="about-team__note">Team names, roles and images are placeholders and will be confirmed.</p>
        </section>
    </div>
</div>
@endsection
