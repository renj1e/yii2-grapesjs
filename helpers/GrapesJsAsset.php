<?php

namespace common\assets;

use yii\web\AssetBundle;

/**
 * Base YFP asset bundle.
 * Reference: @common/assets
 */
class GrapesJsAsset extends AssetBundle
{
	public $sourcePath = '@vendor/author-name/vendor-name/dist/';
    public $css = [
        'css/grapes.min.css',
    ];
    public $js = [
        'grapes.min.js',
    ];
}
