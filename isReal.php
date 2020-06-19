<?php

preg_match_all('/(\w+)/',$argv[2], $matches);
$res = preg_replace('/(' . implode('|', reset($matches)) . ')/i', "((($1)))", $argv[2]);

echo PHP_EOL . $res . PHP_EOL;

