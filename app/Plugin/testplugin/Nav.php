<?php

namespace Plugin\testplugin;

use Eccube\Common\EccubeNav;

class Nav implements EccubeNav
{
    /**
     * @return array
     */
    public static function getNav()
    {
        return [
        	'product' => [
        		'children' => [
        			'hoge' => [
        				'name' => '商品管理の子(追加)',
        				'utl' => 'admin_homepage'
        			]
        		]
        	]
        ];
    }
}
