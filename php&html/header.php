<?php require_once 'functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="exe php">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <title><?php // if (isset($title)) { echo $title; } else { echo 'Mon site'; } ?></title> -->

        <!-- <title>
            <?php // if (isset($title)) { ?>
                <?php // echo $title; ?>
            <?php // } else { ?>
                Mon site
            <?php // } ?>
        </title> -->

        <title>
        <?php if (isset($title)) : ?>
                <?= $title ?>
            <?php else : ?>
                Mon site
            <?php endif ?>
        </title>

        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <nav>
            <ul>
                <?= nav_menu('nav-link'); ?>
            </ul>
        </nav>