<?php
//David Teece K1207981
//Code that compares the answer given by the user, to the answer stored in the database

$a = $_GET['a']; //Answer given by user
$t = $_GET['t']; //Table ID
$j = $_GET['j']; //Joke ID
$jokeResult;

//Establish connection to database
mysql_connect("studentnet","k1207981","*******") or die (mysql_error ());
mysql_select_db("db_k1207981") or die(mysql_error());

	if($t == 1)
	{
		$sql = "SELECT COUNT(*) id FROM animal WHERE id = '".$j."' && answer = '".$a."'";
		$result = mysql_query($sql);

		while($row = mysql_fetch_array($result))
		{
			if($row['id'] == 0)
			{
				$jokeResult = "Incorrect!";
			}
			else
			{
				$jokeResult = "Correct!";
			}
		}
	}
	else if($t == 2)
	{
		$sql = "SELECT COUNT(*) id FROM christmas WHERE id = '".$j."' && answer = '".$a."'";
		$result = mysql_query($sql);

		while($row = mysql_fetch_array($result))
		{
			if($row['id'] == 0)
			{
				$jokeResult = "Incorrect!";
			}
			else
			{
				$jokeResult = "Correct!";
			}
		}
	}
	else if($t == 3)
	{
		$sql= "SELECT COUNT(*) id FROM doctor WHERE id = '".$j."' && answer = '".$a."'";
		$result = mysql_query($sql);

		while($row = mysql_fetch_array($result))
		{
			if($row['id'] == 0)
			{
				$jokeResult = "Incorrect!";
			}
			else
			{
				$jokeResult = "Correct!";
			}
		}
	}
	else if($t == 4)
	{
		$sql= "SELECT COUNT(*) id FROM food WHERE id = '".$j."' && answer = '".$a."'";
		$result = mysql_query($sql);

		while($row = mysql_fetch_array($result))
		{
			if($row['id'] == 0)
			{
				$jokeResult = "Incorrect!";
			}
			else
			{
				$jokeResult = "Correct!";
			}
		}
	}
	else if($t == 5)
	{
		$sql= "SELECT COUNT(*) id FROM history WHERE id = '".$j."' && answer = '".$a."'";
		$result = mysql_query($sql);

		while($row = mysql_fetch_array($result))
		{
			if($row['id'] == 0)
			{
				$jokeResult = "Incorrect!";
			}
			else
			{
				$jokeResult = "Correct!";
			}
		}
	}
	else if($t == 6)
	{
		$sql= "SELECT COUNT(*) id FROM school WHERE id = '".$j."' && answer = '".$a."'";
		$result = mysql_query($sql);

		while($row = mysql_fetch_array($result))
		{
			if($row['id'] == 0)
			{
				$jokeResult = "Incorrect!";
			}
			else
			{
				$jokeResult = "Correct!";
			}
		}
	}
	else if($t == 7)
	{
		$sql= "SELECT COUNT(*) id FROM science WHERE id = '".$j."' && answer = '".$a."'";
		$result = mysql_query($sql);

		while($row = mysql_fetch_array($result))
		{
			if($row['id'] == 0)
			{
				$jokeResult = "Incorrect!";
			}
			else
			{
				$jokeResult = "Correct!";
			}
		}
	}
	else if($t == 8)
	{
		$sql= "SELECT COUNT(*) id FROM sport WHERE id = '".$j."' && answer = '".$a."'";
		$result = mysql_query($sql);

		while($row = mysql_fetch_array($result))
		{
			if($row['id'] == 0)
			{
				$jokeResult = "Incorrect!";
			}
			else
			{
				$jokeResult = "Correct!";
			}
		}
	}

	echo $jokeResult;

mysql_close();
?>
