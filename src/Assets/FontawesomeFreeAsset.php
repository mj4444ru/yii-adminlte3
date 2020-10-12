<?php

declare(strict_types=1);

namespace mj4444\AdminLTE3\Assets;

use Yiisoft\Assets\AssetBundle;

/**
 * Asset bundle for the Fontawesome Free files.
 *
 * @package Yii AdminLTE3
 */
class FontawesomeFreeAsset extends AssetBundle
{
    public ?string $basePath = '@assets';

    public ?string $baseUrl = '@assetsUrl';

    public ?string $sourcePath = '@npm/admin-lte/plugins/fontawesome-free';

    public array $css = [
        'css/all.min.css',
    ];
}
