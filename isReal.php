<?php

$text = implode(' ', 
		array_map(function($a) {return '(((' . $a . ')))';}, 
			explode(' ', $argv[2])
		)
	);
echo PHP_EOL . $text . PHP_EOL;
