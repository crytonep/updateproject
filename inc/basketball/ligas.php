<div class="container section mt-2">
    <div class="row">
        <?php
        $ligas = mysqli_query($conn, "select * from ligas");
        while ($result = mysqli_fetch_assoc($ligas)) {
            $index = $result['ligaId'];
            $liga = $result['ligaName'];
            $img = $result['ligaImg'];
            $counter_query = mysqli_query($conn,"select * from agenda where liga = $index");
            $counter=mysqli_num_rows($counter_query);
            if ($counter === 0){
                $visibility = "hidden";
            } elseif ($counter >= 1) {
                $visibility = "show";
            }
        ?>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 <?=$visibility?>">
                <a href="?id=<?= $index ?>">
                    <div class="card">
                        <div class="card-body">
                            <center>
                                <img width="48px" src="../../assets/img/<?=$img?>" class="image" alt="<?=$liga?>">
                                <h2 class="title text-center">
                                    <?=$liga?>
                                </h2>
                            </center>
                        </div>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
</div>