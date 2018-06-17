<?php 
function questions ($name, $number) {
	if ($number > 0 and $number <=5) {
		print("Привет, $name! Хорошего и продуктивного рабочего дня!");
	} elseif ($number > 5 and $number <=7) {
		print("Привет, $name! Желаю вам хорошо отдохнуть в этот день!");
	} else {
		print("Привет, $name! Неделя состоит из 7 дней! :-)");
	}
}
questions("Pavel", 5);
?>

