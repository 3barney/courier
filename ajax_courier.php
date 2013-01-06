<?php

//$weightValue = $_GET['Weight'];
$destination = $_GET['Destination'];

$sql ="SELECT weight_price
	   FROM tbl_payments
	   WHERE destination = '$destination' ";
	   //AND destination = '$destination' ";
	   
$result = dbQuery($sql);
echo $result;


