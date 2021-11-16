<H1>Articles</H1>
<? if ($articleAdded) : ?>
	<div class="articleAdd">You added article</div>
<? endif; ?>
<? if ($user === null) : ?>
	<a href="<?= BASE_URL ?>auth/login"> login </a></br>
<? else : ?>
	<a href="<?= BASE_URL ?>auth/logout"> logout </a> <label><?= $user['name'] ?></label></br>
<? endif; ?>
<a href="<?= BASE_URL ?>article/add">Add</a></br></br>
<? foreach ($articles as $article) : ?>
	<div>
		<strong><?= $article['title'] ?></strong>
		<em><?= $article['dt_add'] ?></em>
		<div> <?= $article['content'] ?> </div>
		<a href="<?= BASE_URL ?>article/article/<?= $article['id_article'] ?>"> Read more </a>
		<hr>
	</div>
<? endforeach; ?>