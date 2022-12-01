<h2><?= $article['title'] ?></h2>
<p><?= $article['content'] ?></p>
<p><?= $article['autor'] ?></p>
<a href="/articles/delete/<?= $article['id'] ?>">Supprimer</a>
<a href="/articles/modify/<?= $article['slug'] ?>">Modifier</a>