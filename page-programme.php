<?php get_header(); ?>

<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content video">
        <div id="top_modal" class="d-flex align-items-center justify-content-between">
            <span class="close">&times;</span>
        </div>
        <?php
        // CEST ICI QUE NOUS ALLONS DETERMINER QUELLE VIDEO AFFICHER SELON LES RESULTATS DU QUESTIONNAIRE

        // Ici on va recuperer via la base de données les réponses aux questionnaires, liées au compte, et nous allons déterminer

        // Ici on range le nombre de réponses selon leur type, on remplacera les valeurs par le résultat renvoyé par la requête SQL. Chaque valeur correspond aux nombres de réponses à la question 1, 2, 3 puis 4
        $reponse = [2, 1, 3, 2];

        // Dans notre cas on vient de mettre plus de réponses 3, ce qu'on va détecter ci-dessous
        $question_la_plus_repondue = array_keys($reponse, max($reponse));

        // La variable ci-dessus sera égale à 0, 1, 2 ou 3 (les index des arrays commence toujours par 0), on gère les cas avec un switch, qui affichera la vidéo youtube souhaitée
        switch ($question_la_plus_repondue[0]):
                // Premiere vidéo
            case "0":
        ?>
                <iframe src="https://www.youtube.com/embed/9XN-_UIo9tM?si=1VKuk09nuA3lXz9n" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <?php
                break;
                // Deuxieme video
            case "1":
            ?>
                <iframe src="https://www.youtube.com/embed/w_LnxNJuxJI?si=QCGa5zQ6wGR0abcd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <?php
                break;
                // Troisieme video
            case "2":
            ?>
                <iframe src="https://www.youtube.com/embed/zJj479o8Di4?si=kPI7RdmWjFweU57k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <?php
                break;
                // Quatrieme video
            case "3":
            ?>
                <iframe src="https://www.youtube.com/embed/6_DfVr8-GSQ?si=zovVkgmwd5zLNkFU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <?php
                break;
        endswitch;
        ?>
    </div>
</div>

<div class="container">
    <h1 id="programme_title" class="ml-md-5 mr-md-5 mt-3"><img src="<?php echo get_template_directory_uri(); ?>/images/programme_titre.png" alt="Titre programme" class="img-fluid" width="500"></h1>
    <h2 id="programme_week" class="text-blue mr-md-5">Semaine 1</h2>
</div>

<br>

<div class="container-fluid" id="programmes">
    <div class="row">
        <div class="col-12 col-md-4 mb-4">
            <img src="<?php echo get_template_directory_uri(); ?>/images/prog_cardio.png" alt="Photo Programme" class="img-fluid" loading="lazy">
        </div>
        <div class="col-12 col-md-4 mb-4">
            <img src="<?php echo get_template_directory_uri(); ?>/images/prog_bas_du_corps.png" alt="Photo Programme" class="img-fluid" loading="lazy">
        </div>
        <div class="col-12 col-md-4 mb-4">
            <img src="<?php echo get_template_directory_uri(); ?>/images/prog_haut_du_corps.png" alt="Photo Programme" class="img-fluid" loading="lazy">
        </div>
    </div>
    <br>
    <hr class="yellow_separator">
    <br>
</div>

<br><br>

<script>
    document.getElementById("programmes").querySelectorAll("img").forEach(image => {
        image.addEventListener("click", (popVideo))
    })

    function popVideo() {
        modal.style.display = "block";
    }

    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];


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
</script>

<?php get_footer(); ?>