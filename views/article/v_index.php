<H1>Articles</H1>
<a href="<?= BASE_URL ?>article/add">Add</a></br></br>
<?php foreach ($articles as $article) : ?>
	<div>
		<strong><?= $article['title'] ?></strong>
		<em><?= $article['dt_add'] ?></em>
		<div> <?= $article['content'] ?> </div>
		<a href="<?= BASE_URL ?>article/article/<?= $article['id_article'] ?>"> Read more </a>
		<hr>
	</div>
<? endforeach; ?>