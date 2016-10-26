<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="en" />


    <title>Muro</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/blue.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />
    <!-- ENDS prettyPhoto -->

    <!-- JS -->


</head>
<body>
<?php
$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Посты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- WRAPPER -->
<div id="wrapper">
   <!-- CONTENT -->
    <div id="content">
        <div id="main">
            <!-- navigation -->

            <div class="clear"></div>

            <!-- POSTS -->
            <div id="posts" class="full-width">
                <!-- post -->
                <div class="post">
                    <p ><a href="#" class="post-title"> <?= $post->title ?> </a></p>

                    <div class="post-img">
                        <img src="<?= $post->img ?>" alt="...">
                    </div>
                    <div class="excerpt">

                        <p><?= $post->text ?></p>
                        </div>
                </div>


            </div>
            <!-- ENDS POSTS -->





        </div>
        <!-- ENDS MAIN -->



    </div>
    <!-- ENDS CONTENT -->
</div>
</body>
</html>





