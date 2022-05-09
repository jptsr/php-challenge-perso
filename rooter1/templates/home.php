<h1>My homepage</h1>

<!-- via nom de root -->
<a href="<?= $rooter -> generate( 'contact' ) ?>">Nous contacter</a>
<a href="<?= $rooter -> generate( 'article', ['id' => 60, 'slug' => 'importe-quoi'] ) ?>">Voir article</a>

<!-- fonction de bufferisation de sortie -->
<?php ob_start(); ?>
<script>alert('Salut')</script>
<?php $pageJavascript = ob_get_clean(); ?>