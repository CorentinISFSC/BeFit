<?php get_header(); ?>

<h1 class="display-3 text-center text-blue mt-5 fw-bold">Inscription</h1>
<p class="display-5 text-center mt-5">Il est temps de t'inscrire maintenant !</p>
<form class="container container tiny mt-5 inscription" id="connexion_form" action="">
    <input type="text" name="nom" id="nom" placeholder="Nom">
    <input type="number" name="age" id="age" placeholder="Age">
    <input type="password" name="password" id="password" placeholder="Mot de passe">
    <input type="text" name="prenom" id="prenom" placeholder="Prenom">
    <input type="email" name="email" id="email" placeholder="Email">
    <input type="password" name="password" id="password" placeholder="Mot de passe*">
</form>
<a href="<?php echo home_url('/index.php/profil'); ?>" class="mt-5" id="connect_button_form" >Je m'inscris</a>


</body>
</html>