<?php

use App\Helpers\ContentUpdateFrequencyHelper;
use App\Helpers\SteeringCommitteeHelper;

$steeringCommittee = new SteeringCommitteeHelper();
$steeringCommittee = $steeringCommittee->all();

//'steering-committee' => 'Cardiometabolic Forum Steering Committee: Professor John McMurray - Professor Naveed Sattar - Professor Rajiv Agarwal - Professor George Bakris - Emeritus Professor Richard Donnelly - Professor Hiddo Heerspink - Professor Meg Jardine - Professor Darren McGuire - Professor Carolyn Su Ping Lam - Dr Subodh Verma - Professor Tina Vilsbøll - Professor David Wheeler',

return [
    'content-updates' => [
        ContentUpdateFrequencyHelper::DAILY => [
            'subject' => 'New Cardiometabolic Forum Content',
            'intro' => 'We are pleased to let you know the following materials are now available;',
        ],
        ContentUpdateFrequencyHelper::WEEKLY => [
            'subject' => 'Your Weekly Cardiometabolic Forum Content Update',
            'intro' => 'Welcome to your weekly update. We are pleased to let you know the following materials have been added this week;',
        ],
        ContentUpdateFrequencyHelper::MONTHLY => [
            'subject' => 'Your Monthly Cardiometabolic Forum Content Update',
            'intro' => 'Welcome to your monthly update. We are pleased to let you know the following materials have been added this month;',
        ],
        'greet' => 'Dear :name,',
        'intro' => 'Thank you for your interest in the CMF website and it\'s free useful resources. We are an educational website developed under the auspices of the University of Glasgow and dedicated to the dissemination of the latest developments in the field of cardiometabolic diseases. Providing continuing medical education to clinicians around the globe to facilitate greater understanding of cardiometabolic diseases, their treatments and clinical practice.',
        'complete_registration_1' => 'Please complete your registration by logging in to CMF (:site_url) using the credentials below.',
        'username' => 'Username: :username',
        'password' => 'Password: :password',
        'complete_registration_2' => 'To change your password, you can log in to CMF and select the \'Account\' link at the top of the page which will display your account details.  From here, you can change your password.  Alternatively, you can click the update your preferences link below.',
        'outro' => 'Thank for your continued support.',
        'salutation' => 'Kind regards',
        'from' => 'Cardiometabolic Forum Team',
        'footer' => [
            'steering-committee' => 'Cardiometabolic Forum Steering Committee: '.$steeringCommittee,
            'subscription-notice' => 'You have received this email because you are subscribed at www.cardiometabolicforum.com.<br>Want to change how you receive these emails? You can update your preferences <a href=":account_url">here</a>.<br>For questions regarding the platform, events and content, please contact us <a href=":contact_url">here</a>.',
            'terms-and-conditions' => '',
            'email-monitoring-notice' => '',
            'company-code' => '',
        ],
    ],
];
