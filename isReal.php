<?php

preg_match_all('/(\w+)/u', $argv[2], $matches);
$matches = reset($matches);
usort($matches, function($a, $b) {
    return strlen($b) <=> strlen($a);
});
$res = preg_replace('/(' . implode('|', $matches) . ')/', "((($0)))", $argv[2]);

echo PHP_EOL . $res . PHP_EOL;

