@extends('layouts.app')
@section('content')
@include('partials.page-hero', ['eyebrow' => 'Categories', 'heading' => 'Areas of recognition', 'intro' => 'Explore the award clusters and find the recognition that best reflects the work.', 'action' => ['route' => 'guidelines', 'label' => 'Read the guidelines'], 'index' => '02'])
<section class="cluster-catalog"><div class="cluster-catalog__inner">
@foreach (collect($content['categories'])->groupBy('cluster') as $cluster => $awards)
<article class="cluster-card">
    <a class="cluster-card__image" href="{{ route('categories.cluster', \Illuminate\Support\Str::slug($cluster)) }}" aria-label="Explore {{ $cluster }}"><img src="{{ asset('images/hero-award.jpg') }}" alt="" loading="lazy"><span>{{ str_pad((string) $awards->count(), 2, '0', STR_PAD_LEFT) }} awards</span></a>
    <div class="cluster-card__body"><p class="eyebrow">Cluster {{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</p><h2>{{ $cluster }}</h2><p class="cluster-card__description">Explore {{ $awards->count() }} awards recognising achievement across {{ $cluster }}.</p><a class="text-link" href="{{ route('categories.cluster', \Illuminate\Support\Str::slug($cluster)) }}">Explore cluster <span aria-hidden="true">→</span></a></div>
</article>
@endforeach
</div></section>
@endsection
