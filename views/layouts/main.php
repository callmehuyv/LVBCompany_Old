<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <link href="<?php echo HomeUrl() ?>/assets/b7cdfbad/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo HomeUrl() ?>/css/site.css" rel="stylesheet">
    <link href="<?php echo HomeUrl() ?>/css/style.css" rel="stylesheet">

    </script><script src="/assets/aecf2ffb/jquery.js"></script>
    <script src="<?php echo HomeUrl() ?>/assets/31c6e187/yii.js"></script>
    <script src="<?php echo HomeUrl() ?>/assets/31c6e187/yii.validation.js"></script>
    <script src="<?php echo HomeUrl() ?>/assets/31c6e187/yii.captcha.js"></script>
    <script src="<?php echo HomeUrl() ?>/assets/31c6e187/yii.activeForm.js"></script>
    <script src="<?php echo HomeUrl() ?>/assets/b7cdfbad/js/bootstrap.js"></script>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'LVB Company',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);

            if (Yii::$app->user->isGuest) {
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-right'],
                    'items' => [
                        ['label' => 'Homepage', 'url' => ['/site/index']],
                        ['label' => 'About', 'url' => ['/site/about']],
                        ['label' => 'Contact', 'url' => ['/site/contact']],
                        ['label' => 'Login', 'url' => ['/user/login']]
                    ],
                ]);
            } else {
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-right'],
                    'items' => [
                        ['label' => 'Homepage', 'url' => ['/site/index']],
                        ['label' => 'About', 'url' => ['/site/about']],
                        ['label' => 'Contact', 'url' => ['/site/contact']],
                        ['label' => 'Admin Manager', 'url' => ['/admin']],
                        ['label' => 'Logout (' . Yii::$app->user->identity->user_name . ')', 'url' => ['/user/logout'], 'linkOptions' => ['data-method' => 'post']],
                    ],
                ]); 
            }

            NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; LVB Company <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>