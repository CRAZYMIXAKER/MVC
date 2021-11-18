<div class="">
	<div class="">Добавление статьи</div>
	<form class="form" method="POST">
		<div class="form__item">
			<select name="id_category">
				<?php foreach ($categories as $category) : ?>
					<option value="<?= $category['id_category'] ?>"><?= $category['name_category'] ?></option>
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
		<button>Add article</button>
	</form>
</div>