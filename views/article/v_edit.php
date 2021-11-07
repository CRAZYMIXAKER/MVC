<h1>Edit</h1>
<form method="POST">
	<input type="text" name="title" value="<?= $article['title'] ?>"></br></br>
	<input type="text" name="content" value="<?= $article['content'] ?>"></br></br>
	<button>Edit article</button>
</form>
<a href="index.php?c=index">Back</a>