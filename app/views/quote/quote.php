
<?php
include APPROOT . "/views/inc/header.php";

 ?>
 <div class="container">


 <section class="quote_area pad" id="quotes">
  <div class="main_title">
      <h2>Favorite Quotes</h2>
  </div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
 <!-- Indicators -->
 <ol class="carousel-indicators">
   <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
   <li data-target="#myCarousel" data-slide-to="1"></li>
   <li data-target="#myCarousel" data-slide-to="2"></li>
 </ol>

 <!-- Wrapper for slides -->
 <div class="carousel-inner">
   <div class="item active">
     <img src="public/images/pic2.jpg" alt="" style="width:100%; height: 500px;">
     <div class="carousel-caption">
    <h3 class="w3-xxlarge w3-serif">“Don't limit your challenges, challenge your limits.”</h3>
    <p>― Jerry Dunn</p>
  </div>
   </div>

   <div class="item">
     <img src="public/images/pic1.JPG" alt="" style="width:100%;height: 500px;">
     <div class="carousel-caption">
    <h3 class="w3-xxlarge w3-serif">“Once a year go some place you've never been before”</h3>
    <p>― Dalai Lama</p>
   </div>
 </div>
   <div class="item">
     <img src="public/images/pic4.jpg" alt="" style="width:100%;height: 500px;">
   <div class="carousel-caption">
  <h3 class="w3-xxlarge w3-serif">“Never make a permanent decision about a temporary situation.”</h3>
  <p>― Bishop T.D. Jakes</p> </div>
 </div>

 <!-- Left and right controls -->
 <a class="left carousel-control" href="#myCarousel" data-slide="prev">
   <span class="glyphicon glyphicon-chevron-left"></span>
   <span class="sr-only">Previous</span>
 </a>
 <a class="right carousel-control" href="#myCarousel" data-slide="next">
   <span class="glyphicon glyphicon-chevron-right"></span>
   <span class="sr-only">Next</span>
 </a>
</div>
</section>
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
