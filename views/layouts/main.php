<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body style="<?= Yii::$app->controller->route == 'site/index' ? '' : 'padding-top: 60px' ?>">
<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => Yii::$app->name,
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav'],
                'items' => [
                    ['label' => 'Documentation', 'url' => ['/docs']],
                    ['label' => 'About', 'url' => ['/site/about']],
                    ['label' => 'Community', 'url' => ['/site/community']],
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'My profile', 'url' => ['/user/profile'], 'visible' => !Yii::$app->user->isGuest],
                    ['label' => 'Settings', 'url' => ['/user/settings/profile'], 'visible' => !Yii::$app->user->isGuest],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Sign in', 'url' => ['/user/security/login']] :
                        ['label' => 'Sign out (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/user/security/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                    ['label' => 'Register', 'url' => ['/user/registration/register'], 'visible' => Yii::$app->user->isGuest]
                ],
            ]);
            NavBar::end();
        ?>
        <?php if (Yii::$app->controller->route == 'site/index'): ?>
        <?= $content ?>
        <?php else: ?>
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
        <?php endif ?>
    </div>
    <footer class="footer">
        <div class="container">
            <p class="text-center">Yii2-user released under the MIT license as a part of Dektrium project.</p>
        </div>
    </footer>

<?php $this->endBody() ?>
<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>
<?php $this->endPage() ?>
