<?php
/*
// ������� #1
	$a = -2;
	$b = -5;
	if ($a >=0 && $b >= 0) {
		echo '�������� ����� �����: '.($a - $b);
	} elseif ($a < 0 && $b < 0) {
		echo '������������ ����� �����: '.($a * $b);
	} elseif (($a >= 0 && $b < 0) || ($a < 0 && $b >= 0)) {
	    echo '����� ����� �����: '.($a + $b);
    }

// ������� �2
	



// ������� �3

*/
// ������� �4
	function mathOperation($arg1, $arg2, $operation) {
	switch ($operation) {
		case "sum": 
			return $arg1 + $arg2;
		case "subtraction":
			return $arg1 - $arg2;
		case "multiply":
			return $arg1 * $arg2; 
		case "divide":
			if ($arg2 === 0) {
				echo "invalid arg2 value (=0)";
				break;
			}
			return $arg1 / $arg2;
		}
	}
	echo mathOperation(10, 0, divide);
	



?>