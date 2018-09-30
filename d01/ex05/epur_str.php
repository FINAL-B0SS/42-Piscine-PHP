#!/usr/bin/php
<?php
function combo_breaker($string)
{
    $exploded = explode(" ", $string);
    $filtered = array_filter($exploded);
    return array_slice($filtered, 0);
}

if ($argc != 2)
{
    exit(1);
}

$splitted = combo_breaker($argv[1]);
$imploded = implode(" ", $splitted);
echo $imploded."\n";
?>
