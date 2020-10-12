<?php

declare(strict_types=1);

namespace mj4444\AdminLTE3\Assets;

use Yiisoft\Assets\AssetBundle;

/**
 * Asset bundle for the IcheckBootstrap files.
 *
 * @package Yii AdminLTE3
 */
class IcheckBootstrapAsset extends AssetBundle
{
    public ?string $basePath = '@assets';

    public ?string $baseUrl = '@assetsUrl';

    public ?string $sourcePath = '@npm/admin-lte/plugins/icheck-bootstrap';

    public array $css = [
        'icheck-bootstrap.min.css',
    ];

    public array $publishOptions = [
        'only' => [
            'icheck-bootstrap.min.css',
        ],
    ];
}
