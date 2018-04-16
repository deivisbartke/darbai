<?php
require_once('head.php');
require_once('footer.php');
 ?>

<?php include_once('meniu.php'); ?>

<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

 <script type="text/javascript">
var i = 0; 			// start pointas
var images = [];	// gifu masyvas
var time = 3000;	//  kas kiek laiko keisti 3s

// gifu listas
images[0] = "foto/gif1.gif";
images[1] = "foto/gif2.gif";


// keicia gifus
function changeImg(){
	document.slide.src = images[i];

	// Chekina ar indexa
	if(i < images.length - 1){
	  // prideda vis po viena
	  i++;
	} else {
		// resetina iki 0
		i = 0;
	}

	// paleidzia kas 3s
	setTimeout("changeImg()", time);
}

//paleidzia visa funcika kada uzsikrauna pagas
window.onload=changeImg;
</script>
<!-- tekstas -->

  <div class="container1">
        <h3 class="slides">I Love it!, John</h3>
          <h3 class="slides">Best watch ever!, Tom</h3>
    </div>

<script type="text/javascript">
$(document).ready(function(){

$(function(){

  $('.container1 .slides:gt(0)').hide();
  setInterval(function(){
    $('.container1 :first-child').fadeOut(1).next('.slides').fadeIn(1)
    .end().appendTo('.container1');
}, 3000);

});

});
</script>

    <div class="container">
        <div class="row">
          <div class="col-12">
            <img class="rounded-circle" name="slide" width="900" height="500">
          </div>
        </div>
      </div>
