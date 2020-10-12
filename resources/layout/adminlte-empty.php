<?php

declare(strict_types=1);

use mj4444\AdminLTE3\Assets\AdminLTE3Asset;
use Yiisoft\Html\Html;

/**
 * @var App\ApplicationParameters $applicationParameters
 * @var Yiisoft\Assets\AssetManager $assetManager
 * @var Yiisoft\View\WebView $this
 * @var string $content
 */

$assetManager->register([
    AdminLTE3Asset::class,
]);
$this->setCssFiles($assetManager->getCssFiles());
$this->setJsFiles($assetManager->getJsFiles());
$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Html::encode($applicationParameters->getLanguage()) ?>">
<head>
  <meta charset="<?= $applicationParameters->getCharset() ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= Html::encode($this->getTitle()) ?></title>
<?php $this->head() ?>

</head>
<?php $this->beginBody() ?>

<body class="<?= $this->getBlock('html-body-class') ?>">
<?= $content ?>
</body>
<?php $this->endBody() ?>

</html>
<?php $this->endPage();
