<?php

return [
    'search' => [
        'global_results' => trans('globalsearch.courses').': :count match|'.trans('globalsearch.courses').': :count matches',
    ],

    'modules' => 'Modules',

    'module_table' => [        
        'title' => 'Title',
        'presenters' => 'Presenters',
        'video' => 'Video',
        'questions' => 'Questions',
        'completed' => 'Completed',
        'evaluation' => 'Evaluation',
        'course_evaluation' => 'Course Evaluation',
        'module_completed' => 'Module Completed',
    ],

    'achievements' => [
        'button' => 'My Achievements',
        'rosette_alt' => 'Rosette',
        'none' => [
            'title' => 'No achievements yet',
            'text' => 'Please explore our Educational Videos, and as you begin to test yourself your achievements will appear here.',
        ],
    ],
    'test_yourself' => 'Test Yourself',
    'test_yourself_will_become_available' => 'Test yourself will become available once you have watched the video in full.',
    'slides_download' => 'Download Slides',
    'video' => [
        'watch_fullscreen' => 'Watch Fullscreen',
        'cancel' => 'Cancel',
    ],
    'test' => [
        'passed' => [
            'title' => 'Results',
            'message' => 'The pass score was :pass_score and you scored :score.',
            'followup' => 'Congratulations, you have passed this assessment.',
        ],
        'failed' => [
            'title' => 'Results',
            'message' => 'The pass score was :pass_score and you scored :score.',
            'followup' => 'Unfortunately, you have not passed this assessment.',
        ],
        'feedback' => [
            'title' => 'Feedback',
            'retry' => 'Retry',
            'done' => 'Done',
        ],
    ],
    'view' => 'View',
];
