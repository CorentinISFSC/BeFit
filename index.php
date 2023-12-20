<!-- Appel du header -->
<?php get_header(); ?>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div id="top_modal" class="d-flex align-items-center justify-content-between">
        <h1>Question 1 : Niveau</h1>
        <span class="close">&times;</span>
    </div>
    <br>
    <p class="display-5" id="question">
    Quel niveau de défi préfères-tu pour tes séances d'entraînement ?
    </p>
    <br><br>
    <form id="questionnaire_form" action="">
        <span class="input">
            <input type="radio" name="radio" id="radio_1">
            <label for="radio_1">Débutant</label>
        </span>
        <span class="input">
            <input type="radio" name="radio" id="radio_2">
            <label for="radio_2">Avancé</label>
        </span>
        <span class="input">
            <input type="radio" name="radio" id="radio_3">
            <label for="radio_3">Intermédiaire</label>
        </span>
        <span class="input">
            <input type="radio" name="radio" id="radio_4">
            <label for="radio_4">Expert</label>
        </span>
    </form>
    <br><br>
    <div id="buttons" class="d-flex align-items-center justify-content-between">
        <button id="previous">Precedent</button>
        <button id="next">Suivant</button>
    </div>
  </div>
</div>

<!-- Photo du header -->
<section id="home"></section>

<!-- Slogan du header -->
<div class="container">
    <?php $aboutSection = get_page_by_title('Ton programme personnel en un clique'); ?>
    <h4 class="text-white" style="transform: translateY(-170px);"><?php echo $aboutSection->post_title; ?></h4>
</div>

<!-- Slogan du site -->
<span id="banniere_defile" class="overflow-hidden">
    <p class="pt-4 pb-4 display-3 font-weight-bold text-uppercase text-nowrap">Transforme ton <span class="text-blue">corps</span>, transforme ta <span class="text-blue">vie !&nbsp;</span></p>
    <p class="pt-4 pb-4 display-3 font-weight-bold text-uppercase text-nowrap">Transforme ton <span class="text-blue">corps</span>, transforme ta <span class="text-blue">vie !&nbsp;</span></p>
</span>

<!-- Présentation du site -->
<div class="container-fluid">
    <div id="BeFit_description" class="row my-row">
        <div class="left_side col-md-6"></div>
        <div class="right_side col-md-6 p-5 text-white">
            <?php $aboutSection = get_page_by_title('BeFit'); ?>
            <h2 id="titre_BeFit" class="text-white mb-6"><?php echo $aboutSection->post_title; ?></h2>
            <h5 id="desc_BeFit" class="text-white display-5"><?php echo $aboutSection->post_content; ?></h5>
            <button id="start_programm" class="custom_link_main text-white">Commencer<br>le programme</button>
        </div>
    </div>
</div>
<!-- Vos avis -->
<div id="avis_container" class="mt-5">
    <?php $aboutSection = get_page_by_title('Vos Avis'); ?>
    <br><br>
    <h1 class="container text-blue pl-5"><?php echo $aboutSection->post_title; ?></h1>
    <table id="avis_table">
        <tr class="nbl nbr">
            <td class="nbl">&nbsp;</td>
            <td></td>
            <td class="nbr"></td>
        </tr>
        <tr class="nbl nbr">
            <td class="nbl"><button class="slide_button" style="padding: 0;"><img src="<?php echo get_template_directory_uri(); ?>/images/left.png" width="50" alt="fleche de gauche"></button></td>
            <td>
                <div id="avis">
                    <h4>Lisa 23 ans&nbsp; <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26">
                            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"></path>
                        </svg>&nbsp;<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26">
                            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"></path>
                        </svg>&nbsp;<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26">
                            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"></path>
                        </svg>&nbsp;<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26">
                            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"></path>
                        </svg>&nbsp;<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26">
                            <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20Z"></path>
                        </svg> </h4>
                    <p id="avis_content"><?php echo $aboutSection->post_content; ?></p>
                </div>
            </td>
            <td class="nbr"><button class="slide_button" style="padding: 0;"><img src="<?php echo get_template_directory_uri(); ?>/images/right.png" width="50" alt="fleche de gauche"></button></td>
        </tr>
        <tr class="nbl nbr">
            <td class="nbl">&nbsp;</td>
            <td></td>
            <td class="nbr"></td>
        </tr>
    </table>
