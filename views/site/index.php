
<?php  if (!empty($posts)):?>
    <?php foreach ($posts as $arr){ ?>

    <div class="row">
            <div class="col-sm-6 col-md-4">
                <a href="<?= \yii\helpers\Url::to(['site/view','id'=>$arr->id]) ?>" >
                <div class="thumbnail">
                    <img src="<?= $arr->img ?>" alt="...">
                    <div class="caption">
                        <h3><?= $arr->title ?></h3>
                        <p><?= $arr->text_preview ?></p>

                    </div>
                </div>
            </div>
        </a>
        <?php  }
        ?>
    </div>


    <?= \yii\widgets\LinkPager::widget(['pagination'=>$pages]) ?>
<?php  endif;?>