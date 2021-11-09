<h1>Article</h1>
<div>
	<strong><?= $article['title'] ?></strong>

	<em><?= $article['dt_add'] ?></em>
	<div><a href="index.php?f=article&c=category&id=<?= $article['id_category'] ?>"> <?= $article['name_category'] ?> </a></div>
	<div> <?= $article['content'] ?> </div>
	<a href="index.php?f=article&c=index"> Back </a></br>
	<a id="delete"> Delete </a></br>
	<a href="index.php?f=article&c=edit&id=<?= $article['id_article'] ?>"> Edit </a>
	<hr>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="deleteAlert.js"></script>