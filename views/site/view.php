<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="en" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <title>Muro</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/blue.css" type="text/css" media="screen" />
    <!--[if IE 6]>
    <link rel="stylesheet" type="text/css" media="screen" href="css/ie-hacks.css" />
    <script type="text/javascript" src="js/DD_belatedPNG.js"></script>
    <script>
        /* EXAMPLE */
        DD_belatedPNG.fix('*');
    </script>
    <![endif]-->
    <!-- ENDS CSS -->

    <!-- prettyPhoto -->
    <link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />
    <!-- ENDS prettyPhoto -->

    <!-- JS -->
    <script type="text/javascript" src="js/jquery_1.4.2.js"></script>
    <script type="text/javascript" src="js/jqueryui.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
    <script type="text/javascript" src="js/tooltip/jquery.tools.min.js"></script>
    <script type="text/javascript" src="js/jquery.tabs/jquery.tabs.pack.js"></script>
    <script type="text/javascript" src="js/filterable.pack.js"></script>
    <script type="text/javascript" src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/jQuery.equalHeights.js"></script>
    <!-- ENDS JS -->

    <!-- superfish -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/superfish-custom.css" />
    <script type="text/javascript" src="js/superfish-1.4.8/js/hoverIntent.js"></script>
    <script type="text/javascript" src="js/superfish-1.4.8/js/superfish.js"></script>
    <!-- ENDS superfish -->

    <!-- tabs -->
    <link rel="stylesheet" href="css/jquery.tabs.css" type="text/css" media="print, projection, screen" />
    <!-- Additional IE/Win specific style sheet (Conditional Comments) -->
    <!--[if lte IE 7]>
    <link rel="stylesheet" href="css/jquery.tabs-ie.css" type="text/css" media="projection, screen">
    <![endif]-->
    <!-- ENDS tabs -->



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

        <!-- MAIN -->
        <div id="main">
            <!-- navigation -->

            <div class="clear"></div>
            <!-- ENDS navigation -->




            <!-- POSTS -->
            <div id="posts" class="full-width">
                <!-- post -->
                <div class="post">
                    <p ><a href="#" class="post-title"> EASY TO USE </a></p>

                    <div class="post-img">
                        <img src="<?= $post->img ?>" alt="...">
                    </div>
                    <div class="excerpt">
                        <h3><?= $post->title ?></h3>
                        <p><?= $post->text ?></p>
                        </div>
                </div>
                <!-- ENDS post -->

                <!-- comments form -->

                <!-- ENDS comments form -->

            </div>
            <!-- ENDS POSTS -->





        </div>
        <!-- ENDS MAIN -->



    </div>
    <!-- ENDS CONTENT -->
</div>
<!-- ENDS WRAPPER -->



<!-- FOOTER -->
<div id="footer">


    <div class="footer-bottom">
        <p class="legal">fedos</p>
    </div>

</div>
<!-- ENDS FOOTER -->


<!-- start cufon -->
<script type="text/javascript"> Cufon.now(); </script>
<!-- ENDS start cufon -->


</body>
</html>
