<div class="container">
    <div id='co' class="row mt-5">
        <div class="col">
            <h3 class="contus">Contact us</h3>
        </div>
    </div>

    <div class="wrapper">
        <main class="mano-float">
            <article class="kontaktai">
                <p>We are here to answer any questions you may have about our 321Action company. Reach out to us and we'll respond as soons as we can.</p>
            </article>

            <article class="kontaktai">
                <p> Even if there something you have always want to experience and can't find it on our page, let us know and we promise we'll do our best to make it for you.</p>
            </article>

            <img src="www/picture16.png" alt="" widht="100" height="100">
            <a href="#">
              <label> +370 655 439</label>
                </a>
                  <br>
                    <img src="www/picture17.png" alt="" widht="100" height="100">
                      <a href="#">
                          <label> web.321ACTION@gmail.com</label>
                            </a>
        </main>



        <aside class="mano-float">

            <form class="" action="email-siuntimas.php#ema" method="post">

                <label>Email</label>
                <input type="email" name="pastas" value="" placeholder="Email" required>
                <label> Name </label>
                <input type="text" name="vardas" value="" placeholder="Name">

                <label> Message </label>
                <textarea name="klausimas" rows="8" cols="35"></textarea>
                <br>

                <button type="send" class="btn btn-outline-secondary">SEND</button>

            </form>


        </aside>
        <!--isjungiam float  -->
        <div class="fix-float"> </div>

    </div>
</div>
<!-- end -->

<h3 class="wearehere mt-5">We are here</h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2293.9805582925833!2d23.893874115710663!3d54.90326346465569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e7220840b20da7%3A0xad5d8741fccab532!2sJonavos+g.+15%2C+Kaunas+44192!5e0!3m2!1slt!2slt!4v1522503758817"
    width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>



<div class="container mb-5 mt-5">
    <h3 id="ema" class="followus">Follow us!</h3>
    <div class="row">
        <?php
$mySql  = "SELECT * FROM nuotraukos";
$result = mysqli_query($connection, $mySql);


// output data of each row
while ($row = mysqli_fetch_assoc($result)) {
?>

            <div class="followus col-2">
                <a href="#">
                  <img src="www/<?php
                  echo $row['picturename'];
                    ?>.png" alt="" width="100" height="100">
                      </a>
                  </div>

<?php
}
?>


    </div>
</div>
