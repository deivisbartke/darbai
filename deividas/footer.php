<footer>

    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <img src="www/picture4.png" alt="" height="100" width="250">
            </div>

            <div class="col-3">
                <p> &#9400; 2018 Copyright 321ACTION.com </p>
            </div>

            <div class="col-3">
                <p>Made by DeividasBartkevicius</p>
            </div>



            <div class="col-3">
                <p>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-google"></a>
                    <a href="#" class="fa fa-youtube"></a>

                </p>
            </div>

        </div>
    </div>

</footer>




<!-- bootstrap4 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- !!! jQuery "slim" yra nepilna versija ir jQuery kai kurios komandos neveikia, reiktu isisdeti kita jQuery  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- !!! mano js failas visada zemiausias -->
<script type="text/javascript" src="main.js">
</script>
<!-- scrolin meniu -->
<script type="text/javascript">
    $(window).on('scroll', function() {
      if ($(window).scrollTop()) {
        $('nav').addClass('black');
      } else {
        $('nav').removeClass('black');
      }
    })
</script>

<!-- scriptas galerijos -->
<script type="text/javascript">
    $(function() {
      var selectedClass = "";
      $(".btn-outline-light").click(function(){
      selectedClass = $(this).attr("data-rel");
       $("#portfolio").fadeTo(100, 0.1);
      $("#portfolio div").not("."+selectedClass).fadeOut().removeClass('scale-anm');
      setTimeout(function() {
        $("."+selectedClass).fadeIn().addClass('scale-anm');
        $("#portfolio").fadeTo(300, 1);
      }, 300);

    });
    });
</script>
<!-- end galerijos scriptas -->
<!--  -->
<script type="text/javascript">
    var $root = $('html, body');

    $('a[href^="#"]').click(function () {
        $root.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 500);

        return false;
    });
</script>



<!--  -->

<script>
    $(document).ready(function(){

     // Delete
     $('.button-delete').click(function(){
      var el = this;
      var id = this.id;
    

      // Delete id
         //  var deleteid = splitid[1];
      var deleteid = id;

      // AJAX Request
      $.ajax({
       url: 'delete_review.php',
       type: 'POST',
       data: { 'id': deleteid },
       success: function(response){

        // Removing row from HTML Table
        $(el).closest('.single-comment').css('background','tomato');
        $(el).closest('.single-comment').fadeOut(800, function(){
         $(this).remove();
        });

       }
      });

     });

    });
</script>

<!--  -->
</body>