</div>

<!-- Call to action 1-->
<br><br>
<a id="rejoindre" class="display-5">Rejoins-nous</a>
<img id="horizontal_barre" src="<?php echo get_template_directory_uri(); ?>/images/barre_horiz.png" alt="Barre horizontale">
<br><br>

<!-- Notre histoire -->
<div id="history" class="container-fluid pt-5">
    <div class="container">
        <br><br>
        <h1 class="display-2 text-white pl-3 pl-md-5">Notre Histoire</h1>
        <br>
        <div id="BeFit_history" class="row">
            <div class="left_side col-12 col-md-6 p-3 p-md-5">
                <img src="<?php echo get_template_directory_uri(); ?>/images/corentin.png" alt="Photo de Corentin" class="img-fluid">
                <p class="text-white"> Hey BeFit Fam ! C'est Corentin, co-fondateur de BeFit.
                    Alors, notre histoire, c'est un peu comme la tienne,
                    une aventure fitness pleine de rebondissements. L'idée
                    de BeFit, c'est venue d'une évidence : on est tous différents
                    et nos routines devraient l'être aussi. J'ai toujours cru que
                    chacun a sa propre version de la forme parfaite. BeFit,
                    c'est notre façon de t'accompagner dans ta Fitness Story.
                    On voulait créer plus qu'un simple site, un espace où tu
                    te sens chez toi, compris et boosté dans ton parcours. Ici,
                    chaque programme est conçu pour te ressembler.
                    Bienvenue chez BeFit, l'endroit où on écrit ta fitness story
                    ensemble !</p>
            </div>
            <div class="right_side col-12 col-md-6 p-3 p-md-5">
                <img src="<?php echo get_template_directory_uri(); ?>/images/lucas.png" alt="Photo de Lucas" class="img-fluid">
                <p class="text-white">Hey la BeFit Fam ! C'est Lucas, co-créateur de BeFit.
                    Imagine un endroit où chaque séance de fitness est
                    comme une page de ta Fitness Story, adaptée à ton
                    style unique. Parce qu'on est tous différents, et c'est
                    ça qui rend chaque parcours spécial. BeFit, c'est plus
                    qu'un site, c'est ton chez-toi où tu te sens soutenu à
                    chaque étape de ton aventure fitness. Chaque
                    mouvement que tu fais, c'est une expression de ta
                    personnalité et un pas de plus vers ta meilleure version.
                    Bienvenue chez BeFit, où ta Fitness Story prend vie !</p>
            </div>
        </div>
        <img style="transform: translateY(-100px);" src="<?php echo get_template_directory_uri(); ?>./images/barre_blanche.png" alt="barre_blanche" class="img-fluid">
        <br><br><br>
    </div>
</div>

<!-- Call to action 2 -->
<br><br><br>
<p class="text-center mt-5 mb-5" id="join_us_para">N'attends plus et rejoins-nous. Crée ton programme en <button id="start_programm_2" class="text-blue">cliquant ici.</button></p>
<br><br><br>

<!-- JS de défilement de la bannière -->
<script>
    let scroller = 0;

    setInterval(() => {
        document.getElementById("banniere_defile").scrollBy(2, 0);
        if (document.getElementById("banniere_defile").scrollLeft >= document.getElementById("banniere_defile").getElementsByTagName("p")[0].clientWidth) {
            document.getElementById("banniere_defile").scrollTo(0, 0);
        }
    }, 10);
</script>

<!-- JS de Vos avis -->
<script>
    document.querySelectorAll(".slide_button").forEach(button => {
        button.addEventListener("click", () => {
            document.getElementById("avis").style.opacity = "0";
            setTimeout(() => {
                document.getElementById("avis").style.opacity = "1";
            }, 800);
        })
    });
</script>

<!-- Variables boutons Call to action -->
<script>
let index = 1;

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("start_programm");
var btn2 = document.getElementById("start_programm_2");
var btnjoin = document.getElementById("rejoindre");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}
btnjoin.onclick = function() {
  modal.style.display = "block";
}
// When the user clicks the button, open the modal 
btn2.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


