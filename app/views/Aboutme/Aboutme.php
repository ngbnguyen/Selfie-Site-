<?php
include APPROOT . "/views/inc/header.php";

 ?>
<div class="container">
    <section class="about_person_area pad" id="about">
      <div class="main_title">
          <h2>About me </h2>
      </div>
        <div class="row">
                    <div class="col-md-4">
                        <div class="person_img">
                            <img src="public/images/ava.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row person_details">
                            <p>My name is <span>Nguyen Bao Nguyen</span>. I'm 20 years old. I'm currently a sophomore at Ho Chi Minh University of Sciences in Ho Chi Minh City, Vietnam, where I'm participating in ITEC international program focus on Information Technology. I already have had an IELTS Degree and I’m also learning Chinese. I want to be a good web developer in the future, although I know it won't be easy, I will try my best.</p>
                                <div class="person_information">
                                    <ul>
                                        <li><a href="#">Nationality</a></li>
                                        <li><a href="#">Address</a></li>
                                        <li><a href="#">Phone</a></li>
                                        <li><a href="#">Email</a></li>
                                        <li><a href="#">Student ID</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#">Citizen of Vietnam</a></li>
                                        <li><a href="#">District 8, HoChiMinh City, Vietnam</a></li>
                                        <li><a href="#">+84 090 335 9475</a></li>
                                        <li><a href="#">1859035@itec.hcmus.edu.vn</a></li>
                                        <li><a href="#">1859035</a></li>
                                    </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
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
</div>
    <?php
            include APPROOT . "/views/inc/footer.php";
             ?>
