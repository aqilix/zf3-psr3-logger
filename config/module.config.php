<?php
return [
    "service_manager" => [
        "abstract_factories" => [
            "Zend\Log\LoggerAbstractServiceFactory",
        ],
        "delegators" => [
            "psr3_logger" => [
                Aqilix\ZF3PSR3Logger\Service\PsrLoggerDelegator::class
            ]
        ]
    ],
    "log" => [
        "psr3_logger" => [
            "writers" => [
                [
                    "name" => "stream",
                    "priority" => 7, // DEBUG
                    "options" => [
                        'stream' => 'data/log/system.log',
                    ]
                ]
            ]
        ]
    ]
];
