#!/usr/bin/php
<?php
function combo_breaker($string)
{
    $exploded = explode(" ", $string);
    $filtered = array_filter($exploded);
    return array_slice($filtered, 0);
}

if ($argc < 2)
{
    exit(1);
}
$combo = combo_breaker($argv[1]);
if (count($combo))
{
    foreach(array_splice($combo, 1) as $element)
    {
        echo $element." ";
    }
    echo $combo[0]."\n";
}
?>
