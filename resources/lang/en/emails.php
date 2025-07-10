<?php

use App\Helpers\ContentUpdateFrequencyHelper;

return [
    'content-updates' => [
        ContentUpdateFrequencyHelper::DAILY => [
            'subject' => 'New Content',
            'intro' => 'We are pleased to let you know the following materials are now available;',
        ],
        ContentUpdateFrequencyHelper::WEEKLY => [
            'subject' => 'Your Weekly Content Update',
            'intro' => 'Welcome to your weekly update. We are pleased to let you know the following materials have been added this week;',
        ],
        ContentUpdateFrequencyHelper::MONTHLY => [
            'subject' => 'Your Monthly Content Update',
            'intro' => 'Welcome to your monthly update. We are pleased to let you know the following materials have been added this month;',
        ],
        'greet' => 'Dear :name,',
        'outro' => 'Thank for your continued support.',
        'salutation' => 'Best regards',
        'from' => 'The Team',
        'footer' => [
            'steering-committee' => '',
            'subscription-notice' => '',
            'terms-and-conditions' => '',
            'email-monitoring-notice' => '',
            'company-code' => '',
        ],
    ],
];
