<?php
return (function () {
	$intGT0 = '[1-9]+\d*';
	return [
		[
			'test' => '/^$/',
			'controller' => 'article/index'
		],
		[
			'test' => '/^article\/add$/',
			'controller' => 'article/add'
		],
		[
			'test' => "/^article\/article\/($intGT0)$/",
			// 'test' => '/^article\/article\/([1-9]+\d*)\/delete$/',
			'controller' => 'article/article',
			'params' => ['id' => 1]
		],
		[
			'test' => "/^article\/edit\/($intGT0)$/",
			'controller' => 'article/edit',
			'params' => ['id' => 1]
		],
		[
			'test' => "/^article\/delete\/($intGT0)$/",
			'controller' => 'article/delete',
			'params' => ['id' => 1]
		],
		[
			'test' => "/^article\/category\/($intGT0)$/",
			'controller' => 'article/category',
			'params' => ['id' => 1]
		]
	];
})();
