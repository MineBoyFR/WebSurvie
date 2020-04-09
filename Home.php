<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Page home</title>
    <link rel="stylesheet" type="text/css" href="homeStyle.css">
</head>
<body>
<header>
    <nav class="postitre">
        <h1 id="titre1">Survie 1.16</h1>
        <h3 id="titre2">Rejoin nous maintenant</h3>
    </nav>
    <div id="gif"></div><!--Bloc temporaire-->
</header>
<section>
    <aside>
        <div id="ligne1"></div>
    </aside>
    <article>
        <aside>
            <div class="hallogo">
                <div id="logo1"><img src="#Soon"></div>
                <div id="logo2"><img src="#Soon"></div>
                <div id="logo3"><img src="#Soon"></div>
                <div id="logo4"><img src="#Soon"></div>
            </div>
        </aside>
        <div class="bloc">
            <div id="bloc1"></div>
            <div id="bloc2"></div>
            <div id="bloc3"></div>
            <div id="bloc4"></div>
        </div>
        <div>
            <form method="post" class="post">
                <input type="text" name="pseudo" id="pseudo" placeholder="Votre Pseudo" required>
                <input type="text" name="age" id="age" placeholder="Votre age">
                <input type="text" name="discord" id="discord" placeholder="Votre Discord" required>
                <input type="text" name="motivation" id="motivation" placeholder="Votre motivation">
                <input type="submit" name="envoie" id="envoie">
            </form>
            <?php
            if (isset($_POST['envoie'])) {
                $pseudo = $_POST['pseudo'];
                $discord = $_POST['discord'];

                if (!empty($pseudo) && !empty($discord)) {
                    echo "Votre Pseudo " . $_POST['pseudo'] . "<br/>";
                    echo "Votre Age " . $_POST['age'] . "<br/>";
                    echo "Votre Discord " . $_POST['discord'] . "<br/>";
                }
            }
            ?>
        </div>
    </article>
    <article class="text"> <!--text no official-->
        <div id="text1">
            <p>Le pseudo est important pour l'ajoute à la liste <br>Blanche du serveur.</p>
        </div>
        <div id="text2">
            <p>L'age n'est pas le plus important, mais il est tous de même conseiller d'avoir 16ans au minimum.</p>
        </div>
        <div id="text3">
            <p>Le discord est primordial pour vous envoyer le serveur si votre motivation, nous motiv.</p>
        </div>
        <div id="text4">
            <p>Il est consieller de nous détailler pourquoi vous voulez rejoindre.</p>
        </div>
    </article>
</section>
<footer>
    <p>By : MineBoy</p>
</footer>
</body>

<?php

?>


