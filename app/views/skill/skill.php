<?php
include APPROOT . "/views/inc/header.php";

 ?>
 <div class="container">
<section class="myskill_area pad" id="skill">
      <div class="main_title">
          <h2>My Skill</h2>
      </div>
      <br><br><br>
      <div class="row">
          <div class="col-md-6 wow fadeInUp animated">
              <div class="skill_item_inner">
                  <div class="single_skill">
                      <h4> Microsoft Office </h4>
                      <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"  style="width:80%">
                              <div class="progress_parcent"><span class="counter">80</span>%</div>
                          </div>
                      </div>
                  </div>
                  <div class="single_skill">
                      <h4>Communication Skills</h4>
                      <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"  style="width:65%">
                              <div class="progress_parcent"><span class="counter">65</span>%</div>
                          </div>
                      </div>
                  </div>
                  <div class="single_skill">
                      <h4>International English</h4>
                      <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"  style="width:70%">
                              <div class="progress_parcent"><span class="counter">70</span>%</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-6 wow fadeInUp animated">
              <div class="skill_item_inner">
                  <div class="single_skill">
                      <h4> HTML</h4>
                      <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"  style="width:50%">
                              <div class="progress_parcent"><span class="counter">50</span>%</div>
                          </div>
                      </div>
                  </div>
                  <div class="single_skill">
                      <h4>CSS</h4>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"  style="width:50%">
                            <div class="progress_parcent"><span class="counter">50</span>%</div>
                          </div>
                      </div>
                  </div>
                  <div class="single_skill">
                      <h4>JavaScript</h4>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"  style="width:50%">
                            <div class="progress_parcent"><span class="counter">50</span>%</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <br><br><br><br><br><br>
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
