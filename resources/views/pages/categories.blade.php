@extends('layouts.app')
@section('content')
@include('partials.page-hero', ['eyebrow' => 'Categories', 'heading' => '200 award categories', 'intro' => 'Explore 200 awards across 16 clusters, from Grand Honours to sector, community and people’s choice awards.', 'action' => ['route' => 'guidelines', 'label' => 'Read the guidelines'], 'index' => '02'])
<section class="award-catalog"><div class="award-catalog__inner">
@foreach (collect($content['categories'])->groupBy('cluster') as $cluster => $awards)
<section id="{{ \Illuminate\Support\Str::slug($cluster) }}" class="award-cluster" aria-label="{{ $cluster }}"><div class="award-cluster__heading"><h2>{{ $cluster }}</h2><span>{{ str_pad((string) $awards->first()['number'], 3, '0', STR_PAD_LEFT) }}–{{ str_pad((string) $awards->last()['number'], 3, '0', STR_PAD_LEFT) }}</span></div><div class="award-grid">
@foreach ($awards as $award)<article id="{{ $award['slug'] }}" class="award-card"><span class="award-card__number">{{ str_pad((string) $award['number'], 3, '0', STR_PAD_LEFT) }}</span><div class="award-card__body"><h3>{{ $award['name'] }}</h3>@if ($award['people_choice'])<span class="award-card__choice">People’s Choice</span>@endif</div></article>@endforeach
</div></section>
@endforeach
<div class="award-catalog__cta dark-band"><h2>Nominations are opening soon</h2><p>Review the eligibility and judging guidelines while nomination dates are being confirmed.</p><a href="{{ route('guidelines') }}">Read the Guidelines <span aria-hidden="true">↗</span></a></div></div></section>
@endsection
