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
 * @var ?string $loginUrl
 */

$assetManager->register([
    FontawesomeFreeAsset::class,
]);

$appName = $appName ?? $applicationParameters->getName();
$this->setTitle('Recover Password :: ' . $appName);
$this->setBlock('html-body-class', 'hold-transition login-page');
?>
<div class="login-box">
    <div class="login-logo"><?= Html::encode($appName) ?></div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>
            <form action="<?= $formUrl ?? '' ?>" method="post">
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Confirm Password" name="password2">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Change password</button>
                    </div>
                </div>
            </form>

<?php if ($loginUrl ?? false): ?>
            <div class="mt-3">
                <a href="<?= $loginUrl ?>">Login</a>
            </div>
<?php endif ?>
        </div>
    </div>
</div>
