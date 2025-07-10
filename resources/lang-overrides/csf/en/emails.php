<?php

use App\Helpers\ContentUpdateFrequencyHelper;
use App\Helpers\SteeringCommitteeHelper;

$steeringCommittee = new SteeringCommitteeHelper();
$steeringCommittee = $steeringCommittee->all();

//'steering-committee' => 'CSF Steering Committee: Prof Iain McInnes (chair) - Prof Rieke Alten - Prof Johannes Bijlsma - Prof Leonard Calabrese - Prof Maurizio Cutolo - Prof Cem Gabay - Prof Pierre Miossec - Prof Peter Nash - Prof John O\'Shea - Prof Janet Pope - Prof Christopher Ritchlin - Dr Enrique Soriano - Prof Leonie Taams - Prof Lai-Shan Tam - Prof Tsutomu Takeuchi - Prof Kevin Winthrop - Dr Grace Wright',

return [
    'content-updates' => [
        ContentUpdateFrequencyHelper::DAILY => [
            'subject' => 'New CSF Content',
            'intro' => 'We are pleased to let you know the following materials are now available;',
        ],
        ContentUpdateFrequencyHelper::WEEKLY => [
            'subject' => 'Your Weekly CSF Content Update',
            'intro' => 'Welcome to your weekly update. We are pleased to let you know the following materials have been added this week;',
        ],
        ContentUpdateFrequencyHelper::MONTHLY => [
            'subject' => 'Your Monthly CSF Content Update',
            'intro' => 'Welcome to your monthly update. We are pleased to let you know the following materials have been added this month;',
        ],
        'greet' => 'Dear :name,',
        'intro' => 'Thank you for your interest in the CSF website and it\'s free useful resources. We are an educational website developed under the auspices of the University of Glasgow, dedicated to the dissemination of the latest developments in cytokine signalling. Providing continuing medical education to clinicians around the globe to facilitate greater understanding of the science of cytokines and cytokine signalling, and its implications for clinical practice.',
        'complete_registration_1' => 'Please complete your registration by logging in to CSF (:site_url) using the credentials below.',
        'username' => 'Username: :username',
        'password' => 'Password: :password',
        'complete_registration_2' => 'To change your password, you can log in to CSF and select the \'Account\' link at the top of the page which will display your account details.  From here, you can change your password.  Alternatively, you can click the update your preferences link below.',
        'outro' => 'Thank for your continued support.',
        'salutation' => 'Kind regards',
        'from' => 'CSF Team',
        'footer' => [
            'steering-committee' => 'CSF Steering Committee: '.$steeringCommittee,
            'subscription-notice' => 'You have received this email because you are subscribed at www.cytokinesignalling.com.<br>Want to change how you receive these emails? You can update your preferences <a href=":account_url">here</a>.<br>For questions regarding the platform, events and content, please contact us <a href=":contact_url">here</a>.',
            'terms-and-conditions' => '',
            'email-monitoring-notice' => '',
            'company-code' => '',
        ],
    ],
];
