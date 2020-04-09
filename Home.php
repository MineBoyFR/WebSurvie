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
    <div id="gif">
        <!--Gif Fond page Moitier 1-->
    </div>
    <div id="bloc2">
        <!--Gif Fond page Moitier 2-->
    </div>
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
        <div>
            <form method="post">
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
</section>
<footer>
    <p>By : MineBoy</p>
</footer>
</body>

<?php

?>


