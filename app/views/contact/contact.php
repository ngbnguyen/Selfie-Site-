<?php
include APPROOT . "/views/inc/header.php";

 ?>
 <div class="container">


<section class="contact_area pad" id="contact">
  <div class="main_title">
      <h2>Contact</h2>
  </div>
  <div class="row">
                   <div class="col-md-6">
                       <div class="left_contact_details wow fadeInUp animated">
                           <div class="contact_title">
                               <h3>Contact Info</h3>
                           </div>
                           <p style=" font-family: 'Baskervville', cursive;" >Let’s make something awesome together.Drop us a line, or give us a heads up if you’re interested in visiting us.</p>

                           <div class="media">
                               <div class="media-left">
                                   <i class="fa fa-map-marker"></i>
                               </div>
                               <div class="media-body">
                                   <h4>Address</h4>
                                   <p>District 8 , HoChiMinh City, Vietnam</p>
                               </div>
                           </div>
                           <div class="media">
                               <div class="media-left">
                                   <i class="fa fa-phone"></i>
                               </div>
                               <div class="media-body">
                                   <h4>Phone</h4>
                                   <p>+84 090 335 9475</p>
                               </div>
                           </div>
                           <div class="media">
                               <div class="media-left">
                                   <i class="fa fa-envelope-o"></i>
                               </div>
                               <div class="media-body">
                                   <h4>Email</h4>
                                   <p>1859035@itec.hcmus.edu.vn</p>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="contact_from_area wow fadeInUp animated">
                           <div class="contact_title">
                               <h3>Let's Keep In Touch</h3>

                           </div>
                           <div class="row">
                               <form action="contact-process.php" method="post" id="contactForm">
                                   <div class="form-group col-md-12">
                                       <input type="text" class="form-control name" name="name" id="name" placeholder="First Name*">
                                         <p class="help-block name">Let's me know your First Name!</p>
                                   </div>
                                   <div class="form-group col-md-12">
                                       <input type="text" class="form-control last" name="last" id="last" placeholder="Last Name*">
                                         <p class="help-block last">Let's me know your last Name!</p>
                                   </div>
                                   <div class="form-group col-md-12">
                                       <input type="email" class="form-control email" name="email" id="email" placeholder="Your Email*">
                                         <p class="help-block email">Invalid Email!</p>
                                   </div>
                                   <div class="form-group col-md-12">
                                       <input type="text" class="form-control subject" name="subject" id="subject" placeholder="Subject">
                                         <p class="help-block subject">You have a web address, don't you?</p>
                                   </div>
                                   <div class="form-group col-md-12">
                                       <textarea class="form-control message" rows="1" id="message" name="message" placeholder="Write Message"></textarea>
                                         <p class="help-block message">Please type something</p>
                                   </div>
                                   <div class="form-group col-md-12">
                                       <button class="btn btn-default contact_btn" type="submit"><span>Send Massage</span></button>
                                   </div>
                               </form>
                               <div id="success">
                                   <p>Your text message sent successfully!</p>
                               </div>
                               <div id="error">
                                   <p>Sorry! Message not sent. Something went wrong!!</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

<div id="mapBox" class=" m0">
  <br><br><hr>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6374728507544!2d106.68056331480062!3d10.762397792331043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1953a6e961%3A0xc77e334f1510b975!2zxJDhuqFpIGjhu41jIEtob2EgaOG7jWMgVOG7sSBuaGnDqm4!5e0!3m2!1svi!2s!4v1579334395647!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
   <hr>
</div>
</section >
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
