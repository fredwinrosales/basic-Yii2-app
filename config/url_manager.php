<?php

return [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        'dashboard' => 'site/index',
        //'<controller:>/all' => '<controller>/index',
        '<controller:>/view/<id:>' => '<controller>/view',
        //'<controller:>/update/<id:>' => '<controller>/update'
    ],
];