<?php

$lado = $_POST["lado"];

$area = 4.83 * pow($lado, 2);

$area = number_format($area, 2);

echo $area;

?>