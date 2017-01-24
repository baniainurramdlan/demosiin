<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;

AdminAsset::register($this);
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

    <a href="index2.html" class="logo">
      <span class="logo-mini"><b>S</b>IIN</span>
       <span class="logo-lg"><b></b>SIIN (logo)</span>
    </a>

    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
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
           <a href="<?php echo \yii\helpers\Url::to(['/admin-sdm/index']); ?>" class="">
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

    <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="img/Koala.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin SIIN</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          
          <li>
          <a href="<?php echo \yii\helpers\Url::to(['/admin']); ?>">
            <i class="fa fa-home"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo \yii\helpers\Url::to(['/admin-sdm']); ?>">
            <i class="fa fa-user"></i> <span>SDM</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo \yii\helpers\Url::to(['/admin-lembaga']); ?>">
            <i class="fa fa-university"></i> <span>Lembaga</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo \yii\helpers\Url::to(['/output']); ?>">
            <i class="fa fa-file-text"></i> <span>Output</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo \yii\helpers\Url::to(['/admin-paten']); ?>">
            <i class="fa fa-calendar-plus-o"></i> <span>Aktivitas</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>
         <li>
           <a href="<?php echo \yii\helpers\Url::to(['/output']); ?>">
            <i class="fa fa-users"></i> <span>User Management</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
    <div class="content-wrapper">
    <?= $content ?>
    </div>
</div>

<!-- <footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer> -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
