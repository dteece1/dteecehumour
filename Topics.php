<!-- David Teece K1207981 -->
<!-- Code that allows users to select joke topics that will appear once the game begins -->
<html>
	<head>
	<title>Topics</title>
	<link rel="stylesheet" href="mystyle.css">

	<?php
			$ch1 = 'unchecked';
			$ch2 = 'unchecked';
			$ch3 = 'unchecked';
			$ch4 = 'unchecked';
			$ch5 = 'unchecked';
			$ch6 = 'unchecked';
			$ch7 = 'unchecked';
			$ch8 = 'unchecked';

	if (isset($_POST['Submit']))
	{
		if (isset($_POST['ch1']))
		{
			$ch1 = $_POST['ch1'];

			if ($ch1 == 'ani')
			{
				$ch1 = 'checked';
				setcookie("Animal","You selected animals!");
			}
		}
		else
		{
			setcookie("Animal", "", time() - 3600);
		}

		if (isset($_POST['ch2']))
		{
			$ch2 = $_POST['ch2'];

			if ($ch2 == 'chr')
			{
				$ch2 = 'checked';
				setcookie("Christmas","You selected christmas!");
			}
		}
		else
		{
			setcookie("Christmas", "", time() - 3600);
		}

		if (isset($_POST['ch3']))
		{
			$ch3 = $_POST['ch3'];

			if ($ch3 == 'doc')
			{
				$ch3 = 'checked';
				setcookie("Doctor","You selected doctor doctor!");
			}
		}
		else
		{
			setcookie("Doctor", "", time() - 3600);
		}

		if (isset($_POST['ch4']))
		{
			$ch4 = $_POST['ch4'];

			if ($ch4 == 'foo')
			{
				$ch4 = 'checked';
				setcookie("Food","You selected food!");
			}
		}
		else
		{
			setcookie("Food", "", time() - 3600);
		}

		if (isset($_POST['ch5']))
		{
			$ch5 = $_POST['ch5'];

			if ($ch5 == 'his')
			{
				$ch5 = 'checked';
				setcookie("History","You selected history!");
			}
		}
		else
		{
			setcookie("History", "", time() - 3600);
		}

		if (isset($_POST['ch6']))
		{
			$ch6 = $_POST['ch6'];

			if ($ch6 == 'sch')
			{
				$ch6 = 'checked';
				setcookie("School","You selected school!");
			}
		}
		else
		{
			setcookie("School", "", time() - 3600);
		}

		if (isset($_POST['ch7']))
		{
			$ch7 = $_POST['ch7'];

			if ($ch7 == 'sci')
			{
				$ch7 = 'checked';
				setcookie("Science","You selected science!");
			}
		}
		else
		{
			setcookie("Science", "", time() - 3600);
		}

		if (isset($_POST['ch8']))
		{
			$ch8 = $_POST['ch8'];

			if ($ch8 == 'spo')
			{
				$ch8 = 'checked';
				setcookie("Sport","You selected sport!");
			}
		}
		else
		{
			setcookie("Sport", "", time() - 3600);
		}
		header("Location: main.html");
		die();
	}

	?>

	</head>
	<body>
		<h1> Topics </h1>
		<div class="topic-square">
			<form name = "topics" method="POST" action="Topics.php">

				<input type = 'checkbox' name='ch1' value="ani" <?php print $ch1; ?>>Animals<br>
				<br>

				<input type = "checkbox" name="ch2" value="chr" <?php print $ch2; ?>>Christmas<br>
				<br>

				<input type = "checkbox" name="ch3" value="doc" <?php print $ch3; ?>>Doctor Doctor<br>
				<br>

				<input type = "checkbox" name="ch4" value="foo" <?php print $ch4; ?>>Food<br>
				<br>

				<input type = "checkbox" name="ch5" value="his" <?php print $ch5; ?>>History<br>
				<br>

				<input type = "checkbox" name="ch6" value="sch" <?php print $ch6; ?>>School<br>
				<br>

				<input type = "checkbox" name="ch7" value="sci" <?php print $ch7; ?>>Science<br>
				<br>

				<input type = "checkbox" name="ch8" value="spo" <?php print $ch8; ?>>Sport<br>

				<p id="topicbrief"> Welcome to the topics page! Above, you'll find a list of topics that we have jokes about stored in our database.
					If you want a topic to show up in the game, simply click on whatever you fancy, then press the "Select Topics" button.
					After that, feel free to start the game! </p>

				<div class="submitbtn">
				<input type = 'Submit' name = 'Submit' value="Select Topics">
				</div>
			</form>
		<a href="main.html" id="backtopic"> Back to start </a>
		</div>
	</body>
</html>
