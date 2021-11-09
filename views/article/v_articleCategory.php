<H1><?= $name_category ?></H1>
<a href="index.php?f=article&c=index">Index</a></br></br>
<?php foreach ($articles as $article) : ?>
	<div>
		<strong><?= $article['title'] ?></strong>
		<em><?= $article['dt_add'] ?></em>
		<div> <?= $article['content'] ?> </div>
		<a href="index.php?f=article&c=article&id=<?= $article['id_article'] ?>"> Read more </a>
		<hr>
	</div>
<? endforeach; ?>