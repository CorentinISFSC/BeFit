<?php get_header(); ?>

<br><br><br><br><br><br>
<h1 class="display-3 text-blue ml-5 font-weight-bold">Mot de passe oublié ?</h1>
<form class="ml-5 inscription" id="connexion_form" action="./programme.php">
    <input type="email" name="email" id="email" placeholder="Email">
</form>
<button class="mt-5" id="connect_button_form" id="go_to_mailenvoye">Envoyer</button>
<small><a href="<?php echo home_url('/index.php/inscription'); ?>"> Pas de compte ? Crées-en un !</small></a>

</body>
</html>

