<?php
$id = $_GET['id'];
$ligas = mysqli_query($conn, "select * from agenda
INNER JOIN ligas ON agenda.liga = ligas.ligaId
where liga = '$id' and status=1");
$result = mysqli_fetch_assoc($ligas);
$liga = $result['ligaName'];
?>
<hr>
<div class="section-heading padding">
    <h2 class="title"><?= $liga ?></h2>
    <a href="<?= $app ?>futbol" class="link">Ver Todo</a>
</div>

<div class="container">
    <div class="row">
    <?php
    while ($result = mysqli_fetch_assoc($ligas)) {
        $index = $result['id'];
        $local = $result['local'];
        $visita = $result['visita'];
        $fecha = $result['fecha'];
        include('teams.php');
    ?>

        <!-- Elemento -->
        <div class="col-12 mycard">
            <a data-toggle="collapse" href="#juego<?= $result['id'] ?>" role="button" aria-expanded="<?= $aria ?>" aria-controls="juego<?= $result['id'] ?>">
                <div class="card product-card">
                    <div class="main-event">
                        <div class="league">
                            <img src="../../../../img/ligas/<?= $result['ligaImg'] ?>.png" alt="League" />
                            <!-- <p class="<?= $result['id'] ?>"><?= ucfirst($dia) ?></p> -->
                            <p class="cntdwn-<?= $index ?>"></p>
                        </div>
                        <div class="match">
                            <div class="team">
                                <img width="60px" src="../../../../img/equipos/<?= strtolower($result['ligaImg']) ?>/<?= str_replace(' ', '', strtolower($result['local'])); ?>.png" alt="" />
                                <h4><?= ucfirst($local) ?></h4>
                            </div>
                            <div <?= $isEventoHidden ?> class="vs">
                                <h6>vs</h6>
                            </div>
                            <div <?= $isEventoHidden ?> class="team">
                                <img width="60px" src="../../../../img/equipos/<?= strtolower($result['ligaImg']) ?>/<?= str_replace(' ', '', strtolower($result['visita'])); ?>.png" alt="" />
                                <h4><?= ucfirst($visita) ?></h4>
                            </div>
                        </div>
                        <div class="channel">
                            <img src="../../../../img/canales/<?= ($canalImg === null) ? "152x152" : $canalImg ?>.png" alt="" />
                        </div>
                    </div>
                </div>
            </a>
            <div class="collapse <?= $collapse ?>" id="juego<?= $result['id'] ?>">
                <div class="card card-body">
                    <ul class="listview image-listview text">
                        <?php
                        // Custom Channels
                        echo $custom1;
                        echo $custom2;
                        echo $custom3;
                        // Canal 1
                        $canal = $result['canal'];
                        $c = mysqli_query($conn, "select * from channels where channelId = '$canal'");
                        $row = mysqli_fetch_array($c);
                        if ($canal === null || $canal === "") {
                            // No mostramos nada
                        } else {
                        ?>
                            <li>
                                <a class="justify-content-center item" href="../../../tv/epg/?futbol&id=<?= $index ?>&c=<?= $row['channelId'] ?>">
                                    <i class="flag <?= $row['countryImg'] ?>"></i>
                                    <?= $row['channelName'] ?>
                                </a>
                            </li>
                        <?php } ?>

                        <?php
                        // Canal 2
                        $canal2 = $result['canal2'];
                        $c2 = mysqli_query($conn, "select * from channels where channelId = '$canal2'");
                        $row = mysqli_fetch_array($c2);
                        if ($canal2 === null || $canal2 === "") {
                            // No mostramos nada
                        } else {
                        ?>
                            <li>
                                <a class="justify-content-center item" href="../../../tv/epg/?futbol&id=<?= $index ?>&c=<?= $row['channelId'] ?>">
                                    <i class="flag <?= $row['countryImg'] ?>"></i>
                                    <?= $row['channelName'] ?>
                                </a>
                            </li>
                        <?php } ?>

                        <?php
                        // Canal 3
                        $canal3 = $result['canal3'];
                        $c3 = mysqli_query($conn, "select * from channels where channelId = '$canal3'");
                        $row = mysqli_fetch_array($c3);
                        if ($canal3 === null || $canal3 === "") {
                            // No mostramos nada
                        } else {
                        ?>
                            <li>
                                <a class="justify-content-center item" href="../../../tv/epg/?futbol&id=<?= $index ?>&c=<?= $row['channelId'] ?>">
                                    <i class="flag <?= $row['countryImg'] ?>"></i>
                                    <?= $row['channelName'] ?>
                                </a>
                            </li>
                        <?php } ?>

                        <?php
                        // Canal 4
                        $canal4 = $result['canal4'];
                        $c4 = mysqli_query($conn, "select * from channels where channelId = '$canal4'");
                        $row = mysqli_fetch_array($c4);
                        if ($canal4 === null || $canal4 === "") {
                            // No mostramos nada
                        } else {
                        ?>
                            <li>
                                <a class="justify-content-center item" href="../../../tv/epg/?futbol&id=<?= $index ?>&c=<?= $row['channelId'] ?>">
                                    <i class="flag <?= $row['countryImg'] ?>"></i>
                                    <?= $row['channelName'] ?>
                                </a>
                            </li>
                        <?php } ?>

                        <?php
                        // Canal 5
                        $canal5 = $result['canal5'];
                        $c5 = mysqli_query($conn, "select * from channels where channelId = '$canal5'");
                        $row = mysqli_fetch_array($c5);
                        if ($canal5 === null || $canal5 === "") {
                            // No mostramos nada
                        } else {
                        ?>
                            <li>
                                <a class="justify-content-center item" href="../../../tv/epg/?futbol&id=<?= $index ?>&c=<?= $row['channelId'] ?>">
                                    <i class="flag <?= $row['countryImg'] ?>"></i>
                                    <?= $row['channelName'] ?>
                                </a>
                            </li>
                        <?php } ?>

                        <?php
                        // Canal 6
                        $canal6 = $result['canal6'];
                        $c6 = mysqli_query($conn, "select * from channels where channelId = '$canal6'");
                        $row = mysqli_fetch_array($c6);
                        if ($canal6 === null || $canal6 === "") {
                            // No mostramos nada
                        } else {
                        ?>
                            <li>
                                <a class="justify-content-center item" href="../../../tv/epg/?futbol&id=<?= $index ?>&c=<?= $row['channelId'] ?>">
                                    <i class="flag <?= $row['countryImg'] ?>"></i>
                                    <?= $row['channelName'] ?>
                                </a>
                            </li>
                        <?php } ?>

                        <?php
                        // Canal 7
                        $canal7 = $result['canal7'];
                        $c7 = mysqli_query($conn, "select * from channels where channelId = '$canal7'");
                        $row = mysqli_fetch_array($c7);
                        if ($canal7 === null || $canal7 === "") {
                            // No mostramos nada
                        } else {
                        ?>
                            <li>
                                <a class="justify-content-center item" href="../../../tv/epg/?futbol&id=<?= $index ?>&c=<?= $row['channelId'] ?>">
                                    <i class="flag <?= $row['countryImg'] ?>"></i>
                                    <?= $row['channelName'] ?>
                                </a>
                            </li>
                        <?php } ?>

                        <?php
                        // Canal 7
                        $canal8 = $result['canal8'];
                        $c8 = mysqli_query($conn, "select * from channels where channelId = '$canal8'");
                        $row = mysqli_fetch_array($c8);
                        if ($canal8 === null || $canal8 === "") {
                            // No mostramos nada
                        } else {
                        ?>
                            <li>
                                <a class="justify-content-center item" href="../../../tv/epg/?futbol&id=<?= $index ?>&c=<?= $row['channelId'] ?>">
                                    <i class="flag <?= $row['countryImg'] ?>"></i>
                                    <?= $row['channelName'] ?>
                                </a>
                            </li>
                        <?php } ?>

                        <?php
                        // Canal 9
                        $canal9 = $result['canal9'];
                        $c9 = mysqli_query($conn, "select * from channels where channelId = '$canal9'");
                        $row = mysqli_fetch_array($c9);
                        if ($canal9 === null || $canal9 === "") {
                            // No mostramos nada
                        } else {
                        ?>
                            <li>
                                <a class="justify-content-center item" href="../../../tv/epg/?futbol&id=<?= $index ?>&c=<?= $row['channelId'] ?>">
                                    <i class="flag <?= $row['countryImg'] ?>"></i>
                                    <?= $row['channelName'] ?>
                                </a>
                            </li>
                        <?php } ?>

                        <?php
                        // Canal 10
                        $canal10 = $result['canal10'];
                        $c10 = mysqli_query($conn, "select * from channels where channelId = '$canal10'");
                        $row = mysqli_fetch_array($c10);
                        if ($canal10 === null || $canal10 === "") {
                            // No mostramos nada
                        } else {
                        ?>
                            <li>
                                <a class="justify-content-center item" href="../../../tv/epg/?futbol&id=<?= $index ?>&c=<?= $row['channelId'] ?>">
                                    <i class="flag <?= $row['countryImg'] ?>"></i>
                                    <?= $row['channelName'] ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Elemento -->

    <?php } ?>
    </div>
</div>