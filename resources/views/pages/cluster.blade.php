@extends('layouts.app')
@section('content')
@include('partials.page-hero', ['eyebrow' => 'Award cluster', 'heading' => $clusterName, 'intro' => 'Explore the awards in this cluster and the achievements they recognise.', 'action' => ['route' => 'categories', 'label' => 'All clusters'], 'index' => '02'])
<section class="award-catalog"><div class="award-catalog__inner">
    <div class="cluster-detail__intro"><p class="eyebrow">{{ $awards->count() }} awards</p><h2>{{ $clusterName }}</h2><p>Browse the individual awards in this cluster. More detailed descriptions will be added with the final category context.</p></div>
    <div class="award-grid">@foreach ($awards as $award)<article id="{{ $award['slug'] }}" class="award-card"><span class="award-card__number">{{ str_pad((string) $award['number'], 3, '0', STR_PAD_LEFT) }}</span><div class="award-card__body"><h3>{{ $award['name'] }}</h3>@if ($award['people_choice'])<span class="award-card__choice">People’s Choice</span>@endif</div></article>@endforeach</div>
    <p class="cluster-detail__back"><a class="text-link" href="{{ route('categories') }}">← Back to all clusters</a></p>
</div></section>
@endsection
