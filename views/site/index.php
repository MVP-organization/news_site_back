
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Новини</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/blue.css" type="text/css" media="screen" />
    <!-- ENDS CSS -->

    <!-- prettyPhoto -->
    <link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />
    <!-- ENDS prettyPhoto -->

    <!-- JS -->
    <script type="text/javascript" src="js/jquery_1.4.2.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
    <script type="text/javascript" src="js/tooltip/jquery.tools.min.js"></script>
    <script type="text/javascript" src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <!-- ENDS JS -->

    <!-- superfish -->





</head>
<body>

<!-- WRAPPER -->
<div id="wrapper">


    <!-- MAIN -->
    <div id="main">

        <a href=""><img src="img/logo.png" alt="Logo" id="logo" /></a>

        <div class="clear"></div>
        <!-- ENDS navigation -->

        <!-- slideshow -->

        <div id="slideshow">
            <a href="" id="slideshow-link" ><span></span></a>
            <ul id="slides">

                <li><a href=""><img src="slides/01.jpg"  alt="Imagen" /></a></li>
                <li><a href=""><img src="slides/02.jpg"  alt="Imagen" /></a></li>
                <li><a href=""><img src="slides/03.jpg"  alt="Imagen" /></a></li>
            </ul>
        </div>
        <!-- ENDS slideshow -->

        <!-- headline -->
        <div class="headline">
            ГОЛОВНІ НОВИНИ САЙТУ
        </div>
        <!-- ENDS headline -->

        <!-- blocks -->


        <ul class="blocks-holder">
            <?php  if (!empty($posts)):?>
            <?php foreach ($posts as $arr){ ?>


            <li class="block-2">

                    <div class="img-holder">



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
            </li>

            <?php  }
            ?>
        </ul>
        <?php  endif;?>
        <!-- ENDS blocks -->
        <?= \yii\widgets\LinkPager::widget(['pagination'=>$pages]) ?>


    </div>
    <!-- ENDS MAIN -->



</div>
<!-- ENDS CONTENT -->
</div>
</body>
</html>

