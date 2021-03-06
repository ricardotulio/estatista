<?php

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

$config = [
    'production' => false,
//    'baseUrl' => 'http://localhost:3000',
    'baseUrl' => 'http://192.168.178.65:3000',
    'googleAnalyticsId' => 'GA-TEST-ID',
    'googleTagManagerId' => 'GTM-TEST-ID',
    'meta' => [
        'creatorName' => 'PODEntender',
        'title' => 'PODEntender',
        'subtitle' => 'Podcast que tem como principal objetivo apresentar e a realidade da ciência e aproximar do público brasileiro.',
        'description' => 'O PODEntender é um podcast de divulgação científica que tem como principal objetivo apresentar e aproximar a realidade da ciência brasileira para o público brasileiro. Neste podcast, nós alternamos os episódios entre três formatos de programa: 1) o PODEntender [Entrevistas], no qual trazemos cientistas brasileiros para conversar sobre seus trabalhos, o 2) PODEntender [DROPS], no qual conversamos sobre os mais diversos temas relacionado à ciência e o 3) PODEntender [NEWS], no qual comentamos notícias relacionadas ao mundo da ciência brasileira. Destacamos que esse podcast foi vencedor dos prêmios "Jaleco de Ouro" edição 2016, "Best Procastinator of the Year" edição 2017 e concorre na categoria "Mas, só estuda?" na prestigiosa premiação Lattes de Ouro deste ano.',
        'category' => 'Science &amp; Medicine',
        'image' => 'http://podentender.com/wp-content/uploads/powerpress/favcom.png',
        'email' => 'amdnsk@gmail.com',
        'twitter' => [
            'card' => 'summary_large_image',
            'account' => '@podentender',
        ],
        'schemas' => [
            'author' => [
                '@type' => 'Organization',
                'name' => 'PODEntender',
                'logo' => 'http://podentender.com/wp-content/uploads/powerpress/favcom.png',
                'contactPoint' => [
                    'email' => 'contato@podentender.com',
                    'contactType' => 'Customer Service',
                ],
                'sameAs' => [
                    'https://www.facebook.com/podentender',
                    'https://www.instagram.com/podentender',
                    'https://www.twitter.com/podentender',
                    'https://www.linkedin.com/company/podentender',
                ],
            ],
        ],
    ],
    'menu' => [
        'items' => [
            'Sobre' => '/sobre',
            'Todos' => '/categoria/todos',
            'Entrevistas' => '/categoria/entrevista',
            'News' => '/categoria/news',
            'Drops' => '/categoria/drops',
        ],
        'social' => [
            'Facebook' => 'https://www.facebook.com/podentender',
            'Instagram' => 'https://www.instagram.com/podentender',
            'Twitter' => 'https://www.twitter.com/podentender',
        ],
    ],
    'collections' => [
        'episodes' => [
            'path' => function (\TightenCo\Jigsaw\PageVariable $page) {
                $builder = new \PODEntender\Domain\Model\Post\EpisodeSlugBuilder();
                return $builder->build(
                    $page->episode['number'],
                    $page->episode['title'],
                    $page->episode['slug'] ?? null
                );
            },
            'sort' => ['-date'],
        ],
    ],

    'assets' => [
        'logo' => '/assets/images/logo.png',
        'icons' => [
            'menu' => '/assets/images/icons/menu.svg',
        ],
    ],
];

return array_merge(
    $config,
    require __DIR__ . '/config/functions.php',
    [
        'feed' => require __DIR__ . '/config/feed.php',
    ]
);
