<?php
    require_once('./base.php');
    ob_start();
?>
<header data-paroller-factor="0.4">
    <div class="text_header">
        <div class="desc">
            <h1 class="main-title">
                <span>Cabanes dans les arbres</span>
                <span class="nocaps">de</span>
                <span class="border">Fontaine-Ch&acirc;tel</span>
            </h1>
        </div>
        <div class="accroche">
            <span class="first">Une expérience unique</span>
            <span class="second">de communion avec la nature !</span>
        </div>
    </div>
</header>
<?php
    open_page("Accueil", ob_get_clean());
?>

<div id="slide2">
    <aside>
        <div>
            <div data-paroller-factor="0.2">
                <img src="img/spa-mini.jpg" title="image spa" alt="image spa" />
                <!-- image pour prendre la place et par défaut sous téléphone -->
            </div>
        </div>
    </aside>
    <section>
        <h2 class="titre">A la une : Spa et nature</h2>
        <h3 class="titre green">En amoureux</h3>
        <p>Nous vous proposons une large gamme de massages, pour une expérience unique avec la nature, à la mesure de vos sensations.</p>
        <p>L'intensité des massages proposés sera adaptée à vos besoins. Vous en ressortirez complètement relaxé(e), détendu(e), et en parfaite harmonie avec l'environnement naturel de nos cabanes.</p>
        <a href="#">Découvrez cette offre</a>
    </section>
</div>

<section id="types">
    <div class="back">
        <div>
            <div>
                <span>Découvrez nos différentes cabanes</span>
            </div>
            <div>
                <span>A partir de 119&euro;</span>
            </div>
        </div>
    </div>
    <div class="front">
        <div class="slide">
            <div class="tuile">
                <img src="img/couple.jpg" title="cabane pour couple" alt="cabane pour couple" />
                <div class="desc">
                    <h2 class="titre">Accès classique</h2>
                    <h3 class="titre">En amoureux</h3>
                    <p>Une cabane "couple - accès classique" est con&ccedil;ue pour être partagée à deux. Elle est idéale pour s'évader et vivre une expérience inoubliable en pleine nature. Le dépaysement et le calme sont là, tout simplement.</p>
                    <a href="./cabanes.php">Découvrez nos cabanes</a>
                </div>
            </div>
            <div class="tuile">
                <img src="img/famille.jpg" title="cabane pour famille" alt="cabane pour famille" />
                <div class="desc">
                    <h2 class="titre">Accès facile</h2>
                    <h3 class="titre">En famille</h3>
                    <p>Les cabanes familiales sont idéales pour une famille avec de jeunes enfants. Faciles, courtes, où même escalier, les passerelles sont stables et sécurisées pour permettre l'accès à la cabane entre 4 et 10 mètres du sol.</p>
                    <a href="./cabanes.php">Découvrez nos cabanes</a>
                </div>
            </div>
            <div class="tuile">
                <img src="img/sportif.jpg" title="cabane pour sportif" alt="cabane pour sportif" />
                <div class="desc">
                    <h2 class="titre">Accès difficile</h2>
                    <h3 class="titre">Pour les sportifs</h3>
                    <p>Une cabane dans les arbres sportive accès aventure est réservée aux courageux. L'accès par tyrolienne ou pont de singe donne un charme et une ambiance unique à ces trois cabanes perchées à 12 mètres du sol.</p>
                    <a href="./cabanes.php">Découvrez nos cabanes</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="stats">
    <div class="cap_text">
        Ch&acirc;teau du XVIII<sup>e</sup> siècle
    </div>
    <div class="float_image" data-paroller-factor="0.3">
        <img src="img/cab.jpg" title="image de presentation" alt="image de presentation" />
    </div>
    <div class="bandeau back">
        <div class="text">
            <h2 class="titre">Les cabanes dans les arbres</h2>
            <h3 class="titre">Le cadre</h3>
            <p>Le site des cabanes de Fontaine a ouvert ses portes le samedi 10 avril 2010.</p>
            <p>Nichées dans un massif forestier de 27 hectares, quatre cabanes ont éclos en 2010. Cette année, six autres cabanes devraient voir le jour afin de permettre à toujours plus d'amoureux de la nature de venir se ressourcer dans le calme de ses branches.</p>
            <a href="#">Découvrez notre offre</a>
        </div>
    </div>
    <div class="bandeau">
        <div class="numbers">
            <div class="border">
                <div>
                    <span class="number">10</span>
                    <span class="sub">Cabanes</span>
                </div>
                <div>
                    <span class="number">27</span>
                    <span class="sub">Hectares</span>
                </div>
                <div>
                    <span class="number">4-12</span>
                    <span class="sub">Mètres de hauteur</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="activites">
    <div class="back">
        <div>
            <div>
                <span>Les activités</span>
            </div>
            <div>
                <span>Dans votre région</span>
            </div>
        </div>
    </div>
    <div class="front">
        <div class="slide">
            <div class="tuile">
                <img src="img/tourisme-mini.jpg" title="activités tourisme" alt="activités tourisme" />
                <a href="#" class="desc">
                    <h2 class="titre caps">Tourisme en normandie</h2>
                </a>
            </div>
            <div class="tuile">
                <img src="img/sport-mini.jpg" title="activités sport" alt="activités sport" />
                <a href="#" class="desc">
                    <h2 class="titre caps">Sport et détente</h2>
                </a>
            </div>
            <div class="tuile">
                <img src="img/culture-mini.jpg" title="activités culture" alt="activités culture" />
                <a href="#" class="desc link">
                    <h2 class="titre caps">Culture</h2>
                </a>
            </div>
            <div class="tuile">
                <img src="img/nature.jpg" title="activités nature" alt="activités nature" />
                <a href="#" class="desc">
                    <h2 class="titre caps">Nature</h2>
                </a>
            </div>
            <div class="tuile">
                <img src="img/histoire-patrimoine.jpg" title="activitéspatrimoine" alt="activités patrimoine" />
                <a href="#" class="desc">
                    <h2 class="titre caps">Patrimoine</h2>
                </a>
            </div>
            <div class="tuile">
                <img src="img/oscar-litterature.jpg" title="activités litterature" alt="activités litterature" />
                <a href="#" class="desc link">
                    <h2 class="titre caps">Littérature</h2>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="newsletter">
    <div class="bandeau">
        <div>
            <h2>Abonnez-vous à la newsletter</h2>
            <p>Si vous souhaitez vous tenir informé des dernières nouveautés et ne pas passer à côté de bonnes affaires, n'hésitez pas et abonnez-vous à notre newsletter en un seul clic.</p>
        </div>
    </div>
    <div class="form">
        <div>
            <div>
                <h2>Newsletter</h2>
                <h3>E-mail</h3>
            </div>
            <input type="text" id="email" placeholder="Votre e-mail ici">
        </div>
        <a href="#">S'abonner</a>
    </div>
</section>

<section id="ou">
    <iframe src="https://snazzymaps.com/embed/3172"></iframe>
    <div>
        <h2 class="titre"><span class="first">Comment nous</span> <span class="second">trouver</span></h2>
        <h3 class="titre green">Cabanes dans les arbres</h3>
        <h4 class="titre">Les cabanes de fontaine</h4>
        <p>4, route du château</p>
        <p class="space">78750 Saint-Germain des Essourts</p>
        <p>FRANCE</p>
        <p class="space">Tél: 06.25.06.30.79</p>
    </div>
</section>

<?php
    close_page();
?>