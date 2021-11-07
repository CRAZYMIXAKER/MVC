<h1>Article</h1>
<div>
	<strong><?= $article['title'] ?></strong>
	<em><?= $article['dt_add'] ?></em>
	<div> <?= $article['content'] ?> </div>
	<a href="index.php?c=index"> Back </a></br>
	<a href="index.php?c=delete&id=<?= $article['id_article'] ?>"> Delete </a></br>
	<a href="index.php?c=edit&id=<?= $article['id_article'] ?>"> Edit </a>
	<hr>
</div>