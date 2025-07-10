<?php

return [
    'search' => [
        'button' => 'Search',
        'reset_button' => 'Clear Search',
        'term_label' => 'Search term',
        'results' => 'Showing :count result for “:term”|Showing :count results for “:term”',
        'results_category_append' => 'in :publicationCategory',
        'results_year_append' => 'published :yearSortFilterOption',
        'global_results' => trans('globalsearch.publications').': :count match|'.trans('globalsearch.publications').': :count matches',
    ],

    'empty' => [
        'title' => 'No results',
        'no-results' => 'There are no results to display for your search.',
        'text' => 'Please try again by clearing filters, or using different search terms.',
    ],

    'categories' => [
        'all' => 'All',
    ],

    'date_sort_filter_options' => [
        'title' => [
            'year_all_date_of_upload' => 'Date of upload',
            'year_all_date_of_publication' => 'Date of publication',
            'pre_2000' => 'Published pre 2000’s',
            '2000_2009' => 'Published 2000-2009',
            '2010_2019' => 'Published 2010-2019',
            'post_2020' => 'Published 2020 & later',
        ],

        'result_count_append' => [
            'pre_2000' => 'pre 2000’s',
            '2000_2009' => '2000-2009',
            '2010_2019' => '2010-2019',
            'post_2020' => '2020 & later',
        ],
    ],

    'clear_filters' => 'Clear filters',

    'access_via_pubmed' => 'Access via PubMed',
    'send_email' => 'Share',
    'more' => 'More',
    'slides_view' => 'View Slides',
    'slides_download' => 'Download Slides',

    'read_more' => 'more…',

    'keywords' => 'Keywords: ',
    'upload_date' => 'Upload date: :date.',
];
