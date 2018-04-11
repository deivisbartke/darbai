<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
    header('Location: index.php');
}

require_once('head.php');
include_once('main.php');
include_once('gallery.php');
include_once('whatwedo.php');
include_once('service.php');
include_once('reviews.php');
include('contacts.php');
include_once('footer.php');
 ?>
