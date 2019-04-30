<?php
$counter_file="counter.txt";
if (!file_exists ($counter_file)) {
	fopen ($counter_file, "w");
}
$file = fopen($counter_file, "r");

$counter = fread($file, 10);
fclose($file);

$counter++;

echo "Dilihat sebanyak $counter kali";
$file = fopen($counter_file, "w");
fwrite($file, $counter);
fclose($file);
?>
