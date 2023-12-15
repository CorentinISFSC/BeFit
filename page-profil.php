<?php get_header() ?>

<?php
$_SESSION["connected"] = "lucas.corsano@isfsc.be";
?>

<br><br><br><br>
<div id="top_profile" class="d-flex align-items-center">
    <h1 class="display-3 text-blue ml-5 font-weight-bold">Mon profil</h1>
    <button form="profile_form" type="submit" onclick="modifyData()" class="profil_button mr-5">Modifier mes données</button>
</div>
<br><br>
<div id="middle_profile" class="ml-5 mr-5">
    <img src="<?php echo get_template_directory_uri(); ?>./images/Lucas Corsano.png" alt="Photo de profil">
    <div>
        <form class="ml-5 inscription" id="profile_form" action="./mon-profil.php">
            <input type="text" name="prenom" id="prenom" placeholder="Prenom" value="Lucas">
            <input type="email" name="email" id="email" placeholder="exemple@gmail.com" value="lucas.corsano@isfsc.be">
            <input type="text" name="nom" id="nom" placeholder="Nom" value="Corsano">
            <input type="password" name="password" id="password" placeholder="Mot de passe" value="••••••••••••">
            <input type="text" name="age" id="age" placeholder="Age" value="21 ans">
            <input type="password" name="passwordverif" id="passwordverif" placeholder="Mot de passe *" value="••••••••••••">
        </form>
        <br><br><br><br>
        <button onclick="location.pathname='page-programme.php'" class="profil_button mx-auto">Accès à mes programmes</button>
    </div>
</div>
<br>
<small class="answers ml-5 mt-5">Voir mes réponses au formulaire</small>
<br><br>