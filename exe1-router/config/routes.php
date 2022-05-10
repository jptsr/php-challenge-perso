<?php
    // manière de récupérer l'url, chemin vers la page, nom de la page (contact.php), nom de notre root
    $rooter -> map('GET', '/', 'home');
    $rooter -> map ('GET', '/nous-contacter', 'contact', 'contact');
    $rooter -> map ('GET', '/blog/[*:slug]-[i:id]', 'blog/article', 'article');
    $match = $rooter->match();
?>