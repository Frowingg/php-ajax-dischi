<?php
    foreach($database as $allCd => $infoCd) { ?>

        <div class="card">
            <img src=" <?php echo $infoCd['poster'] ?> " alt="">
            <h2> <?php echo $infoCd['title'] ?> </h2>
            <h4> <?php echo $infoCd['author'] ?> </h4>
            <h5> <?php echo $infoCd['year'] ?></h5>
        </div>

<?php } ?>
