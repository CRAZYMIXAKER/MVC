<div class="page">
	<div class="page__title">Редактирование статьи</div>

	<form class="form" method="POST">

		<div class="form__item">
			<select class="select" name="id_category">
				<?php foreach ($categories as $category) : ?>
					<?php if ($fields['id_category'] === $category['id_category']) : ?>
						<option class="select__option" selected value="<?= $category['id_category'] ?>"><?= $category['name_category'] ?></option>
					<?php else : ?>
						<option class="select__option" value="<?= $category['id_category'] ?>"><?= $category['name_category'] ?></option>
					<? endif; ?>
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

		<button class="form__button">Изменить статью</button>

	</form>
</div>