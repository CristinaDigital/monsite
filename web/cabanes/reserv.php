<?php
    require_once('./base.php');
    open_page("Votre Réservation");

    // Tableau de noms
    $cabanes = array(
        "Cabane \"Grand Hêtre\"",
        "Cabane \"Vieux Chêne\"",
        "Cabane \"Berceau\"",
        "Cabane \"Soleil Royal\"",
        "Cabane \"Les Terriens\"",
        "Cabane \"Le Fer à Cheval\"",
        "Cabane du \"Canyon\"",
        "Cabane \"Robin des Bois\"",
        "Cabane \"Baron Perché\"",
        "La Cabane \"Le Drakkar\"",
    );
?>

<div class="wrapper reserv">
    <header>
        <div>
            <h1>Votre Réservation</h1>
        </div>
        <img src="img/reservation.jpg" title="Votre réservation" alt="Votre réservation" />
    </header>
    <section>
        <h2 class="top">Résumé de votre réservation</h2>
        <h2 class="bottom"><?php echo htmlentities($cabanes[0], 0, 'UTF-8'); ?></h2>
	    <div class="resume">
            <div>
    	    	<div>
    	    		<span class="title">1- Répartition des voyageurs</span>
    	    	    <p>Une cabane - 2 adultes <span class="yellow">(inclus)</span></p>
    	    	</div>
    	    	<div>
    	    		<span class="title">2- Catégorie d'hébergement</span>
    	    		<p>Un lit double <span class="yellow">(inclus)</span></p>
    	    	</div>
    	    	<div>
    	    		<span class="title">3- Type de pension</span>
    	    		<p>Petit-déjeuner <span class="yellow">(inclus)</span></p>
    	    	</div>
    	    	<div>
    	    		<span class="title">4- Assurances</span>
    	    		<p><input type="checkbox" /> Assurance annulation 2<span class="euro">€</span></p>
    	    	</div>
    	    	<div>
    	    		<span class="title">5- Restauration</span>
    	    		<p class="yellow">Résumé de votre commande repas</p>
                    <div>
                        <span>2x Menu prestige</span>
                        <span>78<span class="euro">€</span></span>
                    </div>
                    <div>
                        <span>1x Kit apéritif</span>
                        <span>35<span class="euro">€</span></span>
                    </div>
                    <div>
                        <span>1x Vin (rouge)</span>
                        <span>14<span class="euro">€</span></span>
                    </div>
                    <div>
                        <span>1x Bouteille de champagne</span>
                        <span>30<span class="euro">€</span></span>
                    </div>
                    <div class="total">
                        <span>Total</span>
                        <span>157<span class="euro">€</span></span>
                    </div>
    	    	</div>
    	    	<div class="inputs">
    	    		<span class="title">6- Massage</span>
                    <div>
                        <span>Type de massage</span>
                        <select>
                            <option value="0">Massage détente</option>
                            <option value="1">Massage pierres chaudes</option>
                            <option value="2">Massage bien-être</option>
                        </select>
                    </div>
                    <div>
                        <span>Séances</span>
                        <span>
                            <button id="first_dec">-</button>
                            <input id="first" type="text" name="bon" value="2" readonly>
                            <button id="first_inc">+</button>
                        </span>
                    </div>
                    <div>
                        <span>Personnes</span>
                        <span>
                            <button id="sec_dec">-</button>
                            <input id="sec" type="text" name="bon" value="2" readonly>
                            <button id="sec_inc">+</button>
                        </span>
                    </div>
                    <div class="total">
                        <span>Total</span>
                        <span>140<span class="euro">€</span></span>
                    </div>
    	    	</div>
                <h3>Massage détente</h3>
                <span>comprenant un massage du visage et du cuir chevelu aux huiles essentielles bio.</span>
                <p>30 minutes minimum.</p>
            </div>
            <aside class="resume">
                <h3>Votre Réservation</h3>
                <img src="img/pres_cabanes/cab10.jpg" title="Image de la cabane" alt="Image de la cabane" />
                <a href="cabane.php" class="desc">Voir le descriptif de la cabane</a>
                <div>
                    <div>
                        <span><?php echo htmlentities($cabanes[0], 0, 'UTF-8'); ?></span>
                    </div>
                    <div>
                        <span>Date d'arrivée :</span>
                        <span>06/07/2017</span>
                    </div>
                    <div>
                        <span>Date de départ :</span>
                        <span>08/07/2017</span>
                    </div>
                    <div>
                        <span>Durée :</span>
                        <span>2 jours</span>
                    </div>
                    <div>
                        <span>Nombre de personnes :</span>
                        <span>2 personnes</span>
                    </div>
                </div>
                <h3>Bon cadeau</h3>
                <div>
                    <div>
                        <input class="bon" type="text" name="bon" placeholder="Saisisez votre code" />
                        <button>Ok</button>
                    </div>
                </div>
                <h3>Votre Devis</h3>
                <div>
                    <div>
                        <span>Séjour :</span>
                        <span>119<span class="euro">€</span></span>
                    </div>
                    <div>
                        <span>Assurance :</span>
                        <span>2<span class="euro">€</span></span>
                    </div>
                    <div>
                        <span>Restauration :</span>
                        <span>118<span class="euro">€</span></span>
                    </div>
                    <div>
                        <span>Massage :</span>
                        <span class="dalign">140<span class="euro">€</span></span>
                    </div>
                    <div class="total">
                        <span>Total</span>
                        <span>379 €</span>
                    </div>
                </div>
                <h3><a href="#">Réglement <span class="fa fa-caret-right"></span></a></h3>
            </aside>
	    </div>
    </section>
</div>

<?php
    close_page();
?>