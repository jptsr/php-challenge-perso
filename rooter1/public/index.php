<?php
    require '../vendor/autoload.php';
    
    $uri = $_SERVER['REQUEST_URI'];
    
    $rooter = new AltoRouter();

    require '../config/routes.php';
    
    // détermine quelle page afficher 
    if ( is_array($match) ) {
        if ( is_callable($match['target']) ) {
            call_user_func_array( $match['target'], $match['params'] );
        } else {
            $params = $match['params'];
            // enclanche la temporistaion de sortie = tu arrêtes d'afficher et tu gardes en mémoire tampon (prends en compte php et html) (limité)
            // fonction de bufferisation de sortie
            ob_start();
            require "../templates/{$match['target']}.php";
            // lit le contenu courant du tampon de sortie puis les efface
            $pageContent = ob_get_clean();
        }
        require '../elements/layout.php';
    } else {
        echo '404';
    }
?>