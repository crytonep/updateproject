<?php
include('conn.php');
include('inc/header.php');
?>
<!-- App Capsule -->
<div class="container" id="appCapsule">
    <hr>
    <div class="appSeccion" id="proximosSeccion">
        <?php include ('inc/proximos.php') ?>
    </div>
    <div class="appSeccion" id="inicioSeccion">
        <?php include ('inc/inicio.php') ?>
    </div>
</div>
<!-- * App Capsule -->

<?php include('inc/navbar.php'); ?>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>