<h2><a href="/articles/write">Ecrire un article</a></h2>
<?php foreach($articles as $article): ?>

<h2><a href="/articles/read/<?= $article['slug'] ?>"><?= $article['title'] ?></a></h2>
<p><?= $article['content'] ?></p>
<p><?= $article['user']?></p>

<?php endforeach ?>