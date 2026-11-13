@extends('layouts.app')
@section('content')
@include('partials.page-hero', ['eyebrow' => $clusterName, 'heading' => $award['name'], 'intro' => 'Award information, shared judging criteria and candidate updates.', 'action' => ['route' => 'categories.cluster', 'label' => 'Back to ' . $clusterName], 'index' => '02'])
<section class="award-detail"><div class="award-detail__inner">
    <div class="award-detail__overview">
        <article class="award-detail__about"><p class="eyebrow">About this award</p><p>This award is part of {{ $clusterName }}. Its full description and eligibility requirements will be published once confirmed by the awards programme.</p><a class="text-link" href="{{ route('guidelines') }}">Review nomination guidelines</a></article>
        <article class="award-detail__candidates"><p class="eyebrow">Candidates and nominees</p><h2>Candidate announcements</h2><p>Candidate names and profiles will appear here after nominations close and the shortlist is confirmed.</p><span class="award-detail__status">Nominations opening soon</span></article>
    </div>
    <section class="award-detail__criteria"><p class="eyebrow">Shared judging criteria</p><h2>What reviewers consider</h2><p class="award-detail__lead">Entries across the programme are assessed against the same criteria, with attention to evidence, context and lasting value.</p><div class="award-detail__criteria-grid">@foreach ($content['criteria']['items'] as $criterion)<article><h3>{{ $criterion['name'] }}</h3><p>{{ $criterion['description'] }}</p></article>@endforeach</div></section>
    <a class="text-link" href="{{ route('categories.cluster', \Illuminate\Support\Str::slug($clusterName)) }}">← All awards in {{ $clusterName }}</a>
</div></section>
@endsection
