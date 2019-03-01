<?php

use PODEntender\EventHandler\Episode\GenerateRecommendedEpisodeListAfterCollect;
use PODEntender\EventHandler\Episode\DecorateConfigWithEpisodesInformationAfterCollect;
use PODEntender\EventHandler\Episode\PostProcessFilesAfterBuild;
use Nawarian\JigsawSitemapPlugin\Listener\SitemapListener;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

/**
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 */

$events->afterCollections([
    $container->make(DecorateConfigWithEpisodesInformationAfterCollect::class),
    $container->make(GenerateRecommendedEpisodeListAfterCollect::class),
]);

$events->afterBuild([SitemapListener::class, PostProcessFilesAfterBuild::class]);
