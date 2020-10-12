<?php

declare(strict_types=1);

namespace mj4444\AdminLTE3\Assets;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Yii\JQuery\JqueryAsset;

/**
 * Asset bundle for the AdminLTE 3 files.
 *
 * @package Yii AdminLTE3
 */
class AdminLTE3Asset extends AssetBundle
{
    public ?string $basePath = '@assets';

    public ?string $baseUrl = '@assetsUrl';

    public ?string $sourcePath = '@npm/admin-lte/dist';

    public array $css = [
        'css/adminlte.min.css',
    ];

    public array $js = [
        'js/adminlte.min.js'
    ];

    public array $publishOptions = [
        'only' => [
            'css/adminlte.css',
            'css/adminlte.css.map',
            'css/adminlte.min.css',
            'css/adminlte.min.css.map',
            'js/adminlte.js',
            'js/adminlte.js.map',
            'js/adminlte.min.js',
            'js/adminlte.min.js.map',
        ],
    ];

    public array $depends = [
        JqueryAsset::class,
    ];
}
