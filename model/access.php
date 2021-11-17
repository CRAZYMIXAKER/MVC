<?php
function accessGet(): array
{
	$sql = "SELECT * FROM access ORDER BY id_access";
	$query = dbQuery($sql);
	return $query->fetchAll();
}
