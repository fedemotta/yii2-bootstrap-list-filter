<?php
/**
 * @copyright Federico Nicolás Motta
 * @author Federico Nicolás Motta <fedemotta@gmail.com>
 * @license http://opensource.org/licenses/mit-license.php The MIT License (MIT)
 * @package yii2-bootstrap-list-filter
 */
namespace fedemotta\bootstraplistfilter;
use yii\web\AssetBundle;

/**
 * Asset for the Bootstrap List Filter plugin
 * @author Federico Nicolás Motta <fedemotta@gmail.com>
 */
class BootstrapListFilterAsset extends AssetBundle 
{
    public $sourcePath = '@bower/bootstrap-list-filter'; 

    public $js = [
        'bootstrap-list-filter.src.js',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
}