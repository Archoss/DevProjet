<?php
	
	$w_routes = array(
	#   | METHODE |		| URL |		| CONTROLER # METHODE | | NOM_DE_ROUTE |

		['GET', 		'/', 		'Default#home', 		'home'			],
		['GET|POST', 	'/sub/', 	'Subscribe#sub',		'sub'			],
		['POST', 		'/result', 	'Subscribe#result',		'result'		],
		['GET|POST', 	'/log/', 	'Login#log',			'log'			],

	#   | METHODE |		| URL |		| CONTROLER # METHODE | | NOM_DE_ROUTE |
	);