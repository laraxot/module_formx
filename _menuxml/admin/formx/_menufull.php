<?php

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
            'url' => route('admin.container0.index', array_merge($route_params, ['container0' => 'input', 'lang' => 'it'])),
        ],
    ],
];

return $ris;
