<?php

namespace TCPDFModule;

return array(
    'service_manager' => array(
        'shared' => array(
            'TCPDF' => false
        ),
        'factories' => array(
            'TCPDF'          => __NAMESPACE__ . '\Factory\TCPDFFactory',
        )
    ),
);