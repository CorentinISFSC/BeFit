<?php get_header(); ?>

<div class="container container-tiny">
<<<<<<< HEAD
    <h1 class="display-3 text-center text-blue mt-5 fw-bold">Connexion</h1>
        <form class="ml-5" id="connexion_form" action="">
            <input type="email" name="email" id="email" placeholder="Email">
            <input type="password" name="password" id="password" placeholder="Mot de passe">
        <small><a href="<?php echo home_url('index.php/motdepasseoublie'); ?>">Mot de passe oublié ?</a></small>
        <a class="mx-auto" id="connect_button_form" href="<?php echo home_url('/index.php/profil'); ?>">Connexion</a>
        <small><a href="<?php echo home_url('index.php/inscription'); ?>"> Pas de compte ? Crées-en un !</a></small>
        </form>
</div>
=======
<h1 class="display-3 text-center text-blue mt-5 fw-bold">Connexion</h1>
<form class="ml-5" id="connexion_form" action="">
    <input type="email" name="email" id="email" placeholder="Email">
    <input type="password" name="password" id="password" placeholder="Mot de passe">
    <small><a href="<?php echo home_url('/page-motdepasseoublie.php'); ?>">Mot de passe oublié ?</a></small>
    <button class="mx-auto" id="go_to_profil">Connexion</button>
    <small><a id="start_programm"> Pas de compte ? Crées-en un !</small></a>
</form>
</div>
>>>>>>> 7fd97cbe8ecc49aa8abef5ca9594c363874e32a9
