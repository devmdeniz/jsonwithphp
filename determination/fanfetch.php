<?php
header('Content-Type: application/json; charset=utf-8');
$fanbilgisifelan = file_get_contents('../robot.json');
$fannemfelan = json_decode($fanbilgisifelan, true);
print_r($fannemfelan);
?>