<?php
    require_once('./base.php');
    open_page("Contact", 4);
?>

<section id="contact" class="container-fluid">
    <div>
        <h2>Contact</h2>
        <!-- <div class="input-group">
        <form method="post" action="traitement.php">
            <p>
                <label for="message"><h3>Déscription de votre projet</h3></label>
                <textarea name="message" id="message" rows="10" cols="50">Type de projet, cible, délai etc</textarea>
            </p>
            <p>
                <label for="message"><h3>A propos de vous</h3></label>
            </p>
            <p>
                <input id="nom" name="nom" type="text" placeholder="Nom" required>

                <input id="email" name="email" type="text" placeholder="E-mail" required>
            </p>
            <p>
                <input id="compagnie" name="compagnie" type="text" placeholder="Entreprise / Compagnie" required>

                <input id="position" name="position" type="text" placeholder="Localisation" required>
            </p>

            <button type="submit" class="btn btn-primary btn-lg">ENVOYER</button>
        </form> -->
        <div class="content">
            <div class="text">
                <p>Je vous contacterais dans les meilleurs délais !</p>
                <h2>Adresse</h2>
                <p>Paris (75)</p>
                <h2>Contact</h2>
                <p>06 51 30 62 48</p>
                <p>christina.asensio@gmail.com</p>

                <a class="btn" href="mailto:christina.asensio@gmail.com"><button type="submit" class="btn-primary btn-lg">Me Contacter</button></a>
                <a class="btn" href="mailto:christina.asensio@gmail.com"><button type="submit" class="btn-secondary btn-lg">Linkedin</button></a>
            </div>
            <div>
                <iframe src="https://snazzymaps.com/embed/23576" width="100%" height="500px" style="border:none;"></iframe>
            </div>
        </div>

    </div>
</section>

<?php
    close_page();
?>