<h1>Add</h1>
<form method="POST">
	<input type="text" name="title" value="<?= $article['title'] ?>"></br></br>
	<input type="text" name="content" value="<?= $article['content'] ?>"></br></br>
	<button>Add article</button>
</form>
<a href="index.php?f=article&c=index">Back</a>