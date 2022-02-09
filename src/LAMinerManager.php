<?php

namespace Hex0gen\LAMinerManager;

use Encore\Admin\Extension;

class LAMinerManager extends Extension
{
    public $name = 'la-minermanager';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title'     => 'Miners Manager',
        'path'      => 'miners-manager',
        'icon'      => 'fa-plug',
        'children'  =>  [
          [
            'title' => 'Miners',
            'path' => '/miners-manager/miners',
            'icon'=> 'fa-plug'
          ]
        ],
    ];

    public $permission = [
      'name'  => 'Miners Manager',
      'slug'  => 'ext.la-minermanager',
      'path'  => ['miners-manager*'],
    ];
}
