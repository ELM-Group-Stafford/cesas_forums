<?php

use App\Helpers\ContentUpdateFrequencyHelper;

use App\Helpers\SteeringCommitteeHelper;

$steeringCommittee = new SteeringCommitteeHelper();
$steeringCommittee = $steeringCommittee->all();

//'steering-committee' => 'Lupus Forum Steering Committee: Ed Vital (Chair) - Prof Christopher Edwards - Prof Cynthia Aranow - Prof Eric Morand - Prof Laurent Arnaud - Prof Maria Dall\'Era - Prof Richard Furie - Prof Vibeke Strand - Prof Victoria Werth',

return [
    'content-updates' => [
        ContentUpdateFrequencyHelper::DAILY => [
            'subject' => 'New Lupus Forum Content',
            'intro' => 'We are pleased to let you know the following materials are now available;',
        ],
        ContentUpdateFrequencyHelper::WEEKLY => [
            'subject' => 'Your Weekly Lupus Forum Content Update',
            'intro' => 'Welcome to your weekly update. We are pleased to let you know the following materials have been added this week;',
        ],
        ContentUpdateFrequencyHelper::MONTHLY => [
            'subject' => 'Your Monthly Lupus Forum Content Update',
            'intro' => 'Welcome to your monthly update. We are pleased to let you know the following materials have been added this month;',
        ],
        'greet' => 'Dear :name,',
        'intro' => 'Thank you for your interest in the Lupus Forum website and it\'s free useful resources. We are an educational website developed under the auspices of the University of Leeds and is dedicated to the dissemination of the latest developments in the field of lupus. Providing continuing medical education to clinicians around the globe to facilitate greater understanding of lupus, its treatments, and clinical practice.',
        'complete_registration_1' => 'Please complete your registration by logging in to Lupus Forum (:site_url) using the credentials below.',
        'username' => 'Username: :username',
        'password' => 'Password: :password',
        'complete_registration_2' => 'To change your password, you can log in to Lupus Forum and select the \'Account\' link at the top of the page which will display your account details.  From here, you can change your password.  Alternatively, you can click the update your preferences link below.',
        'outro' => 'Thank for your continued support.',
        'salutation' => 'Kind regards',
        'from' => 'Lupus Forum Team',
        'footer' => [
            'steering-committee' => 'Lupus Forum Steering Committee: '.$steeringCommittee,
            'subscription-notice' => 'You have received this email because you are subscribed at www.lupus-forum.com.<br>Want to change how you receive these emails? You can update your preferences <a href=":account_url">here</a>.<br>For questions regarding the platform, events and content, please contact us <a href=":contact_url">here</a>.',
            'terms-and-conditions' => '',
            'email-monitoring-notice' => '',
            'company-code' => '',
        ],
    ],
];
