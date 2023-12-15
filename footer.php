<footer>
    <div id="footer_container">
        <div class="footer_cell">
            <h4>Contact</h4>
            <br>
            <p class="footer_text">Contactes nous par mail ou par téléphone juste ici</p>
            <br>
            <span class="links">
                <a href="mailto:befit@gmail.com">befit@gmail.com</a>
                <a href="tel:+3221234567">+32 2 123 45 67</a>
            </span>
            <br><br>
            <h4>Nos réseaux</h4>
            <br>
            <span class="links">
                <a href="">Instagram</a>
                <a href="">Twitter</a>
            </span>
            <br><br><br><br><br><br><br>
        </div>
        <div class="footer_cell">
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