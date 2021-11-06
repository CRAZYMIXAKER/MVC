<H1>indexArticle</H1>
<?php foreach ($articles as $article) :
?>
	<div>
		<strong><?= $article['title'] ?></strong>
		<em><?= $article['dt_add'] ?></em>
		<div> <?= $article['content'] ?> </div>
		<a href="index.php?c=article&id=<?= $article['id_article'] ?>"> Read more </a>
		<hr>
	</div>
<? endforeach; ?>