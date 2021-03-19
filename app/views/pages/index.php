<?php
include APPROOT . "/views/inc/header.php";

 ?>

 <div class="jumbotron">
   <div class="col-1">
           <h1  class="w3-container w3-center w3-animate-top" style=" font-family: 'Baskervville', cursive;">Hello.</h1>
           <h2 class="w3-container w3-center w3-animate-top" style=" font-family:  'Baskervville', cursive;">My name is Nguyen Bao Nguyen</h2>
           <h3 class="w3-container w3-center w3-animate-top" style=" font-family:  'Baskervville', cursive;">& I am absolutely a sophomore</h3>
           <div class="bounce">
             <a href="#about"><i class="fa fa-chevron-down"></i></a></div>
     </div>

   </div>





<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up"></i></button>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
 if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
   mybutton.style.display = "block";
 } else {
   mybutton.style.display = "none";
 }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
 document.body.scrollTop = 0;
 document.documentElement.scrollTop = 0;
}
</script>
<!-- Extra plugin js -->
     <script src="vendors/counter-up/waypoints.min.js"></script>
     <script src="vendors/counter-up/jquery.counterup.min.js"></script>
     <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
     <script src="vendors/isotope/isotope.pkgd.min.js"></script>
     <script src="vendors/owl-carousel/owl.carousel.min.js"></script>

     <script src="vendors/style-switcher/styleswitcher.js"></script>
     <script src="vendors/style-switcher/switcher-active.js"></script>
     <script src="vendors/animate-css/wow.min.js"></script>

     <!-- Timeline JS -->
<script type="text/javascript" src="js/addons-pro/timeline.js"></script>
<script type="text/javascript" src="js/formcheck.js">
</script>
<script type="text/javascript" src="js/jquery.form.js">

</script>
   <script src="js/jquery.validate.min.js"></script>

<?php
include APPROOT . "/views/inc/footer.php";
 ?>
