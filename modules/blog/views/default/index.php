
<?php
use yii\web\HttpException;
if( Yii::$app->user->identity->username=='') throw new HttpException('Доступ к этой страничке запрещен');

  
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\blog\models\PostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Посты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать пост', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="row">
    <?php foreach ($posts as $arr){ ?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail2">
                <img weight='10' height='100' src="<?= $arr->img ?>" alt="...">
                <div class="caption">
                    <h3><?= $arr->title ?></h3>
                    <p><?= $arr->text_preview ?></p>
                    <p><a href="/blog/default/view?id=<?= $arr->id ?>" class="btn btn-primary" role="button">Редактировать</a> </p>
                </div>
            </div>
        </div>
    <?php  }
    ?>
    </div>
</div>




