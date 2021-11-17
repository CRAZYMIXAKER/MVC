<?php
return (function () {
	$intGT0 = '[1-9]+\d*';
	$normUrl = '[0-9aA-zZ_-]+';

	return [
		[
			'test' => '/^\/?$/',
			'controller' => 'article/all'
		],
		[
			'test' => '/^article\/add\/?$/',
			'controller' => 'article/add'
		],
		[
			'test' => "/^article\/article\/($intGT0)\/?$/",
			// 'test' => '/^article\/article\/([1-9]+\d*)\/delete$/',
			'controller' => 'article/article',
			'params' => ['id' => 1]
		],
		[
			'test' => "/^article\/edit\/($intGT0)\/?$/",
			'controller' => 'article/edit',
			'params' => ['id' => 1]
		],
		[
			'test' => "/^article\/delete\/($intGT0)\/?$/",
			'controller' => 'article/delete',
			'params' => ['id' => 1]
		],
		[
			'test' => "/^category\/categoryOne\/($intGT0)\/?$/",
			'controller' => 'category/categoryOne',
			'params' => ['id' => 1]
		],
		[
			'test' => "/^auth\/login\/?$/",
			'controller' => 'auth/login'
		],
		[
			'test' => "/^auth\/logout\/?$/",
			'controller' => 'auth/logout'
		],
		[
			'test' => "/^auth\/reg\/?$/",
			'controller' => 'auth/reg'
		],
		[
			'test' => "/^users\/all\/?$/",
			'controller' => 'users/all'
		],
		[
			'test' => "/^users\/delete\/($intGT0)\/?$/",
			'controller' => 'users/delete',
			'params' => ['id' => 1]
		],
	];
})();
