<?php get_header(); ?>

<<<<<<< HEAD
<div class="container">
    <h1 class="display-3 text-center text-blue mt-5 fw-bold">Mot de passe oublié ?</h1>
        <form class="container container-tiny ml-5" id="connexion_form" action="">
            <input type="email" name="email" id="email" placeholder="Email">
                <a class="mt-5" id="connect_button_form" href="<?php echo home_url('/index.php/mailenvoye'); ?>">Envoyer</a>
                <small><a href="<?php echo home_url('/index.php/inscription'); ?>"> Pas de compte ? Crées-en un !</small></a>
        </form>
</div>
=======
<br><br><br><br><br><br>
<h1 class="display-3 text-blue ml-5 font-weight-bold">Mot de passe oublié ?</h1>
<form class="ml-5 inscription" id="connexion_form" action="./programme.php">
    <input type="email" name="email" id="email" placeholder="Email">
</form>
<button class="mt-5" id="connect_button_form" id="go_to_mailenvoye">Envoyer</button>
<small><a href="<?php echo home_url('/index.php/inscription'); ?>"> Pas de compte ? Crées-en un !</small></a>
>>>>>>> 7fd97cbe8ecc49aa8abef5ca9594c363874e32a9

</body>
</html>

