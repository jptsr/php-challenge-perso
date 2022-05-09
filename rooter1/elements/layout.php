<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="<?= $pageDescription ?? '' ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $pageTile ?? 'Mon site' ?></title>
    </head>

    <body>
        <div class="container">
            <?= $pageContent ?>
        </div>

        <!-- charger une page javascript, si elle n'existe pas, ne rien charger -->
        <?= $pageJavascript ?? '' ?>
    </body>
</html>