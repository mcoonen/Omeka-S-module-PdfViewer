<?php
namespace PdfViewer;

return [
    'view_manager' => [
        'template_path_stack' => [
            dirname(__DIR__) . '/view',
        ],
    ],
    'file_renderers' => [
        'invokables' => [
            'pdfViewer' => Media\FileRenderer\Pdf::class,
        ],
        'aliases' => [
            'application/pdf' => 'pdfViewer',
            'pdf' => 'pdfViewer',
        ],
    ],
    'form_elements' => [
        'invokables' => [
            Form\SettingsFieldset::class => Form\SettingsFieldset::class,
        ],
    ],
    'translator' => [
        'translation_file_patterns' => [
            [
                'type' => 'gettext',
                'base_dir' => dirname(__DIR__) . '/language',
                'pattern' => '%s.mo',
                'text_domain' => null,
            ],
        ],
    ],
    'pdfviewer' => [
        'settings' => [
            'pdfviewer_mode' => 'object',
            'pdfviewer_style' => 'height: 600px; height: 70vh;',
        ],
        'site_settings' => [
            'pdfviewer_mode' => 'object',
            'pdfviewer_style' => 'height: 600px; height: 70vh;',
        ],
    ],
];
