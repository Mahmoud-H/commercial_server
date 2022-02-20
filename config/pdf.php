<?php
return [
    'tempDir'              => public_path('temp'),
    'mode'                 => 'utf-8',
    'format'               => 'A4',
    'default_font_size'    => '12',
    'default_font'         => 'sans-serif',
    'margin_left'          => 10,
    'margin_right'         => 10,
    'margin_top'           => 30,
    'margin_bottom'        => 10,
    'margin_header'        => -3    ,
    'use_kwt'              => true,
    'margin_footer'        => 0,
    'title'                => 'Report',
    'author'               => '',
    'show_watermark'       => false,
    'watermark_font'       => 'sans-serif',
    'display_mode'         => 'fullpage',
    'watermark_text_alpha' => 0.1,
    'shrink_tables_to_fit' => 1,
    'creator'              => 'MohZSK',
    'setAutoTopMargin' => 'stretch',
    'font_path' => public_path('/fonts/'), // don't forget the trailing slash!
    'font_data' => [
        'sky' => [
            'R'  => 'sky.ttf',
            'B'  => 'sky.ttf',
            'I'  => 'sky.ttf',
            'BI' => 'sky.ttf',
            'useOTL' => 0xFF,
            'useKashida' => 75,
        ],
    ]
];
//return [
//    'mode'                  => 'utf-8',
//    'format'                => 'A4',
//    'author'                => '',
//    'subject'               => '',
//    'keywords'              => '',
//    'creator'               => 'Laravel Pdf',
//    'display_mode'          => 'fullpage',
//    'tempDir'               => base_path('../temp/'),
//    'pdf_a'                 => false,
//    'pdf_a_auto'            => false,
//    'icc_profile_path'      => ''
//];

