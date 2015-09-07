<!-- David Teece -->
<!-- Code that retrieves a joke from the SQL database, and displays it on screen -->
<?php
$q = $_GET['q'];
$jokeTold = false;

mysql_connect("studentnet","k1207981","*******") or die (mysql_error ());
mysql_select_db("db_k1207981") or die(mysql_error());

//If a joke is not present on screen
while($jokeTold != true)
{
	//Generates a random number to decide which table to pick a joke from
	$random = rand(1,8);

	if (isset($_COOKIE["Animal"]) && $random == 1)
	{
		$sql="SELECT * FROM animal WHERE id = '".$q."'";
		$result = mysql_query($sql);

		echo "<div>";

		while($row = mysql_fetch_array($result))
		{
			echo "<div id = 'tableID'>" . 1 . "</div>";
			echo "<div id = 'jokeID'>". $row['id'] . "</div>";
			echo "" . $row['setup'] . "</br>";
			echo "" . $row['punchline'] . "</br>";
		}
		echo "</div>";
		$jokeTold = true;
	}
	else if (isset($_COOKIE["Christmas"]) && $random == 2)
	{
		$sql="SELECT * FROM christmas WHERE id = '".$q."'";
		$result = mysql_query($sql);

		echo "<div>";

		while($row = mysql_fetch_array($result))
		{
			echo "<div id = 'tableID'>" . 2 . "</div>";
			echo "<div id = 'jokeID'>". $row['id'] . "</div>";
			echo "" . $row['setup'] . "</br>";
			echo "" . $row['punchline'] . "</br>";
		}
		echo "</div>";
		$jokeTold = true;
	}

	else if (isset($_COOKIE["Doctor"]) && $random == 3)
		{
			$sql="SELECT * FROM doctor WHERE id = '".$q."'";
			$result = mysql_query($sql);

			echo "<div>";

			while($row = mysql_fetch_array($result))
			{
				echo "<div id = 'tableID'>" . 3 . "</div>";
				echo "<div id = 'jokeID'>". $row['id'] . "</div>";
				echo "" . $row['setup'] . "</br>";
				echo "" . $row['punchline'] . "</br>";
			}
			echo "</div>";
			$jokeTold = true;
	}

	else if (isset($_COOKIE["Food"]) && $random == 4)
	{
		$sql="SELECT * FROM food WHERE id = '".$q."'";
		$result = mysql_query($sql);

		echo "<div>";

		while($row = mysql_fetch_array($result))
		{
			echo "<div id = 'tableID'>" . 4 . "</div>";
			echo "<div id = 'jokeID'>". $row['id'] . "</div>";
			echo "" . $row['setup'] . "</br>";
			echo "" . $row['punchline'] . "</br>";
		}
		echo "</div>";
		$jokeTold = true;
	}

	else if (isset($_COOKIE["History"]) && $random == 5)
	{
		$sql="SELECT * FROM history WHERE id = '".$q."'";
		$result = mysql_query($sql);

		echo "<div>";

		while($row = mysql_fetch_array($result))
		{
			echo "<div id = 'tableID'>" . 5 . "</div>";
			echo "<div id = 'jokeID'>". $row['id'] . "</div>";
			echo "" . $row['setup'] . "</br>";
			echo "" . $row['punchline'] . "</br>";
		}
		echo "</div>";
		$jokeTold = true;
	}

	else if (isset($_COOKIE["School"]) && $random == 6)
	{
		$sql="SELECT * FROM school WHERE id = '".$q."'";
		$result = mysql_query($sql);

		echo "<div>";

		while($row = mysql_fetch_array($result))
		{
			echo "<div id = 'tableID'>" . 6 . "</div>";
			echo "<div id = 'jokeID'>". $row['id'] . "</div>";
			echo "" . $row['setup'] . "</br>";
			echo "" . $row['punchline'] . "</br>";
		}
		echo "</div>";
		$jokeTold = true;
	}

	else if (isset($_COOKIE["Science"]) && $random == 7)
	{
		$sql="SELECT * FROM science WHERE id = '".$q."'";
		$result = mysql_query($sql);

		echo "<div>";

		while($row = mysql_fetch_array($result))
		{
			echo "<div id = 'tableID'>" . 7 . "</div>";
			echo "<div id = 'jokeID'>". $row['id'] . "</div>";
			echo "" . $row['setup'] . "</br>";
			echo "" . $row['punchline'] . "</br>";
		}
		echo "</div>";
		$jokeTold = true;
	}

	else if (isset($_COOKIE["Sport"]) && $random == 8)
	{
		$sql="SELECT * FROM sport WHERE id = '".$q."'";
		$result = mysql_query($sql);

		echo "<div>";

		while($row = mysql_fetch_array($result))
		{
			echo "<div id = 'tableID'>" . 8 . "</div>";
			echo "<div id = 'jokeID'>". $row['id'] . "</div>";
			echo "" . $row['setup'] . "</br>";
			echo "" . $row['punchline'] . "</br>";
		}
		echo "</div>";
		$jokeTold = true;
	}
}

mysql_close();
?>
