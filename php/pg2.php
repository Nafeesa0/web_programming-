<html>
<head>
	<title>Student Name</title>
	<style>
	body {
		background-color: beige;
		font-family: Arial, sans-serif;
	}

	pre {
		background-color: black;
		color: white;
	}
	</style>
</head>
<body>
	<h1>Student Names</h1>
	<?php
		$students = ["Aman", "Manu", "Zayan", "Linta", "Benn"];

		// Display original array
		echo "<h2>Original Array</h2>";
		echo "<pre>";
		print_r($students);
		echo "</pre>";
	
		// Sort array in ascending order
		asort($students);
		echo "<h2>Array Sorted with asort();</h2>";
		echo "<pre>";
		print_r($students);
		echo "</pre>";

		// Sort array in descending order
		arsort($students);
		echo "<h2>Array Sorted with arsort();</h2>";
		echo "<pre>";
		print_r($students);
		echo "</pre>";
	?>
</body>
</html>
