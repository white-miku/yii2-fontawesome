<?php
/**
 * AssetBundle.php
 * @author Revin Roman
 * @link https://rmrevin.ru
 */

namespace whitemiku\fontawesome;

/**
 * Class AssetBundle
 * @package rmrevin\yii\fontawesome
 */
class AssetBundle extends \yii\web\AssetBundle
{

    /**
     * @inherit
     */
    public $sourcePath = '@bower/fontawesome';

    /**
     * @inherit
     */
    public $css = [
        'css/font-awesome.min.css',
    ];
    
    /**
     * @inherit
     */
    public $publishOptions = [
            'only' => [
                "css/*",
                "fonts/*",
            ],
            'except' => [
                "less",
                "scss",
                "src",
            ],
    ];

 
}
