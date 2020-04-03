<?php

namespace reketaka\lazysizes;

use yii\web\AssetBundle;

Class LazysizesAsset extends AssetBundle{

    public $sourcePath = '@npm/lazysizes';

    public $js = [
        'lazysizes.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];


}