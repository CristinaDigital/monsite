<?php
    require_once('./base.php');
    open_page("Les cabanes");

    // Tableau à deux niveaux
    $cabanes = array(
        "Cabane \"Grand Hêtre\"" => array(
            "img" => "cab10.jpg",
            "type" => 1,
            "places" => 2,
            "difficulte" => 1,
            "price" => 199,
            "desc" => array(
                'La cabane du "Grand Hêtre" est la première née des cabanes dans les arbres de Fontaine-Châtel.',
                'La cabane a une exposition exceptionnelle avec une vue splendide sur la plaine et la vallée sèche où elle se trouve.',
            ),
        ),
        "Cabane \"Vieux Chêne\"" => array(
            "img" => "cab9.jpg",
            "type" => 1,
            "places" => 2,
            "difficulte" => 1,
            "price" => 199,
            "desc" => array(
                "Très appréciée, la cabana du \"Vieux Chêne\" dispose de deux terassas. C'est à l'heure actuelle, la seule cabane avec vu sur l'amazonie !",
                "Pour les amoureux des animaux, sachez qu'une chouette vient tous les ans couver",
            ),
        ),
        "Cabane \"Berceau\"" => array(
            "img" => "cab8.jpg",
            "type" => 1,
            "places" => 2,
            "difficulte" => 3,
            "price" => 129,
            "desc" => array(
                "La cabane du  \"Berceau\" est la dernière née de l'année 2010. Pour y accéder, il faut franchir un petit \"parcours aventure\": escalier, cocotier, pont de singe vertigineux et échelle de papou.",
                "Sujets au vertige, s'abstenir."
            ),
        ),
        "Cabane \"Soleil Royal\"" => array(
            "img" => "cab7.jpg",
            "type" => 1,
            "places" => 2,
            "difficulte" => 3,
            "price" => 129,
            "desc" => array(
                "Le  \"Soleil Royal\" est l'une des dernières cabanes de Fontaine-Châtel.",
                "Avec son orientation \"plein sud\", le \"Soleil Royal\" bénéficie d'une exposition idéale.",
                "Cette cabane là va en faire rêver plus d'un !",
            ),
        ),
        "Cabane \"Les Terriens\"" => array(
            "img" => "cab6.jpg",
            "type" => 1,
            "places" => 2,
            "difficulte" => 3,
            "price" => 129,
            "desc" => array(
                "Cette cabane est orientée plein ouest et bénéficie d'une très belle vue sur les champs. Elle est située en lisière de forêt.",
                "Sujets au vertige s'abstenir ! Mais tout à fait recommandé aux amateurs de parcours acrobatiques en hauteur.",
            ),
        ),
        "Cabane \"Le Fer à Cheval\"" => array(
            "img" => "cab5.jpg",
            "type" => 1,
            "places" => 2,
            "difficulte" => 3,
            "price" => 129,
            "desc" => array(
                "Le Fer à Cheval est une cabane sportive. L'accès est très facile mais original, il faut mettre le pied à l'étrier pour franchir une courte tyrolienne.",
                "Avec son toit pointu à double pente est perchée à 6 mètres du sol. Son hôte est un grand hêtre, un arbre de 150 ans.",
            ),
        ),
        "Cabane du \"Canyon\"" => array(
            "img" => "cab4.jpg",
            "type" => 1,
            "places" => 4,
            "difficulte" => 2,
            "price" => 179,
            "desc" => array(
                "Elle doit son nom à la topographie du lieu qui l'accueille. Elle culmine à 5 mètres. Son accès à la fois sympathique et simple en fait une cabane idéale pour les personnes sujettes au vertige ainsi que les familles avec de jeunes  enfants.",
                "Elle est accessible à partir de 2 ans.",
            ),
        ),
        "Cabane \"Robin des Bois\"" => array(
            "img" => "cab3.jpg",
            "type" => 1,
            "places" => 8,
            "difficulte" => 2,
            "price" => 179,
            "desc" => array(
                "C'est la cabane idéale pour les grands parents qui veulent passer des vacances avec leurs petits enfants. Perchée à 4 mètres de hauteur, elle est accessible dès 2 ans.",
                "Son escalier en colimaçon vous mènera sur une terrasse très sécurisée, spacieuse et au charme indolent des Antilles.",
            ),
        ),
        "Cabane \"Baron Perché\"" => array(
            "img" => "cab2.jpg",
            "type" => 1,
            "places" => 6,
            "difficulte" => 1,
            "price" => 179,
            "desc" => array(
                "Le \"Baron perché\" est aujourd'hui composé de deux cabanes autonomes séparées par une solide passerelle en bois. ",
                "Son architecture en deux cabanes en fait un lieu d'accueil idéal pour une famille avec enfants de plus de 12 ans ou pour 2 couples d'amis.",
            ),
        ),
        "La Cabane \"Le Drakkar\"" => array(
            "img" => "cab1.jpg",
            "type" => 1,
            "places" => 3,
            "difficulte" => 1,
            "price" => 179,
            "desc" => array(
                "Bienvenue en Normandie à bord de ce Drakkar qui va vous réserver bien des surprises.",
                "Elle bénéficie d'une vue splendide. A seulement 5 mètres de haut, elle offre cependant une impression de hauteur.",
            ),
        ),
    );
