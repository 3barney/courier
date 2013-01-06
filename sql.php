<?php
	$sql = "SELECT weight
		FROM route_p
		WHERE id = 1";
$result = dbQuery($sql);

$sql_1 = "SELECT weight
		FROM route_p
		WHERE id = 2";
$result_1 = dbQuery($sql_1);	

$sql_2 = "SELECT weight
		FROM route_p
		WHERE id = 3";
$result_2 = dbQuery($sql_2);	

$sql_3 = "SELECT weight
		FROM route_p
		WHERE id = 4";
$result_3 = dbQuery($sql_3);	

$sql_4 = "SELECT weight
		FROM route_p
		WHERE id = 5";
$result_4 = dbQuery($sql_4);	

$sql_5 = "SELECT weight
		FROM route_p
		WHERE id = 6";
$result_5 = dbQuery($sql_5);	

$sql_6 = "SELECT weight
		FROM route_p
		WHERE id = 7";
$result_6 = dbQuery($sql_6);	

$sql_7 = "SELECT weight
		FROM route_p
		WHERE id = 8";
$result_7 = dbQuery($sql_7);	

$sql_8 = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$result_8 = dbQuery($sql_8);

$sql_9 = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$result_9 = dbQuery($sql_9);

$sql_10 = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$result_10 = dbQuery($sql_10);

$sql_11 = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$result_11 = dbQuery($sql_11);

$sql_12 = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$result_12 = dbQuery($sql_12);

$sql_13 = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$result_13 = dbQuery($sql_13);

$sql_14 = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$result_14 = dbQuery($sql_14);

$sql_15 = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$result_15 = dbQuery($sql_15);

function get_price(){
	$sql = "SELECT weight_price
			FROM tbl_payments
			WHERE ";
	}