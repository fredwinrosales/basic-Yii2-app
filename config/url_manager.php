<?php

return [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        'dashboard' => 'site/index',
        'employee/create' => 'employee/create',
        'employee/edit/<id:>' => 'employee/edit'
    ],
];