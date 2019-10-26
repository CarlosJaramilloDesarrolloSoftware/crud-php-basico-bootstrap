<?php
    if(isset($_SESSION["alert"])){
        ?>
        <div class="alert alert-<?= $_SESSION["alert"]["tipo"] ?>" role="alert">
            <?= $_SESSION["alert"]["mensaje"] ?>
        </div>
        <?php
        unset($_SESSION["alert"]);
    }
?>