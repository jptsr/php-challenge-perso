<?php
    $aDeviner = 150;
    $error = null;
    $succes = null;
    $value = null;

    if (isset($_POST['chiffre'])) {
        $value = (int)$_POST['chiffre'];

        if ($value > $aDeviner) {
            $error = 'Votre chiffre est trop grand !';
        } else if ($value < $aDeviner) {
            $error = 'Votre chiffre est trop petit !';
        } else {
            $succes = 'Bravo vous avez devinez le chiffre !';
        }
    }

    // require 'header.php';
?>

<?php
    require_once 'functions.php';

    // checkbox (pls choix)
    $parfums = [
        'Fraise' => 4,
        'Chocolat' => 5,
        'Vanille' => 3
    ];

    // radio (1 seul choix)
    $cornets = [
        'Pot' => 2,
        'Cornet' => 3
    ];

    // checkbox (pls choix)
    $supplements = [
        'Pépites de chocolat' => 1,
        'Chantilly' => 0.5
    ];

    $title = "Composer votre glace";
    $ingredients = [];
    $total = 0;

    if (isset($_GET['parfum'])) {
        foreach ($_GET['parfum'] as $parfum) {
            if (isset($parfums[$parfum])) {
                $ingredients[] = $parfum;
                $total += $parfums[$parfum];
            }
        }
    }
    
    if (isset($_GET['cornet'])) {
        $cornet = $_GET['cornet']; 

        if (isset($cornets[$cornet])) {
            $ingredients[] = $cornet;
            $total += $cornets[$cornet];
        }
    }

    if (isset($_GET['supplement'])) {
        foreach ($_GET['supplement'] as $supplement) {
            if (isset($supplements[$supplement])) {
                $ingredients[] = $supplement;
                $total += $supplements[$supplement];
            }
        }
    }

    require 'header.php';
?>

<?php if ($error) : ?>
    <div class="alert alert-danger">
        <?= $error; ?>
    </div>
<?php elseif ($succes) : ?>
    <div class="alert alert-danger">
        <?= $succes; ?>
    </div>
<?php endif ?>

<form action="/jeu.php" method="POST">
    <input type="number" name="chiffre" placeholder="entre 0 et 1000" value="<?= $value; ?>">
    <input type="text" name="demo">
    <button type="submit">Deviner</button>
</form>

<div>
    <p>------------------------</p>
    <p><strong>LOOOOOOOOL</strong></p>
    <p>------------------------</p>
</div>

<h2>Composer votre glace :</h2>

<form action="/jeu.php" method="GET">
    <h3>Choisissez vos parfums</h3>
    <?php foreach ( $parfums as $parfum => $prix) : ?>
        <div class="checkbox">
            <label>
                <?= checkbox('parfum', $parfum, $_GET); ?>
                <?= $parfum ?> - <?= $prix?> €
            </label>
        </div>
    <?php endforeach; ?>

    <h3>Choisissez votre cornet</h3>
    <?php foreach ( $cornets as $cornet => $prix) : ?>
        <div class="checkbox">
            <label>
                <?= radio('cornet', $cornet, $_GET); ?>
                <?= $cornet ?> - <?= $prix?> €
            </label>
        </div>
    <?php endforeach; ?>

    <h3>Choisissez vos suppléments</h3>
    <?php foreach ( $supplements as $supplement => $prix) : ?>
        <div class="checkbox">
            <label>
                <?= checkbox('supplement', $supplement, $_GET); ?>
                <?= $supplement ?> - <?= $prix ?> €
            </label>
        </div>
    <?php endforeach; ?>

    <button type="submit">Composer ma glace</button>
</form>

<div>
    <h3>Votre glace</h3>

    <ul>
        <?php foreach ($ingredients as $ingredient) : ?>
            <li><?= $ingredient ?></li>
        <?php endforeach ?>
    </ul>

    <p>Prix : <strong><?= $total ?></strong></p>
</div>

<!-- <h2>$_GET</h2>
<pre>
        <?php //var_dump($_GET); ?>
</pre>

<h2>$_POST</h2>
<pre>
        <?php //var_dump($_POST); ?>
</pre> -->

<?php require 'footer.php'; ?>