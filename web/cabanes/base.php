<?php

if (getenv('APPLICATION_ENV') == 'development') {
    require __DIR__ . '/vendor/autoload.php';
    SassCompiler::run("scss/", "css/");
}

function open_page($page, $screen=false) {
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?php echo $page; ?> - Cabanes dans les arbres</title>

    <meta charset="utf-8">
    <meta name="description" content="Votre cabane dans les arbres en Normandie.
    Dix cabanes dans les arbres perchées à quelques mètres de hauteur vous attendent dans ce lieu authentique. ">  
    <meta name="keywords" content="normandie, cabanes, arbres, vacances, insolite, séjour, couple, famille, réservation, restauration, fontaine-châtel, massage">
    <meta name="author" content="Cristina ASENSIO" />
    <meta name="copyright" content="© Les Cabanes dans les Arbres." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Optional theme et mon css -->
    <link rel="stylesheet" href="css/datepickk.min.css">
    <link rel="stylesheet" href="css/pictos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="top"></div>
    <div><a href="#top" id="top_arrow"><span class="fa fa-arrow-circle-up" aria-hidden="true"></span></a></div>
    <div class="slide1 <?php if (! $screen) { echo "absolute_slide1"; } ?>">
        <nav class="top">
            <span id="menu_toggle" class="fa fa-bars" aria-hidden="true"></span>
            <a class="logo" href="index.php">
                <img src="img/logo.svg" title="logo Cabanes" alt="logo cabanes" />
            </a>
            <a href="#" class="resa">
                Réservez
            </a>
        </nav>
        <?php
            if (! $screen) { echo '<div class="anchor">'; }
        ?>
        <div class="head <?php if (! $screen) { echo "absolute_head"; } ?>">
            <nav id="hover_menu" class="left">
                <a href="cabanes.php"><span class="icon icon-cabane_arbre" aria-hidden="true"></span><span class="hidden">Nos cabanes</span></a>
                <a href="#"><span class="icon icon-activites" aria-hidden="true"></span><span class="hidden">Activités</span></a>
                <a href="#"><span class="icon icon-restauration" aria-hidden="true"></span><span class="hidden">Restauration</span></a>
                <a href="#"><span class="icon icon-reservation" aria-hidden="true"></span><span class="hidden">Réserver</span></a>
                <a href="#"><span class="icon icon-actualites" aria-hidden="true"></span><span class="hidden">Actualités</span></a>
                <a href="#"><span class="icon icon-b_cadeau" aria-hidden="true"></span><span class="hidden">Bon cadeau</span></a>
                <a href="#"><span class="icon icon-contact" aria-hidden="true"></span><span class="hidden">Contact</span></a>
                <a href="#" class="lang space">FR</a>
                <a href="#" class="lang">EN</a>
                <div id="carre">
                    <span class="icon icon-sejour_insolite" aria-hidden="true"></span>
                </div>
            </nav>
            <?php
                if ($screen) { echo $screen; }
            ?>
        </div>
        <?php
            if (! $screen) { echo '</div>'; }
        ?>
    </div>
<?php
}

function close_page() {
?>
    <?php include('./footer.php'); ?>

    <!-- Latest compiled and minified JavaScript -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/datepickk.js"></script>
    <script src="js/jquery.paroller.min.js"></script>
    <script src="js/effects.js"></script>
</body>
</html>

<?php
}
?>