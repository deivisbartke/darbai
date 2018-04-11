

<?php

include_once('connection.php')
?>
<body>


  <div id="ho">

  </div>
  <div id="demo" class="carousel slide" data-ride="carousel">

      <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
      </ul>

      <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="www/picture1.jpeg" alt="slide1">
              <div class="carousel-caption">
                  <div class="klase">
                      <link href="https://fonts.googleapis.com/css?family=Coda+Caption:800" rel="stylesheet">


                      <h1>321&Action</h1>

                  </div>
              </div>
          </div>

          <div class="carousel-item ">
              <img src="www/picture2.jpeg" alt="slide2">
              <div class="carousel-caption">
                  <div class="klase2">
                      <h2>Best video & photography continent company</h2>
                  </div>
              </div>
          </div>

          <div class="carousel-item">
              <img src="www/picture3.jpeg" alt="slide3">
          </div>
      </div>


  </div>

  <!-- meniu -->
  <div class="container-fluid">
      <nav>
          <img src="www/picture4.png" alt="logo" width="200" height="80">
          <ul>
              <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
              <!-- <li><a  href="#ho"> Home </a> </li>
    <li><a  href="#ab"> About </a> </li>
    <li><a  href="#ga"> Gallery </a> </li>
    <li><a  href="#se"> Service & Price </a> </li>
    <li><a  href="#co"> Contacts </a> </li> -->
              <?php
  $mySql = "SELECT * FROM meniu ORDER BY eiliskumas ASC";
  $result = mysqli_query($connection, $mySql);
  $count = 0;

  // output data of each row
  while ($row = mysqli_fetch_assoc($result)) {
      $tempArr = array('#ho', '#ab', '#ga', '#se', '#co'); ?>

                  <li>
                      <a href="<?php echo $tempArr[$count]; ?>">
                          <?php echo $row['name']; ?>
                      </a>
                  </li>
                  <?php $count++; ?>
                  <?php
  } ?>
          </ul>
      </nav>
  </div>
  <!-- meniu end  -->



  <!--about us  -->



  <div class="container-fluid">
      <div id='ab' class="row mt-5">
          <div class="col">
              <div class="aboutus">
                  <h2>About us </h2>
              </div>
          </div>
      </div>

      <!-- container end -->

      <div class="backg">
          <div class="container-fluid">

              <div class="row mt-5">
                  <div class="col-4">
                      <img class="img-fluid img-thumbnail" src="www/picture5.jpeg" alt="" width="600">
                  </div>
                  <div class="col-4">

                  </div>
                  <div class="col-4">
                      <img class="img-fluid img-thumbnail" src="www/picture6.jpg" alt="" width="600">
                  </div>
              </div>
              <div class="row">
                  <div class="col-6 offset-3">

                      <link href="https://fonts.googleapis.com/css?family=Aldrich" rel="stylesheet">
                      <p class="customabout">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                  </div>
              </div>

              <div class="row">
                  <div class="col-4">
                      <img class="img-fluid img-thumbnail" src="www/picture7.jpeg" alt="" width="600">
                  </div>
                  <div class="col-4">

                  </div>
                  <div class="col-4">
                      <img class="img-fluid img-thumbnail" src="www/picture8.jpg" alt="" width="600">
                  </div>
              </div>

          </div>
      </div>

      <!-- container end -->

  </div>
