<?php

use App\Helpers\ContentUpdateFrequencyHelper;

return [
    'content-updates' => [
        ContentUpdateFrequencyHelper::DAILY => [
            'subject' => 'New HaemDifferently.expert Content',
            'intro' => 'We are pleased to let you know the following materials are now available on HaemDifferently.expert;',
        ],
        ContentUpdateFrequencyHelper::WEEKLY => [
            'subject' => 'Your Weekly HaemDifferently.expert Content Update',
            'intro' => 'Welcome to your HaemDifferently.expert weekly update. We are pleased to let you know the following materials have been added to HaemDifferently.expert this week;',
        ],
        ContentUpdateFrequencyHelper::MONTHLY => [
            'subject' => 'Your Monthly HaemDifferently.expert Content Update',
            'intro' => 'Welcome to your HaemDifferently.expert monthly update. We are pleased to let you know the following materials have been added to HaemDifferently.expert this month;',
        ],
        'greet' => 'Dear :name,',
        'outro' => 'Thank for your continued support.',
        'salutation' => 'Best regards',
        'from' => 'HaemDifferently.expert Team',
        'footer' => [
            'steering-committee' => 'HaemDifferently.expert is an educational service supported by BioMarin and overseen by an expert Steering Committee. Dr Hazza Al-Zahrani – Associate Professor Cem Ar – Professor Jan Astermark – Professor Charles Hay – Professor Cedric Hermans – Professor Victor Jiménez-Yuste – Dr Kate Khair – Professor Claude Negrier – Professor Johannes Oldenburg.',
            'subscription-notice' => 'You are receiving this email as you have subscribed to HaemDifferently.expert. You can update your email notification settings at any time by visiting your profile by clicking <a href=":url">here</a>.',
            'terms-and-conditions' => 'For more information, please see our <a href="https://medinfoprivacy.com/" target="_blank">Privacy Policy</a> and <a href="https://medinfoterms.com/" target="_blank">Terms and Conditions</a>.',
            'email-monitoring-notice' => 'Please note that replies to this email address are not monitored.',
            'company-code' => 'MMRC/GTH/0541 09/20',
        ],
    ],
];
