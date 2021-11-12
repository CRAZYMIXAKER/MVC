<h1>Edit</h1>
<form class="form" method="POST">
	<div class="form__item">
		<select name="id_category">
			<?php foreach ($categories as $category) : ?>
				<?php if ($fields['id_category'] === $category['id_category']) : ?>
					<option selected value="<?= $category['id_category'] ?>"><?= $category['name_category'] ?></option>
				<?php else : ?>
					<option value="<?= $category['id_category'] ?>"><?= $category['name_category'] ?></option>
				<? endif; ?>
			<? endforeach; ?>
		</select>
	</div></br>
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
<a href="<?= BASE_URL ?>">Index</a>