// JS du formulaire
document.getElementById("previous").addEventListener("click", () => {
    if(index > 1){
        index--;
        updateQuestions(index);
    }
    else{        
    modal.style.display = "none";
    }
})
document.getElementById("next").addEventListener("click", () => {
    if(index < 8){
        index++;
        updateQuestions(index);
    }
    else{
        location.replace("<?php echo home_url('/index.php/inscription'); ?>");
    }
})

// Fonction appel du modal
function updateQuestions(index){
    const modal = document.getElementsByClassName("modal-content")[0];
    const title = modal.getElementsByTagName("h1")[0];
    const description = document.getElementById("question");

    const label1 = document.querySelector("label[for=radio_1]");
    const label2 = document.querySelector("label[for=radio_2]");
    const label3 = document.querySelector("label[for=radio_3]");
    const label4 = document.querySelector("label[for=radio_4]");

// Questions du formulaire
    switch(index){
        case 1:
            title.innerHTML = "Question 1 : Niveau"
            description.innerHTML = "Quel niveau de défi préfères-tu pour tes séances d'entraînement ?";
            label1.innerHTML = "Débutant";
            label2.innerHTML = "Avancé";
            label3.innerHTML = "Intermédiare";
            label4.innerHTML = "Expert";
            break;
        case 2:
            title.innerHTML = "Question 2 : Objectif"
            description.innerHTML = "Quels sont tes principaux objectifs de fitness ?";
            label1.innerHTML = "Perte de poids";
            label2.innerHTML = "Augmentation du cardio";
            label3.innerHTML = "Gain musculaire";
            label4.innerHTML = "Avoir une meilleure santé";
            break;
        case 3:
            title.innerHTML = "Question 3 : Moments"
            description.innerHTML = "Quels sont les moments de la journée où tu préfères t'entraîner ?";
            label1.innerHTML = "Matin";
            label2.innerHTML = "Soir";
            label3.innerHTML = "Après-midi";
            label4.innerHTML = "Variable selon les jours";
            break;
        case 4:
            title.innerHTML = "Question 4 : Lieu d'entraînement"
            description.innerHTML = "Où préfères-tu t'entraîner ?";
            label1.innerHTML = "À la maison";
            label2.innerHTML = "En plein air";
            label3.innerHTML = "En salle de sport";
            label4.innerHTML = "Peu importe";
            break;
        case 5:
            title.innerHTML = "Question 5 : Qualité de sommeil"
            description.innerHTML = "Comment évaluerais-tu la qualité de ton sommeil actuellement ?";
            label1.innerHTML = "Excellente (10h)";
            label2.innerHTML = "Bonne (8h)";
            label3.innerHTML = "Moyenne (6h)";
            label4.innerHTML = "Médiocre (-5h)";
            break;
        case 6:
            title.innerHTML = "Question 6 : Fréquence"
            description.innerHTML = "À quelle fréquence souhaites-tu t'entraîner chaque semaine ?";
            label1.innerHTML = "1-2 fois";
            label2.innerHTML = "5-6 fois";
            label3.innerHTML = "3-4 fois";
            label4.innerHTML = "7 fois ou plus";
            break;
        case 7:
            title.innerHTML = "Question 7 : Équipement Disponible"
            description.innerHTML = "Quel équipement de fitness as-tu à ta disposition ?";
            label1.innerHTML = "Machine de cardio (vélo, tapis roulant, etc.)";
            label2.innerHTML = "Haltères";
            label3.innerHTML = "Tapis de yoga";
            label4.innerHTML = "Rien du tout";
            break;
        case 8:
            title.innerHTML = "Question 8 : Durée des Séances"
            description.innerHTML = "Quelle est la durée idéale d'une séance d'entraînement pour toi ?";
            label1.innerHTML = "15-30 minutes";
            label2.innerHTML = "45-60 minutes";
            label3.innerHTML = "30-45 minutes";
            label4.innerHTML = "Plus d'une heure";
            break;
}
}
</script>

<!-- Appel du footer -->
<?php get_footer(); ?>