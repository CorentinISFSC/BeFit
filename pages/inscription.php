<?php require("./view/header.php"); ?>
<br><br><br><br><br><br>
<h1 class="display-3 text-blue ml-5 font-weight-bold">Inscription</h1>
<p class="display-5 ml-5">Il est temps de t'inscrire maintenant !</p>
<form class="ml-5 inscription" id="connexion_form" action="./programme.php">
    <input type="text" name="nom" id="nom" placeholder="Nom">
    <input type="number" name="age" id="age" placeholder="Age">
    <input type="password" name="password" id="password" placeholder="Mot de passe">
    <input type="text" name="prenom" id="prenom" placeholder="Prenom">
    <input type="email" name="email" id="email" placeholder="Email">
    <input type="password" name="password" id="password" placeholder="Mot de passe*">
</form>
<button class="mt-5" id="connect_button_form">Je m'inscris</button>