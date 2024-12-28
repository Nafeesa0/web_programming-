<html>
<head>
	<style>
		.output {
			padding: 30px;
			font-family: Times New Roman;
			color: black;
		}
	</style>
</head>

<body bgcolor="beige"> 
	<div class="output">
		<?php
		function factorial($n) {
			if ($n < 0) {
				return "Factorial is not defined for negative numbers.";
			} elseif ($n == 0) {
				return 1;
			} else {
				return $n * factorial($n - 1);
			}
		}

		$number = 12; 
		$result = factorial($number);
		echo "The factorial of $number is $result";
		?>
	</div>
</body>
</html>
