<?php
// ������� � 1
/* C ������� ����� while ������� ��� ����� � ���������� �� 0 �� 100, 
������� ������� �� 3 ��� �������.*/

/*
$i = 1;
const END_CICLE = 100;

while ($i <= END_CICLE) {
	if (($i % 3) == 0) {
		echo "the number is $i".PHP_EOL;
	}
	$i++;
}
*/

// ������� � 2
/* � ������� ����� do�while �������� ������� ��� ������ ����� �� 0 �� 10, 
����� ��������� �������� ���:
0 � ����.
1 � �������� �����.
2 � ������ �����.
3 � �������� �����.
�
10 � ������ �����.
*/

$j = 0;
 
 do {
	if ($j == 0) {
		echo "$j - zero".PHP_EOL;
		$j++;
	}
	if (($j % 2) == 0) {
		echo "$j - even number".PHP_EOL;
		$j++;
	} 
	echo "$j - odd number".PHP_EOL;
		$j++;
 } while ($j <= 10);













?>