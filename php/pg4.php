<html>
<head>
	<style>
		.output {
			
			padding:30px;
			font-family:Times New Roman;
			color:white;
		}
	</style>
</head>
<body bgcolor="black">

	<div class="output">
	<?php
	function fibonacciseries($n) {
		$num1 = 0 ;
		$num2 = 1;
		echo "Fibonacci Series upto $n terms : <br><br>";
		for ($i = 0 ; $i <$n ; $i++) {
			echo $num1 . " <br> " ;
			$num3 = $num1 + $num2;
			$num1 = $num2;
			$num2 = $num3;
		}
	}
	fibonacciseries(20);
	?>
	</div>
</body>
</html>