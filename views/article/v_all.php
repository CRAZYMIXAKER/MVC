<div class=""><? if ($articleAdded) : ?>
		<div class="message message_green">You added article</div>
	<? endif; ?>

	<? if ($articleDeleted) : ?>
		<div class="message message_red">You deleted article</div>
	<? endif; ?>

	<? foreach ($articles as $article) : ?>
		<div>
			<strong><?= $article['title'] ?></strong>
			<em><?= $article['dt_add'] ?></em>
			<div> <?= $article['content'] ?> </div>
			<a href="<?= BASE_URL ?>article/article/<?= $article['id_article'] ?>"> Read more </a>
			<hr>
		</div>
	<? endforeach; ?>
</div>