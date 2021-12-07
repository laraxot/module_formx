<?php

declare(strict_types=1);

if (! isset($route_params)) {
    $route_params = [];
}

$ris = [
    0 => [
        (object) [
            'id' => '1',
            'nome' => 'FormX',
            'visibility' => '1',
            'active' => 0,
            'url' => '#',
        ],
    ],
    1 => [
        (object) [
            'id' => '11',
            'nome' => 'Input',
            'visibility' => '1',
            'active' => 0,
            'routename' => '',
            'url' => route('admin.containers.index', array_merge($route_params, ['container0' => 'input', 'lang' => 'it'])),
        ],
    ],
];

return $ris;
