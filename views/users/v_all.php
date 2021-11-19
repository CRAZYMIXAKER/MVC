<h1>Users</h1>
<? if ($userDeleted) : ?>
	<div class="userDelete">You deleted user</div>
<? endif; ?>

<? if ($userEdited) : ?>
	<div class="userDelete">You edited user</div>
<? endif; ?>

<table class="Table">
	<thead>
		<tr>
			<th></th>
			<th>login</th>
			<th>email</th>
			<th>name</th>
			<th>status</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<? foreach ($users as $user) : ?>
			<tr>
				<form method="POST" action="<?= BASE_URL ?>users/edit/<?= $user['id_user'] ?>">
					<td><a href="<?= BASE_URL ?>users/delete/<?= $user['id_user'] ?>">Delete</a></td>
					<td><input name="login" type="text" value="<?= $user['login'] ?>"></td>
					<td><input name="email" type="text" value="<?= $user['email'] ?>"></td>
					<td><input name="name" type="text" value="<?= $user['name'] ?>"></td>
					<td><select name="id_access">
							<?php foreach ($access as $item) : ?>
								<?php if ($item['id_access'] === $user['id_access']) : ?>
									<option selected value="<?= $item['id_access'] ?>"><?= $item['name_access'] ?></option>
								<?php else : ?>
									<option value="<?= $item['id_access'] ?>"><?= $item['name_access'] ?></option>
								<? endif; ?>
							<? endforeach; ?>
						</select>
					</td>
					<td><button>edit</button></td>
				</form>
			</tr>
		<? endforeach; ?>
	</tbody>
</table>