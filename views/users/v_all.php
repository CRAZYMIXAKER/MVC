<h1>Users</h1>
<? if ($userDeleted) : ?>
	<div class="userDelete">You deleted user</div>
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
				<form method="POST">
					<td><a href="<?= BASE_URL ?>users/delete/<?= $user['id_user'] ?>">Delete</a></td>
					<td><input type="text" value="<?= $user['login'] ?>"></td>
					<td><input type="text" value="<?= $user['email'] ?>"></td>
					<td><input type="text" value="<?= $user['name'] ?>"></td>
					<td><input type="text" value="<?= $user['status'] ?>"></td>
					<td><button>edit</button></td>
				</form>
			</tr>
		<? endforeach; ?>
	</tbody>
</table>
<a href="<?= BASE_URL ?>">Index</a>