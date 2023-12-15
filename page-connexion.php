<?php get_header(); ?>

<div class="container container-tiny">
<h1 class="display-3 text-center text-blue mt-5 fw-bold">Connexion</h1>
<form class="ml-5" id="connexion_form" action="">
    <input type="email" name="email" id="email" placeholder="Email">
    <input type="password" name="password" id="password" placeholder="Mot de passe">
    <small><a href="<?php echo home_url('/page-motdepasseoublie.php'); ?>">Mot de passe oublié ?</a></small>
    <button class="mx-auto" id="go_to_profil">Connexion</button>
    <small><a id="start_programm"> Pas de compte ? Crées-en un !</small></a>
</form>
</div>
