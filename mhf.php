#!/usr/bin/php
<?php
	$algorithms = array(
		"sha224",
		"sha256",
		"sha384",
		"sha512"
	);

	$num_algorithms = count($algorithms);

	if($argc < 3) die("Usage: ". $argv[0] . " [First number] [Last number]");
	
	$count = $argv[1];
	$upperlimit = $argv[2];

	for(; $count < $upperlimit; ++$count)
	{
		for($i = 0; $i < $num_algorithms; ++$i)
		{
			$hash = hash($algorithms[$i], $count);
			if($hash == '0')
			{
				echo "Hash collision with 0 for input " . $count .
				" for " . $algorithms[$i] . " algorithm\n";
			}
		}
	}
?>
