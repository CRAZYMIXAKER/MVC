<h1>Article</h1>
<div>
	<strong><?= $article['title'] ?></strong>

	<em><?= $article['dt_add'] ?></em>
	<div><a href="<?= BASE_URL ?>article/category/<?= $article['id_category'] ?>"> <?= $article['name_category'] ?> </a></div>
	<div> <?= $article['content'] ?> </div></br>
	<a href="<?= BASE_URL ?>article/index"> Index </a></br>
	<a id="delete"> Delete </a></br>
	<a href="<?= BASE_URL ?>article/edit/<?= $article['id_article'] ?>"> Edit </a>
	<hr>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="deleteAlert.js"></script>