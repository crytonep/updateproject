<?php include('../conn.php'); include('../inc/header.php'); include('../inc/functions.php'); ?>
<div class="container" id="appCapsule">
    <?php
    if (isset($_GET['id'])){
        include('../inc/futbol/juegos.php');
    } else {
        include('../inc/futbol/ligas.php');
    }
    ?>
</div>
<?php include('../inc/navbar.php'); ?>