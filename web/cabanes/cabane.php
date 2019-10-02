<?php
    require_once('./base.php');
    open_page("Cabane du \"Grand Hêtre\"");
?>

<div class="wrapper cabane">
    <header>
        <img src="img/pres_cabanes/cab10.jpg" title="Presentation cabane" alt="Presentation cabane" />
    </header>
    <section id="desc">
        <aside id="sticky_resa" class="resa">
            <p>A partir de 119 &euro;</p>
            <div class="resa">
                <div id="datepickk"></div>
                <div>
                    <span>Personnes</span>
                    <select>
                        <option value="1">1 personne</option>
                        <option value="2" selected="selected">2 personnes</option>
                    </select>
                </div>
                <div>
                    <span>Panier repas<span class="sub">(choisissez le nombre de paniers)</span></span>
                    <select>
                        <option value="0">0 panier</option>
                        <option value="1">1 panier</option>
                        <option value="2">2 paniers</option>
                        <option value="3">3 paniers</option>
                    </select>
                </div>
                <div>
                    <span>Massage<span class="sub">(choisissez votre massage)</span></span>
                    <select>
                        <option value="0">Massage Bien-être 55 &euro;</option>
                        <option value="1">Massage Bien-être et pierres chaudes 65 &euro;</option>
                        <option value="2">Massage Détente 35 &euro;</option>
                    </select>
                </div>
                <div>
                    <span>Bon cadeau<span class="sub">(utilisez votre bon cadeau)</span></span>
                    <input type="text" placeholder="Votre bon ici !" />
                </div>
                <a href="#"><span class="fa fa-phone-square" aria-hidden="true"></span> Demande d'informations</a>
                <a href="reserv.php" class="last">Réserver</a>
            </div>
        </aside>
        <div class="desc">
            <h1>La cabane du "Grand Hêtre"</h1>
            <div class="onglets">
                <a href="#presentation">Présentation</a>
                <span class="spacer fa fa-circle" aria-hidden="true"></span>
                <a href="#informations">Informations</a>
            </div>
            <div class="icons">
                <div>
                    <span class="icon icon-cabane_arbre" aria-hidden="true"></span>
                    <span>Individuelle</span>
                </div>
                <div>
                    <span class="fa fa-arrows-v" aria-hidden="true"></span>
                    <span>8 Mètres</span>
                </div>
                <div>
                    <span class="icon icon-groupe" aria-hidden="true"></span>
                    <span>2 Pers</span>
                </div>
                <div>
                    <span class="fa fa-arrows-alt" aria-hidden="true"></span>
                    <span>10 M<sup>2</sup></span>
                </div>
            </div>
            <p>Une cabane "couple - accès classique" est conçue pour être partagée à deux. Elle est idéale pour s'évader et vivre une expérience inoubliable en pleine nature. Le dépaysement et le calme sont là, tout simplement. L'accès classique permet à tous d'atteindre la cabane perchée à 8 et 10 mètres sans nécessiter de harnais. Il y a deux cabanes "couple" - accès classique à Fontaine-Châtel. Elles sont équipées d'un lit pour deux personnes.</p>
            <h2 id="presentation">Présentation</h2>
            <p>La cabane du "<b>Grand Hêtre</b>" est la <b>première née</b> des cabanes dans les arbres de Fontaine-Châtel. C'est, à l'heure actuelle, la <b>cabane préférée des demandes en mariage</b>, trois recensées à fin septembre 2010, on ne compte plus depuis ...</p>
            <p>La cabane du "Grand Hêtre" à une <b>exposition exceptionnelle</b> avec une <b>vue splendide sur la plaine et la vallée sèche</b> où elle se trouve.</p>
            <p>Elle est assez <b>atypique</b> avec <b>sa terrasse décalée</b>. Cette terrasse suit, en fait, une branche maîtresse et se trouve donc à <b>8 mètres de haut</b>.</p>
            <p>Cabane accessible <b>à partir de 12 ans</b></p>
            <p><b>Type d'accès :</b> Accès facile par échelle.</p>
            <p><b>Distance du parking :</b> environ 10 minutes de promenade dans les bois.</p>
            <h2 id="informations">Informations Supplémentaires</h2>
            <span class="warn">Nos tarifs par nuit (Petit-déjeuner et taxe de séjour forfaitaire comprise)</span>
            <table id="tarifs" class="tarifs">
                <thead>
                    <tr>
                        <th class="desktop"></th>
                        <th class="yellow">Nombre de nuit du séjour</th>
                        <th class="grey">Prix par nuit pour 2 personnes</th>
                        <th>Remise appliquée</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="mobile">
                        <td class="desktop"></td>
                        <td colspan=3 class="green">
                            <h4>Basse saison</h4>
                            <span>à partir du 3/10/2017 jusqu'au 30/03/2018</span>
                            <span>à partir du 2/10/2018</span>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan=3 class="green desktop">
                            <h4>Basse saison</h4>
                            <span>à partir du 3/10/2017 jusqu'au 30/03/2018</span>
                            <span>à partir du 2/10/2018</span>
                        </td>
                        <td>1</td>
                        <td>119 <span class="euro">€</span></td>
                        <td class="green">Base</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>107 <span class="euro">€</span></td>
                        <td class="green">10% de remise</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>95 <span class="euro">€</span></td>
                        <td class="green">20% de remise</td>
                    </tr>
                    <tr class="mobile">
                        <td class="desktop"></td>
                        <td colspan=3 class="red">
                            <h4>Haute saison</h4>
                            <span>à partir du 31/03/2018 jusqu'au 1/10/2018</span>
                            <span>+ Saint-Valentin et Saint-Sylvestre</span>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan=3 class="red desktop">
                            <h4>Haute saison</h4>
                            <span>à partir du 31/03/2018 jusqu'au 1/10/2018</span>
                            <span>+ Saint-Valentin et Saint-Sylvestre</span>
                        </td>
                        <td>1</td>
                        <td>139 <span class="euro">€</span></td>
                        <td class="red">Base</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>125 <span class="euro">€</span></td>
                        <td class="red">10% de remise</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>119 <span class="euro">€</span></td>
                        <td class="red">20% de remise</td>
                    </tr>
                </tbody>
            </table>
            <p><b>Personnes supplémentaires</b></p>
            <p>Les prix sont proposés pour forfait de deux personnes pour les cabanes couple, sportives et petites familiales. Les prix des Grandes cabanes familiales sont eux valables pour un forfait de quatre personnes. Lorsque la capacité d'accueil de la cabane le permet, il est possible d'ajouter des personnes supplémentaires aux tarifs suivant :</p>
            <div class="note">
                <div>
                    <span>Prix par enfant supplémentaire <b>(moins de 16 ans)</b></span>
                    <span>Prix par adulte supplémentaire <b>(16 ans et plus)</b></span>
                </div>
                <div>
                    <span><b>30<span class="euro">€</span></b></span>
                    <span><b>45<span class="euro">€</span></b></span>
                </div>
            </div>
            <div class="warn">
                <span>Ces tarifs n'incluent pas la "Garantie Annulation" de <b>2<span class="euro">€</span></b></span>
                <span>Cette garantie est facultative, mais demeure fortement recommandée, car elle couvre des conditions spécifiques à ce type d'hébergement comme les aléas climatiques, alertes météo, et les restrictions d'accès inhérentes à ce type d'hébergement comme le vertige ou la grossesse avérée.</span>
                <span>Cette garantie s'applique par nuitée quelque soit le nombre de personnes dans la cabane.</span>
            </div>
            <div class="list">
                <p>Nous proposons également un service de massage.<p> Pour toute information sur les massages, <b>appelez Béatrice au 06.10.52.09.17.</b></p>
                <span><b>Vous devez impérativement venir avec :</b></span>
                <span>* votre sac de couchage ou vos draps et taies d'oreiller</span>
                <span>* votre linge de toilette</span>
            </div>
        </div>
    </section>
</div>

<?php
    close_page();
?>