<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

<?php

//comparing objects

class cat
{
	public function Meow()
	{
		echo "meow<br>";
	}
}

class dog
{
	public function Bark()
	{
		echo "bark<br>";
	}	
}

function DoMeow($c)
{
	if(is_object($c))
	{
		echo "is an object<br>";
		
		$t = get_class($c);
		echo $t . "<br>";
		
		if($t == "cat")
		{
			$c->Meow();
		}
		else
		{
			echo "Invalid use of function, please use the cat class!!!<br>";
		}
	}
	else
	{
		echo "Not an object!<br>";
	}
	
	
}

$mycat = new cat();
$mydog = new dog();

DoMeow($mycat);


?>

</body>
</html>
