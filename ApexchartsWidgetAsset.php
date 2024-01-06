<?php
/**
 * @copyright Copyright (c) 2023
 * @author Travis Saron <admin@xten.au>
 * @package yii2-apexcharts
 */

namespace xtenstack\apexcharts;

class ApexchartsWidgetAsset extends \yii\web\AssetBundle
{
    public function init()
    {
        $this->sourcePath = __DIR__ . '/dist';
        parent::init();
    }

    public $publishOptions = [
        'forceCopy' => YII_ENV_DEV //dev
    ];

    public $js = [
        'apexcharts.min.js',
    ];
    
    public $css = [
        'apexcharts.css',
    ];

    public $depends = [
    ];
}
