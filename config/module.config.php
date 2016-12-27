<?php

namespace TCPDFModule;

return [
    'service_manager' => [
        'factories' => [
            \TCPDF::class => Factory\TCPDFFactory::class,
        ],
        'shared' => [
            \TCPDF::class => false
        ]
    ],
];
