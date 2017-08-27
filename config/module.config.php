<?php
namespace DocumentViewer;

return [
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
    'file_renderers' => [
        'factories' => [
            'pdfViewer' => Service\Media\FileRenderer\PdfFactory::class,
        ],
        'aliases' => [
            'application/pdf' => 'pdfViewer',
            'pdf' => 'pdfViewer',
        ],
    ],
    'form_elements' => [
        'invokables' => [
            'DocumentViewer\Form\Config' => Form\Config::class,
        ],
    ],
    'translator' => [
        'translation_file_patterns' => [
            [
                'type' => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern' => '%s.mo',
                'text_domain' => null,
            ],
        ],
    ],
];
