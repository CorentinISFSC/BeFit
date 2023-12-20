<footer>
    <div id="footer_container">
        <div class="footer_cell">
<<<<<<< HEAD
            <h4 class="fw-bold">Contact</h4>
            <br>
            <p class="footer_text">Contacte-nous par mail ou par téléphone juste ici</p>
=======
            <h4>Contact</h4>
            <br>
            <p class="footer_text">Contactes nous par mail ou par téléphone juste ici</p>
>>>>>>> 7fd97cbe8ecc49aa8abef5ca9594c363874e32a9
            <br>
            <span class="links">
                <a href="mailto:befit@gmail.com">befit@gmail.com</a>
                <a href="tel:+3221234567">+32 2 123 45 67</a>
            </span>
            <br><br>
<<<<<<< HEAD
            <h4 class="fw-bold">Nos réseaux</h4>
            <br>
            <span class="links">
                <a href="https://www.instagram.com/">Instagram</a>
                <a href="https://www.facebook.com/">Facebook</a>
=======
            <h4>Nos réseaux</h4>
            <br>
            <span class="links">
                <a href="">Instagram</a>
                <a href="">Twitter</a>
>>>>>>> 7fd97cbe8ecc49aa8abef5ca9594c363874e32a9
            </span>
            <br><br><br><br><br><br><br>
        </div>
        <div class="footer_cell">
<<<<<<< HEAD
            <h4 class="fw-bold">Inscris-toi !</h4>
            <br>
            <p class="footer_text">N’attends plus et inscris-toi. Clique sur le lien
                juste ici pour t’inscrire et crée ton tout premier
                programme personnalisé ! </p>
                <br>
            <a class="green btn my_btn" href="<?php echo home_url('index.php/inscription'); ?>">Inscription</a>
            <br><br><br><br><br><br><br><br><br><br><br><br>
            <a href="./index.php" id="footer_link"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo BeFit"></a>
        </div>
        <div class="footer_cell">
            <h4 class="fw-bold">Information</h4>
            <ul>
                <li><a id="liens_juridiques" href="<?php echo home_url('/index.php/termesetconditions'); ?>">Termes et conditions</a></li>
                <li><a id="liens_juridiques" href="<?php echo home_url('/index.php/cookie'); ?>">Cookies</a></li>
                <li><a id="liens_juridiques" href="<?php echo home_url('/index.php/privatepolicy'); ?>">Police de Confidentialté</a></li>
                <li><a id="liens_juridiques" href="<?php echo home_url('/index.php/mentionslegales'); ?>">Mentions légales</a></li>
=======
            <h4>Inscris-toi !</h4>
            <br>
            <p class="footer_text">N’attends plus et inscris-toi. Clique sur le lien
                juste ici pour t’inscrire et crée ton tout premier
                programme personnalisé </p>
                <br>
            <button class="green" onclick="location.pathname = '/index.php/inscription';">Inscription</button>
            <br><br><br><br><br><br><br><br><br><br><br><br>
            <a href="./index.php" id="footer_link"><img src="<?php echo get_template_directory_uri(); ?>./images/logo.png" alt="Logo BeFit"></a>
        </div>
        <div class="footer_cell">
            <h4>Information</h4>
            <ul>
                <li>Cookie Policy</li>
                <li>Private Policy</li>
                <li>Termes et conditions</li>
>>>>>>> 7fd97cbe8ecc49aa8abef5ca9594c363874e32a9
            </ul>
        </div>
    </div>
    </table>
</footer>
  
<!-- Lien vers la bibliothèque Bootstrap JS et Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

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

<?php wp_footer(); ?>
</body>
</html>