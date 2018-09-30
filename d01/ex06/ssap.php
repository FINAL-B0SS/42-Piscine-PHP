#!/usr/bin/php
<?PHP
function	combo_breaker($string)
{
	$exploded = explode(" ", $string);
	$filtered = array_filter($exploded);
	return array_slice($filtered, 0);
}

if ($argc < 2)
{
	exit (1);
}

$combo = array();
$i = 1;
while ($i < $argc)
{
	$move_set = combo_breaker($argv[$i]);
	$combo = array_merge($combo, $move_set);
	$i++;
}
asort($combo);
foreach ($combo as $element)
{
	echo $element."\n";
}
?>
