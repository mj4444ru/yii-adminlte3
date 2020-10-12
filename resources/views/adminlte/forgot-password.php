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
 * @var ?string $username
 * @var ?string $loginUrl
 * @var ?string $registerUrl
 */

$assetManager->register([
    FontawesomeFreeAsset::class,
]);

$appName = $appName ?? $applicationParameters->getName();
$this->setTitle('Forgot Password :: ' . $appName);
$this->setBlock('html-body-class', 'hold-transition login-page');
?>
<div class="login-box">
    <div class="login-logo"><?= Html::encode($appName) ?></div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
            <form action="<?= $formUrl ?? '' ?>" method="post">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="username" value="<?= Html::encode($username ?? '') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Request new password</button>
                    </div>
                </div>
            </form>

<?php if (($loginUrl ?? false) || ($registerUrl ?? false)): ?>
            <div class="mt-3">
<?php if ($loginUrl ?? false): ?>
                <div class="mt-2">
                    <a href="<?= $loginUrl ?>">Login</a>
                </div>
<?php endif ?>
<?php if ($registerUrl ?? false): ?>
                <div class="mt-2">
                    <a href="<?= $registerUrl ?>" class="text-center">Register a new membership</a>
                </div>
<?php endif ?>
            </div>
<?php endif ?>
        </div>
    </div>
</div>
