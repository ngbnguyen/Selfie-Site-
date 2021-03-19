<?php
include APPROOT . "/views/inc/header.php";

 ?>
 <div class="container">

   <section id="blog">
         <div class="main_title">
             <h2>Blog</h2>
         </div>

       <div class="row">
         <ul>

         <?php
         foreach($data['posts'] as $post): ?>
         <div class="col-md-4 card " style="width: 18rem; height:22rem; border-style: line;">
           <img src="images/<?php echo $post['post_image']; ?>" alt="">
           <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post['id']; ?>"><h2 class="card-title"><?php echo $post['post_title']; ?></h2></a>
           <h4 class="card-subtitle mb-2 text-muted"><?php echo $post['post_date']; ?></h4>
           <p class="card-text"><?php echo substr($post['post_body'], 0, 155); ?>...</p>
           <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post['id']; ?>"><button class="btn btn-primary">Read More </button></a>
         </div>
       <?php endforeach ?>
         </ul>

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
