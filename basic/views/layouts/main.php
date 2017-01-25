<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->beginBody() ?>

<div class="wrapper">
  <header class="main-header">

    <a href="<?php echo \yii\helpers\Url::to(['/site/index']); ?>" class="logo">
      <span class="logo-mini"><b>S</b>IIN</span>
       <span class="logo-lg"><b></b>SIIN (logo)</span>
    </a>

    <nav class="navbar navbar-static-top">
        
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="messages-menu">
            <a href="<?php echo \yii\helpers\Url::to(['/site/index']); ?>" class="">
              <i class="fa fa-home"></i>
              &nbsp;<span class="">Home</span>
            </a>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="messages-menu">
            <a href="<?php echo \yii\helpers\Url::to(['/site/about']); ?>" class="">
              <i class="fa fa-black-tie"></i>
              &nbsp;<span class="">About Us</span>
            </a>
          </li>
         
          <li class="messages-menu">
            <a href="<?php echo \yii\helpers\Url::to(['/site/contact']); ?>" class="">
              <i class="fa fa-address-book-o"></i>
              &nbsp;<span class="">Contact</span>
            </a>
          </li>
          <?php if (Yii::$app->user->isGuest): ?>
          <li class="messages-menu">
           <a href="<?php echo \yii\helpers\Url::to(['/admin/index']); ?>" class="">
              <i class="fa fa-user-circle"></i>
              &nbsp;<span class="">Login</span>
            </a>
          </li>
          <?php else: ?>
           <li class="messages-menu">
           <a href="<?php echo \yii\helpers\Url::to(['/site/logout']); ?>" class="">
              <i class="fa fa-user-circle"></i>
              &nbsp;<span class="">Logout (<?php echo Yii::$app->user->identity->username; ?>)</span>
            </a>
          </li>
          <?php endif; ?>
        </ul>
      </div>

    </nav>
  </header>
    <div class="" style="background-color: #ecf0f1; min-height: 550px;">
    <?= $content ?>
    </div>
</div>

<footer class="footer navbar-fixed-bottom">
    <div class="container">
        <p class="pull-left">&copy; Ristekdikti <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
