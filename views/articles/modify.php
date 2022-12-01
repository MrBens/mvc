<form action="/articles/update/<?= $article['slug'] ?>" method="post">
    <input type="text" name="title">
    <textarea name="content" cols="30" rows="10"></textarea>
    <input type="submit" value="Submit">
</form>