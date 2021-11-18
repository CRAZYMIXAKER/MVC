<div class="page">
	<div class="page__title">Добавление статьи</div>

	<form class="form" method="POST">

		<div class="form__item">
			<select class="select" name="id_category">
				<option class="select__option" disabled selected>Категории</option>
				<?php foreach ($categories as $category) : ?>
					<option class="select__option" value="<?= $category['id_category'] ?>"><?= $category['name_category'] ?></option>
				<? endforeach; ?>
			</select>
			<div class="error"><?= $articleValidate['category'] ?></div>
		</div>

		<div class="form__item">
			<input class="form__input" type="text" name="title" value="<?= $fields['title'] ?>" required />
			<span class="form__span"></span>
			<label class="form__label">Заголовок</label>
			<div class="error"><?= $articleValidate['title'] ?></div>
		</div>

		<div class="form__item">
			<input class="form__input" type="text" name="content" value="<?= $fields['content'] ?>" required />
			<span class="form__span"></span>
			<label class="form__label">Текст</label>
			<div class="error"><?= $articleValidate['content'] ?></div>
		</div>

		<div class="error"><?= $articleValidate['general'] ?></div>

		<button class="form__button">Добавить статью</button>
	</form>

</div>