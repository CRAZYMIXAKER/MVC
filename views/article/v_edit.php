<h1>Edit</h1>
<form class="form" method="POST">
	<div class="form__item">
		<input type="text" name="title" value="<?= $fields['title'] ?>">
		<div class="error"><?= $articleValidate['title'] ?></div>
	</div></br>
	<div class="form__item">
		<textarea name="content"><?= $fields['content'] ?></textarea>
		<div class="error"><?= $articleValidate['content'] ?></div>
	</div>
	<div class="error"><?= $articleValidate['general'] ?></div></br>
	<button>Edit article</button>
</form>
<a href="index.php?f=article&c=index">Back</a>