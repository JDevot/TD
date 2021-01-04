<h1>Bienvenue sur la BLOG</h1>
<?php foreach($articles as $key => $article){ ?>
<article>
    <h2><?= $article['titre'] ?></h2>
</article>
<?php } ?>