<?php
    $title = "Nous contacter";

    require_once 'config.php';
    $creneaux = creneaux_html(CRENEAUX);
    require 'header.php';
?>

<div class="row">
    <div>
        <h2>Nous contacter.</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur earum quia temporibus, nostrum soluta aperiam adipisci ducimus repellendus, itaque possimus asperiores, deleniti nesciunt cum assumenda a fugit in suscipit illum!</p>
    </div>

    <div>
        <?= $creneaux ?>
    </div>
</div>


<?php require 'footer.php' ?>