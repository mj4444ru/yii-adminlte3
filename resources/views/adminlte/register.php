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
 * @var ?array $formAddtionalFields
 * @var ?string $termsUrl
 * @var ?string $forgotPasswordUrl
 * @var ?string $loginUrl
 * @var ?string $registerUsingFacebookUrl
 * @var ?string $registerUsingVKUrl
 * @var ?string $registerUsingGoogleUrl
 */

$assetManager->register([
    FontawesomeFreeAsset::class,
    IcheckBootstrapAsset::class,
]);

$formAddtionalFields = $fields ?? [
    ['placeholder' => 'Full name', 'icon' => 'fas fa-user', 'name' => 'fullname', 'value' => $fullname ?? '']
];

if ($termsUrl ?? false) {
    $this->registerJs('document.getElementById("agreeTerms").addEventListener("change", function()  {document.getElementById("submitButton").disabled = !this.checked;});');
}

$appName = $appName ?? $applicationParameters->getName();
$this->setTitle('Register :: ' . $appName);
$this->setBlock('html-body-class', 'hold-transition register-page');
?>
<div class="register-box">
    <div class="register-logo"><?= Html::encode($appName) ?></div>
    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>
            <form action="<?= $formUrl ?? '' ?>" method="post">
                <?php foreach ($formAddtionalFields as $field): ?>
<?php
if (is_string($field)):
    echo $field;
elseif (is_callable($field)):
    echo call_user_func($field, $this);
else:
?>
                <div class="input-group mb-3">
                    <input type="<?= $field['type'] ?? 'text' ?>" class="form-control" placeholder="<?= $field['placeholder'] ?? '' ?>" name="<?= Html::encode($field['name']) ?> value="<?= Html::encode($field['value'] ?? '') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="<?= $field['icon'] ?? 'fa fa-circle' ?>"></span>
                        </div>
                    </div>
                </div>
<?php endif ?>
                <?php endforeach; ?>
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
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Retype password" name="password2">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
<?php if ($termsUrl ?? false): ?>
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                I agree to the <a href="<?= $termsUrl ?>">terms</a>
                            </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" id="submitButton" class="btn btn-primary btn-block" disabled>Register</button>
                    </div>
<?php else: ?>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
<?php endif ?>
                </div>
            </form>

<?php if (($registerUsingFacebookUrl ?? false) || ($registerUsingVKUrl ?? false) || ($registerUsingGoogleUrl ?? false)): ?>
            <div class="social-auth-links text-center">
                <p>- OR -</p>
<?php if ($registerUsingFacebookUrl ?? false): ?>
                <a href="<?= $registerUsingFacebookUrl ?>" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i>
                    Sign up using Facebook
                </a>
<?php endif ?>
<?php if ($registerUsingVKUrl ?? false): ?>
                <a href="<?= $registerUsingVKUrl ?>" class="btn btn-block btn-primary">
                    <i class="fab fa-vk mr-2"></i>
                    Sign up using VK
                </a>
<?php endif ?>
<?php if ($registerUsingGoogleUrl ?? false): ?>
                <a href="<?= $registerUsingGoogleUrl ?>" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i>
                    Sign up using Google+
                </a>
<?php endif ?>
            </div>
<?php endif ?>

<?php if ($loginUrl ?? false): ?>
            <div class="mt-3">
                <a href="<?= $loginUrl ?>" class="text-center">I already have a membership</a>
            </div>
<?php endif ?>
        </div>
    </div>
</div>
