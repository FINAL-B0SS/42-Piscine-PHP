#!/usr/bin/php
<?php

$handle = fopen("php://stdin", "r");
while (1)
{
	echo "Enter a number: ";
	$gotten = fgets($handle);
	if ($gotten == FALSE)
	{
		echo "\n";
		break ;
	}
	$line = substr($gotten, 0, -1);
	if (strlen($line) > 0 && is_numeric($line))
	{
		echo "The number ",$line." is ";
		if ((int)substr($line, -1) % 2)
		{
			echo "odd";
		}
		else
		{
			echo "even";
		}
	}
	else
	{
		echo "'$line' is not a number";
	}
	echo "\n";
}
?>
