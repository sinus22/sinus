<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\sinus;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap javascript files.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 */
class BootstrapPluginAsset extends AssetBundle
{
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        parent::init();
    }
    public $js = [
        'js/bootstrap.bundle.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\sinus\BootstrapAsset',
    ];
}
