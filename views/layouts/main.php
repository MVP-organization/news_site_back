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
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Мой блог',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Домашняя страничка', 'url' => ['/site/index']],
<<<<<<< HEAD
['label'=>'О сайте','url'=>['site/about']],
            ['label'=>'Связь с нами','url'=>['site/contact']],
=======

>>>>>>> 3849ba96a07debc3530446cf47a3eaf460832fbb

            Yii::$app->user->isGuest ? (
                ['label' => 'Логин', 'url' => ['/site/login']]
            ) : (

                '<li>'
<<<<<<< HEAD

               
 . Html::beginForm(['blog/default/index'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Панель управления',
                    ['class' => 'btn btn-link']
                )
                   
. Html::endForm()
            
=======
                . Html::beginForm(['label'=>'Панель управления','url'=>['blog/default/index']])
      
. Html::beginForm(['label'=>'О сайте','url'=>['site/about']])
. Html::beginForm(['label'=>'Связь с нами','url'=>['site/contact']])
>>>>>>> 3849ba96a07debc3530446cf47a3eaf460832fbb
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])

                . Html::submitButton(
                    'Выход (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )


                  

                . Html::endForm()
                
            )
        ],
    ]);
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
        <p class="pull-left">&copy; my blog <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
