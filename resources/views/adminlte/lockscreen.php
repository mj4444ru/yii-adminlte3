<?php

declare(strict_types=1);

use mj4444\AdminLTE3\Assets\FontawesomeFreeAsset;
use Yiisoft\Html\Html;

/**
 * @var App\ApplicationParameters $applicationParameters
 * @var Yiisoft\Assets\AssetManager $assetManager
 * @var Yiisoft\View\WebView $this
 * @var ?string $appName
 * @var ?string $formUrl
 * @var ?string $showName
 * @var ?string $imgUrl
 * @var ?string $username
 * @var ?string $loginUrl
 * @var ?string $registerUrl
 */

//$loginUrl = 'x';
$showName = 'John Doe';

$assetManager->register([
    FontawesomeFreeAsset::class,
]);

$appName = $appName ?? $applicationParameters->getName();
$this->setTitle('LockScreen :: ' . $appName);
$this->setBlock('html-body-class', 'hold-transition lockscreen');
?>
<div class="lockscreen-wrapper">
    <div class="lockscreen-logo"><?= Html::encode($appName) ?></div>
    <div class="lockscreen-name"><?= Html::encode($showName) ?></div>
    <div class="lockscreen-item">
<?php if ($imgUrl ?? false): ?>
        <div class="lockscreen-image">
            <img src="<?= $imgUrl ?>" alt="User Image">
        </div>
<?php endif ?>

        <form class="lockscreen-credentials<?= ($imgUrl ?? false) ? '' : ' ml-0' ?>" action="<?= $formUrl ?? '' ?>" method="post">
            <div class="input-group">
                <input type="password" class="form-control" placeholder="password" name="password">
                <div class="input-group-append">
                    <button type="button" class="btn"><i class="fas fa-arrow-right text-muted"></i></button>
                </div>
            </div>
        </form>
    </div>
    <div class="help-block text-center">
        Enter your password to retrieve your session
    </div>

<?php if ($loginUrl ?? false): ?>
    <div class="text-center">
        <a href="<?= $loginUrl ?>">Or sign in as a different user</a>
    </div>
<?php endif ?>
</div>
