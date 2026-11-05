<section aria-labelledby="selection-method-heading" class="rounded-3xl bg-amber-tint p-8 sm:p-10">
    <p class="text-xs font-semibold uppercase tracking-[0.24em] text-steel">{{ $content['selection']['status'] }}</p>
    <h2 id="selection-method-heading" class="mt-3 font-serif text-2xl text-imperial sm:text-3xl">{{ $content['selection']['title'] }}</h2>
    <div class="mt-5 space-y-4 text-base leading-relaxed text-slate-700">
        @foreach ($content['selection']['body'] as $paragraph)<p>{{ $paragraph }}</p>@endforeach
    </div>
</section>