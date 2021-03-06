<article class="content">
    @include('_partials.episode.cover.main')
    @include('_partials.episode.player')
    <section class="paragraphs-list">
        @yield('content')

        @include('_partials.episode.commented')
    </section>

    @include('_partials.episode.comments')

    @include('_partials.episode.recommendations.main', [
        'recommendations' => $page->recommendations,
    ])
</article>
