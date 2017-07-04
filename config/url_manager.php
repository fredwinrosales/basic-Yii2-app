<?php

return [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        'dashboard' => 'site/index',
        '<controller:>' => '<controller>/create',
        '<controller:>/edit/<id:>' => '<controller>/edit'
    ],
];