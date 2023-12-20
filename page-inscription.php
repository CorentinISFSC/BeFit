<?php get_header(); ?>

<<<<<<< HEAD
<h1 class="display-3 text-center text-blue mt-5 fw-bold">Inscription</h1>
<p class="display-5 text-center mt-5">Il est temps de t'inscrire maintenant !</p>
<form class="container container tiny mt-5 inscription" id="connexion_form" action="">
=======
<br><br><br><br><br><br>
<h1 class="display-3 text-blue ml-5 font-weight-bold">Inscription</h1>
<p class="display-5 ml-5">Il est temps de t'inscrire maintenant !</p>
<form class="ml-5 inscription" id="connexion_form" action="">
>>>>>>> 7fd97cbe8ecc49aa8abef5ca9594c363874e32a9
    <input type="text" name="nom" id="nom" placeholder="Nom">
    <input type="number" name="age" id="age" placeholder="Age">
    <input type="password" name="password" id="password" placeholder="Mot de passe">
    <input type="text" name="prenom" id="prenom" placeholder="Prenom">
    <input type="email" name="email" id="email" placeholder="Email">
    <input type="password" name="password" id="password" placeholder="Mot de passe*">
</form>
<<<<<<< HEAD
<a href="<?php echo home_url('/index.php/profil'); ?>" class="mt-5" id="connect_button_form" >Je m'inscris</a>


</body>
</html>
=======
<button class="mt-5" id="connect_button_form" id="go_to_profil">Je m'inscris</button>

</body>
</html>

<script>
var btn6 = document.getElementById("go_to_profil")
btn6.onclick = function() {
  location.replace("<?php echo home_url('./page-profil.php') ?>")
}
>>>>>>> 7fd97cbe8ecc49aa8abef5ca9594c363874e32a9
