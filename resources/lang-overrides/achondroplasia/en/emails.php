<?php

use App\Helpers\ContentUpdateFrequencyHelper;

return [
    'content-updates' => [
        ContentUpdateFrequencyHelper::DAILY => [
            'subject' => 'New Achondroplasia.expert Content',
            'intro' => 'We are pleased to let you know the following materials are now available on Achondroplasia.expert;',
        ],
        ContentUpdateFrequencyHelper::WEEKLY => [
            'subject' => 'Your Weekly Achondroplasia.expert Content Update',
            'intro' => 'Welcome to your Achondroplasia.expert weekly update. We are pleased to let you know the following materials have been added to Achondroplasia.expert this week;',
        ],
        ContentUpdateFrequencyHelper::MONTHLY => [
            'subject' => 'Your Monthly Achondroplasia.expert Content Update',
            'intro' => 'Welcome to your Achondroplasia.expert monthly update. We are pleased to let you know the following materials have been added to Achondroplasia.expert this month;',
        ],
        'greet' => 'Dear :name,',
        'outro' => 'Thank for your continued support.',
        'salutation' => 'Best regards',
        'from' => 'Achondroplasia.expert Team',
        'footer' => [
            'steering-committee' => 'Achondroplasia.expert is an educational service supported by BioMarin and overseen by an Editorial Committee. Anna Allegri - Geneviève Baujat - Tawfeg Ben-Omran - Svein Fredwall - Encarna Guillen-Navarro - Heike Hoyer-Kuhn.',
            'subscription-notice' => 'Please do not reply to this automated email message. You have received this email because you have subscribed at www.achondroplasia.expert. Achondroplasia.expert is for healthcare professionals only.<br>Want to change how you receive these emails? You can update your preferences <a href=":account_url">here</a>.<br>For questions regarding the platform, events and content, please contact us <a href=":contact_url">here</a>.',
            'terms-and-conditions' => 'Adverse Events should be reported to <a href="mailto:drugsafety@bmrn.com">drugsafety@bmrn.com</a><br>For questions regarding BioMarin disease areas or products, please email <a href="mailto:medinfoeu@bmrn.com">medinfoeu@bmrn.com</a>
                <br><br>
                You can always <a href=":account_url">unsubscribe</a> from our mailing list. Visit <a href="https://www.medinfoprivacy.com/">BioMarin’s Privacy Policy and Notice of Information Practices</a> for more information on your privacy rights.
            ',
            'company-code' => 'Copyright © BioMarin 2021. All rights reserved. EU-ACH-00068 07/21',
        ],
    ],
];