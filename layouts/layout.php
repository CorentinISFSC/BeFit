<!DOCTYPE html>
<html lang="fr-BE">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <!-- Bootstrap 4.5.2 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/style.css">
</head>

<body>
    
    <?php require("./pages/" . $content . ".php") ?>

    <!-- Lien vers la bibliothèque Bootstrap JS et Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<script>
 // Fonction pour détecter le défilement et renvoyer le scrollTop
 function handleScroll() {
      // Récupérer la valeur scrollTop
      var scrollTopValue = document.documentElement.scrollTop || document.body.scrollTop;

      if(scrollTopValue > 50){
        document.getElementById("head_bar").style.transform = "translateY(-500%)";
      }
      else{
        document.getElementById("head_bar").style.transform = "translateY(0%)";
      }
    }

    // Attacher la fonction handleScroll à l'événement de défilement
    window.addEventListener("scroll", handleScroll);
</script>
</html>