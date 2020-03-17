<?php

// phpcs:disable WordPress.WP.EnqueuedResources.NonEnqueuedStylesheet
return [
	// Test Critical CSS without > child selector.
	[
		[
			'critical_css' => 'body { background-color: lightblue; } h1 { color: white; text-align: center; } p { font-family: verdana; font-size: 20px; } b',
		],
		[
			'critical_css' => 'body { background-color: lightblue; } h1 { color: white; text-align: center; } p { font-family: verdana; font-size: 20px; } b',
		],

		[
			'critical_css' => 'body > a { background-color: lightblue; } h1 { color: white; text-align: center; } p { font-family: verdana; font-size: 20px; } b',
		],
		[
			'critical_css' => 'body > a { background-color: lightblue; } h1 { color: white; text-align: center; } p { font-family: verdana; font-size: 20px; } b',
		],
	],

	// Test Critical CSS with > child selector.
	[
		[
			'critical_css' => 'body>a{ background-color: lightblue; } h1 { color: white; text-align: center; } p { font-family: verdana; font-size: 20px; } b',
		],
		[
			'critical_css' => 'body>a{ background-color: lightblue; } h1 { color: white; text-align: center; } p { font-family: verdana; font-size: 20px; } b',
		],

		[
			'critical_css' => 'body > a { background-color: lightblue; } h1 { color: white; text-align: center; } p { font-family: verdana; font-size: 20px; } b',
		],
		[
			'critical_css' => 'body > a { background-color: lightblue; } h1 { color: white; text-align: center; } p { font-family: verdana; font-size: 20px; } b',
		],
	],
	// Test Critical CSS with > child selector + XSS.
	[
		[
			'critical_css' => '<script>alert("a");</script>body>a{ background-color: lightblue; } h1 { color: white; text-align: center; } p { font-family: verdana; font-size: 20px; } b',
		],
		[
			'critical_css' => 'body>a{ background-color: lightblue; } h1 { color: white; text-align: center; } p { font-family: verdana; font-size: 20px; } b',
		],

		[
			'critical_css' => 'body>a{ background-color: lightblue; } h1 { color: white; text-align: center; } p { font-family: verdana; font-size: 20px; }<script>alert("a");</script>',
		],
		[
			'critical_css' => 'body>a{ background-color: lightblue; } h1 { color: white; text-align: center; } p { font-family: verdana; font-size: 20px; }',
		],
	],
];
