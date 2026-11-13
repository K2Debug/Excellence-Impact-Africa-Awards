@extends('layouts.app')
@section('content')
@include('partials.page-hero', ['eyebrow' => 'Award cluster', 'heading' => $clusterName, 'intro' => 'Explore the awards in this cluster and the achievements they recognise.', 'action' => ['route' => 'categories', 'label' => 'All clusters'], 'index' => '02'])
<section class="award-catalog"><div class="award-catalog__inner">
    <p class="cluster-detail__count">{{ $awards->count() }} awards in this cluster</p>
    <div class="award-grid">@foreach ($awards as $award)<a id="{{ $award['slug'] }}" class="award-card" href="{{ route('categories.award', ['cluster' => \Illuminate\Support\Str::slug($clusterName), 'award' => $award['slug']]) }}"><span class="award-card__number">{{ str_pad((string) $award['number'], 3, '0', STR_PAD_LEFT) }}</span><div class="award-card__body"><h2>{{ $award['name'] }}</h2>@if ($award['people_choice'])<span class="award-card__choice">People’s Choice</span>@endif</div></a>@endforeach</div>
    <p class="cluster-detail__back"><a class="text-link" href="{{ route('categories') }}">← Back to all clusters</a></p>
</div></section>
@endsection
