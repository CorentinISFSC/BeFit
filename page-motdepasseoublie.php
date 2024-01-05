<?php get_header(); ?>

<div class="container">
    <h1 class="display-3 text-center text-blue mt-5 fw-bold">Mot de passe oublié ?</h1>
        <form class="container container-tiny ml-5" id="connexion_form" action="">
            <input type="email" name="email" id="email" placeholder="Email">
                <a class="mt-5" id="connect_button_form" href="<?php echo home_url('/index.php/mailenvoye'); ?>">Envoyer</a>
                <small><a href="<?php echo home_url('/index.php/inscription'); ?>"> Pas de compte ? Crées-en un !</small></a>
        </form>
</div>

</body>
</html>

