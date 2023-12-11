<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div id="top_modal" class="d-flex align-items-center justify-content-between">
        <h1>Vidéo séance semaine 1</h1>
        <span class="close">&times;</span>
    </div>
    <video src="" width="100%" controls></video>
  </div>

</div>
<?php require("./view/header.php"); ?>
<br><br><br>
<h1 class="display-2 font-weight-bold ml-5 mr-5 mt-3">Vos programmes</h1>
<h2 class="text-blue display-3 font-weight-bold ml-5 mr-5">Semaine 1</h2>
<br>
<div class="container" id="programmes">
    <div class="row">
        <div class="left_side col-4">
            <img src="./images/prog_cardio.png" alt="Photo Programme" loading="lazy">
        </div>
        <div class="right_side col-4 ">
            <img src="./images/prog_bas_du_corps.png" alt="Photo Programme" loading="lazy">
        </div>
        <div class="right_side col-4 ">
            <img src="./images/prog_haut_du_corps.png" alt="Photo Programme" loading="lazy">
        </div>
    </div>
    <br><hr class="yellow_separator"><br>
    <img src="./images/banner.png" alt="Bannière" loading="lazy" id="banner_prog">
</div>

<br><br>

<?php require("./view/footer.php"); ?>

<script>
    document.getElementById("programmes").querySelectorAll("img").forEach(image => {
        image.addEventListener("click", (popVideo))
    })

function popVideo(){
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