?>

<!-- Wrapper Cabanes -->
<div class="wrapper cabanes">
    <header>
        <h1>Nos différents types de cabanes</h1>
    </header>

<?php
    // Me permets d'alterner de droite à gauche l'affichage des cabanes
    $side = 'left';
    foreach ($cabanes as $name => $cabane) {
        // affichage d'une section par cabane
?>
        <section>
            <img src="img/pres_cabanes/<?php echo $cabane['img']; ?>" alt="<?php echo htmlentities($name, 0, 'UTF-8'); ?>" title="<?php echo htmlentities($name, 0, 'UTF-8'); ?>" />
            <div class="desc <?php echo $side; ?>">
                <div class="prix">
                    <span><?php echo $cabane['price']; ?> &euro;</span>
                    <span>A partir de</span>
                </div>
                <h2 class="cab"><?php echo htmlentities($name, 0, 'UTF-8'); ?></h2>
                <?php
                foreach ($cabane['desc'] as $p) {
                    echo "<p>" . htmlentities($p, 0, 'UTF-8') . "</p>";
                }
                ?>
                <div class="icons">
                    <div>
                        <span class="icon icon-cabane_arbre" aria-hidden="true"></span>
                        <span class="icon-desc"><?php if ($cabane['places'] > 3) { echo "Groupe"; } else { echo "Individuelle"; } ?></span>
                    </div>
                    <div>
                        <span class="icon icon-groupe" aria-hidden="true"></span>
                        <span class="icon-desc"><?php echo $cabane['places']; ?> pers</span>
                    </div>
                    <div>
                        <img src="img/difficulty<?php echo $cabane['difficulte']; ?>.svg" alt="<?php echo $difficulte; ?>"/>
                        <span class="icon-desc">
                            <?php
                            if ($cabane['difficulte'] == "1") { echo htmlentities("Accès simple", 0, 'UTF-8'); }
                            elseif ($cabane['difficulte'] == "2") { echo htmlentities("Accès moyen", 0, 'UTF-8'); }
                            else { echo htmlentities("Accès difficile", 0, 'UTF-8'); }
                            ?>  
                        </span>
                    </div>
                </div>
                <div class="links">
                    <a href="./cabane.php">En savoir plus</a>
                    <a href="#">Réserver</a>
                </div>
            </div>
        </section>
<?php
        if ($side == 'left') { $side = 'right'; }
        else { $side = 'left'; }
    }
?>
</div>

<?php
    close_page();
?>