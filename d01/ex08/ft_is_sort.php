<?php
function ft_is_sort($array)
{
	$sorted = $array;
	sort($sorted);
	foreach($sorted as $element)
	{
		if ($sorted !== $array)
		{
			return false;
		}
		$array++;
	}
	return true;
}
?>
