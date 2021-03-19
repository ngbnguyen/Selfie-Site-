<?php
include APPROOT . "/views/inc/header.php";

 ?>
 <div class="container">

<section class="timeline pad"id="edu">
  <div class="main_title">
      <h2>Education</h2>
  </div>
<ul>
  <li>
    <div class="Edu">
      <time>2011-2015</time> SAI GON EXPERIMENTAL HIGH SCHOOL <br> -	GPA: 8.2/10 <br>
        -	Study at Saigon Experimental High School <br>
        -	Participate in most of volunteer activities at school
    </div>
  </li>
  <li>
    <div class="Edu">
      <time>2015-2018</time> SAI GON EXPERIMENTAL HIGH SCHOOL <br> -	GPA: 8.6/10 <br>
        -	Be a monitor and Secretary Of Ho Chi Minh Communist Youth Union Of Sai Gon Experimental High School <br>
        -	Participate in most of volunteer activities at school
    </div>
  </li>
  <li>
    <div  class="Edu">
      <time>2018-now</time> UNIVERSITY OF SCIENCES <br>-	Participate in ITEC International Program <br>
    -	Major: Information Technology <br>
    -	GPA: 3.97/4.0 <br>

    </div>
  </li>
  <li>
    <div  class="Edu">
      <time>4/2019 - 12/2019 </time> VUS English Center<br>-	Be a Teacher's AIDE at VUS English Center <br>
    -	Lorem ipsum dolor sit amet, consectetur adipiscing elit <br>
    -	Lorem ipsum dolor sit amet, consectetur adipiscing elit<br>

    </div>
  </li>
</ul>
</section>
</div>
<script>
(function() {

'use strict';

// define variables
var items = document.querySelectorAll(".timeline li");

// check if an element is in viewport
// http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
function isElementInViewport(el) {
  var rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

function callbackFunc() {
  for (var i = 0; i < items.length; i++) {
    if (isElementInViewport(items[i])) {
      items[i].classList.add("in-view");
    }
  }
}

// listen for events
window.addEventListener("load", callbackFunc);
window.addEventListener("resize", callbackFunc);
window.addEventListener("scroll", callbackFunc);

})();
</script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-46156385-1', 'cssscript.com');
ga('send', 'pageview');

</script>
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
