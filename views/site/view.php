<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\BlogPage */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Посты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-sm-6 col-md-6" >

        
            <img src="<?= $post->img ?>" alt="...">
            <div class="caption">

                <h3><?= $post->title ?></h3>
                <p><?= $post->text ?></p>

            
        </div>
    </div>


</div>