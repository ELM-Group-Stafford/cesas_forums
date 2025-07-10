<?php

use App\Helpers\ContentUpdateTypeHelper;

return [
    'never' => 'Never',
    'daily' => 'Each day content is uploaded',
    'weekly' => 'Each week',
    'monthly' => 'Each month',

    'type-name' => [
        ContentUpdateTypeHelper::PUBLICATION => 'Publication',
        ContentUpdateTypeHelper::CONGRESS => 'Congress update',
        ContentUpdateTypeHelper::PODCAST_EPISODE => 'Podcast episode',
        ContentUpdateTypeHelper::COURSE => 'Educational video',
        ContentUpdateTypeHelper::RESOURCE => 'Resource',
        ContentUpdateTypeHelper::WEBINAR => 'Webinar',
        ContentUpdateTypeHelper::LITERATURE_REVIEW => 'Literature highlights',
    ],
];
