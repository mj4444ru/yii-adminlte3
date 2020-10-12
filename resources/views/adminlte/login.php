<?php

declare(strict_types=1);

use mj4444\AdminLTE3\Assets\FontawesomeFreeAsset;
use mj4444\AdminLTE3\Assets\IcheckBootstrapAsset;
use Yiisoft\Html\Html;

/**
 * @var App\ApplicationParameters $applicationParameters
 * @var Yiisoft\Assets\AssetManager $assetManager
 * @var Yiisoft\View\WebView $this
 * @var ?string $appName
 * @var ?string $formUrl
 * @var ?string $username
 * @var ?bool $remember
 * @var ?string $forgotPasswordUrl
 * @var ?string $registerUrl
 * @var ?string $loginUsingFacebookUrl
 * @var ?string $loginUsingVKUrl
 * @var ?string $loginUsingGoogleUrl
 */

$assetManager->register([
    FontawesomeFreeAsset::class,
    IcheckBootstrapAsset::class,
]);

$appName = $appName ?? $applicationParameters->getName();
$this->setTitle('Login :: ' . $appName);
$this->setBlock('html-body-class', 'hold-transition login-page');
?>
<div class="login-box">
    <div class="login-logo"><?= Html::encode($appName) ?></div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="<?= $formUrl ?? '' ?>" method="post">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="username" value="<?= Html::encode($username ?? '') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember" name="remember" value="1"<?= ($remember ?? false) ? ' checked' : '' ?>>
                            <label for="remember">Remember Me</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </div>
            </form>

<?php if (($loginUsingFacebookUrl ?? false) || ($loginUsingVKUrl ?? false) || ($loginUsingGoogleUrl ?? false)): ?>
            <div class="social-auth-links text-center mb-3">
                <p>- OR -</p>
<?php if ($loginUsingFacebookUrl ?? false): ?>
                <a href="<?= $loginUsingFacebookUrl ?>" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                </a>
<?php endif ?>
<?php if ($loginUsingVKUrl ?? false): ?>
                <a href="<?= $loginUsingVKUrl ?>" class="btn btn-block btn-primary">
                    <i class="fab fa-vk mr-2"></i> Sign in using VK
                </a>
<?php endif ?>
<?php if ($loginUsingGoogleUrl ?? false): ?>
                <a href="<?= $loginUsingGoogleUrl ?>" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                </a>
<?php endif ?>
            </div>
<?php endif ?>

<?php if ($forgotPasswordUrl ?? false): ?>
            <div class="mt-2">
                <a href="<?= $forgotPasswordUrl ?>">I forgot my password</a>
            </div>
<?php endif ?>
<?php if ($registerUrl ?? false): ?>
            <div class="mt-2">
                <a href="<?= $registerUrl ?>" class="text-center">Register a new membership</a>
            </div>
<?php endif ?>
        </div>
    </div>
</div>
