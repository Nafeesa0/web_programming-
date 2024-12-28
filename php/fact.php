<html>
<head>
	<style>
		.output {
			padding : 30px;
			font-family : Times New Roman;
			color : black;
		}
	</style>
</head>
<body bgcolor="beige">
	<div class="output">
		<form method="POST" action="">
			<label for="number">Enter a number: </label>
			<input type="number" id="number" name="number" required>
			<input type="submit" value="Calculate Factorial">
		</form>

		<?php
		// Factorial function
		function factorial($n) {
			if ($n < 0) {
				return "Factorial is not defined for negative numbers.";
			} elseif ($n == 0) {
				return 1;
			} else {
				return $n * factorial($n - 1);
			}
		}

		// Check if the form is submitted and process the input
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$number = $_POST['number']; // Get the user input
			$result = factorial($number);
			echo "The factorial of $number is $result";
		}
		?>
	</div>
</body>
</html>
