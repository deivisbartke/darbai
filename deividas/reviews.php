
<?php
include('reviewchekas.php')
?>

<div class="container">
    <div class="row mt-5 ">
        <div class="col">
            <h3 class="rew">Reviews</h3>
        </div>
    </div>
    <div class="row">

        <div class="col-4"></div>
        <div class="col-4">
            <img class="img-fluid" src="www/picture31.png" alt="">
        </div>
        <div class="col-4"></div>
    </div>

    <div class="row">
        <div class="col-12">

            <form id='com' class="" action="index.php#com" method="post">

                <textarea name="review" rows="8" cols="151" placeholder="Text" required></textarea>

                <input type="text" name="name" value="" placeholder="Name" required>

                <button type="submit" name="button-send" class="btn btn-outline-secondary">SEND</button>
            </form>
            <br>
            <br>
            <?php
  $mySql = "SELECT * FROM komentarai  ORDER BY  id ASC LIMIT 5 ";
    $result = mysqli_query($connection, $mySql);

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

    ?>

                <div class="single-comment mt-5">
                    <label><?php echo $row['date'] ?></label>
                    <label><?php echo $row["name"]  ?></label>
                    <p>
                        <?php echo $row['tekstas'] ?>
                    </p>
                    <button type="submit" name="button-delete" class="button-delete" id="<?php echo $row['id']?>">Delete</button>
                    <br>
                </div>
                <?php
    }
?>

        </div>

    </div>

</div>

</div>
