<?php

return [
    'production' => false,
    'baseUrl' => '',
    'siteName' => 'Synapsis World',
    'siteDescription' => 'Center for Social Innovation & Sustainability',
    'collections' => [
        'projects' => [
            'path' => 'projects/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.project',
        ]
        ],
];
