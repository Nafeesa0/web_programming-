<html>
<head>
	<title>Fibonacci Series Generator</title>
	<style>
		body {
			background-color: black;
			color: white;
			font-family: Times New Roman;
			text-align: center;
			padding: 20px;
		}
		.output {
			margin-top: 20px;
			padding: 20px;
		}
		input[type="number"] {
			padding: 5px;
			margin: 10px;
			width: 100px;
		}
		button {
			padding: 5px 10px;
			font-size: 16px;
		}
	</style>
</head>
<body>
	<h1>Fibonacci Series Generator</h1>
	<form method="POST">
		<label for="terms">Enter the number of terms:</label>
		<input type="number" id="terms" name="terms" min="1" required>
		<button type="submit">Generate</button>
	</form>

	<div class="output">
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$n = intval($_POST['terms']); // Get the number of terms from user input
			function fibonacciseries($n) {
				$num1 = 0;
				$num2 = 1;
				echo "Fibonacci Series up to $n terms:<br><br>";
				for ($i = 0; $i < $n; $i++) {
					echo $num1 . "<br>";
					$num3 = $num1 + $num2;
					$num1 = $num2;
					$num2 = $num3;
				}
			}
			fibonacciseries($n);
		}
		?>
	</div>
</body>
</html>
