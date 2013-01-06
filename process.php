<?php 
//start session
session_start();

require_once('database.php');

$action = $_GET['action'];

switch($action) {
	case 'add-cons':
		addCons();
	break;
	
	case 'add-shipment':
		addShipment();
	break;
	
	case 'delivered':
		markDelivered();
	break;
	
	case 'add-office':
		addNewOffice();
	break;
	
	case 'add-manager':
		addManager();
	break;
	
	case 'update-status':
		updateStatus();
	break;
	
	case 'edit-office':
		editOffice();
	break;
	
	case 'change-pass':
		changePass();
	break;
			
	case 'logOut':
		logOut();
	break;		
	
	case 'trans-mode':
		transmode();
	break;
	
	case 'payments':
		 payments();
	break;
	
  /*	case 'logic':
		    logic();
	    break;        */
	
}//switch

function payments(){
	
	
	$weight1 = $_POST['weight1'];
	$weight2 = $_POST['weight2'];
	$weight3 = $_POST['weight3'];
	$weight4 = $_POST['weight4'];
	$weight5 = $_POST['weight5'];
	$weight6 = $_POST['weight6'];
	$weight7 = $_POST['weight7'];
	$weight8 = $_POST['weight8'];
	
	$price1 = $_POST['lessthanzero'];
	$price2 = $_POST['uptoThree'];
	$price3 = $_POST['uptoFive'];
	$price4 = $_POST['uptoTen'];
	$price5 = $_POST['uptoFifteen'];
	$price6 = $_POST['uptoTwenty'];
	$price7 = $_POST['uptoTwentyfive'];
	$price8 = $_POST['uptoThirty'];
	
	$destination1 = $_POST['Destination'];
	$destination2 = $_POST['Destination1'];
	$destination3 = $_POST['Destination2'];
	$destination4 = $_POST['Destination3'];
	$destination5 = $_POST['Destination4'];
	$destination6 = $_POST['Destination5'];
	$destination7 = $_POST['Destination6'];
	$destination8 = $_POST['Destination7'];
	
	$sql = "CREATE table IF NOT EXISTS tbl_payments(
	     	id INT NOT NULL AUTO_INCREMENT,
	     	PRIMARY KEY(id),
	     	weights_values VARCHAR(200) NOT NULL,
	     	weight_price INT(15) NOT NULL,
	     	destination VARCHAR(60) NOT NULL)";
	
	$sql2 = "INSERT INTO tbl_payments (weights_values, weight_price, destination)
			 VALUES ('$weight1', '$price1', '$destination1'),
			 		('$weight2', '$price2', '$destination2'),
					('$weight3', '$price3', '$destination3'),
					('$weight4', '$price4', '$destination4'),
					('$weight5', '$price5', '$destination5'),
					('$weight6', '$price6', '$destination6'),
					('$weight7', '$price7', '$destination7'),
					('$weight8', '$price8', '$destination8')";
	dbQuery($sql);
		if(!$sql){
			echo "ERROR CREATING DATABASE" .mysql_error();
		}
		else {
			dbQuery($sql2)	;
		}
	
	}




function addCons(){

	$Shippername = $_POST['Shippername'];
	$Shipperphone = $_POST['Shipperphone'];
	$Shipperaddress = $_POST['Shipperaddress'];
	
	$senderidno = $_POST['senderidno'];
	$receiveridno = $_POST['receiveridno'];
	$destination = $_POST['Destination'];
	
	$Receivername = $_POST['Receivername'];
	$Receiverphone = $_POST['Receiverphone'];
	$Receiveraddress = $_POST['Receiveraddress'];
	
	$ConsignmentNo = $_POST['ConsignmentNo'];
	$Shiptype = $_POST['Shiptype'];
	$transmodde = $_POST['Transportationmode'];
	$Weight = $_POST['Weight'];
	$Invoiceno = $_POST['Invoiceno'];
	$Qnty = $_POST['Qnty'];
	$bookdate = $_POST['bookdate'];

	$Bookingmode = $_POST['Bookingmode'];
	$Totalfreight = $_POST['Totalfreight'];
	//$Mode = $_POST['Mode'];
	
	
	$Packupdate = $_POST['Packupdate'];
	$Pickuptime = $_POST['Pickuptime'];
	$status = $_POST['status'];
	$Comments = $_POST['Comments'];
	

	$sql = "INSERT INTO tbl_courier (cons_no, ship_name, phone, s_add, rev_name, r_phone, r_add,  type, weight, invice_no, qty, book_mode, freight, mode, pick_date, pick_time, status, comments, book_date, senderidno, receiveridno, destination )
			VALUES('$ConsignmentNo', '$Shippername','$Shipperphone', '$Shipperaddress', '$Receivername','$Receiverphone','$Receiveraddress', '$Shiptype', '$Weight' , '$Invoiceno', '$Qnty', '$Bookingmode', '$Totalfreight', '$transmodde', '$Packupdate', '$Pickuptime', '$status', '$Comments','$bookdate', '$senderidno', '$receiveridno', '$destination')";	
	//echo $sql;
	dbQuery($sql);
	header('Location: courier-add-success.php'); 
	
	//echo $Ship;
}//addCons

function addShipment(){
	$addship = $_POST['addship'];
	$sql = "INSERT INTO shipment (shipment_type)
			VALUES ('$addship')";
	dbQuery($sql);
	header("Location: shipment-success.php");
}

function transmode(){
	$trnsmode = $_POST['trnsmode'];
	$sql = "INSERT INTO transport_mode (trns_mode)
			VALUES ('$trnsmode')";
	dbquery($sql);
	header("Location: trans-success.php");
}

function markDelivered() {
	$cid = (int)$_GET['cid'];
	$sql = "UPDATE tbl_courier
			SET status = 'Delivered'
			WHERE cid= $cid";
	dbQuery($sql);
	header('Location: delivered-success.php'); 
			
}//markDelivered();

function addNewOffice() {
	
	$OfficeName = $_POST['OfficeName'];
	$OfficeAddress = $_POST['OfficeAddress'];
	$City = $_POST['City'];
	$PhoneNo = $_POST['PhoneNo'];
	$OfficeTiming = $_POST['OfficeTiming'];
	$ContactPerson = $_POST['ContactPerson'];
	
	$sql = "INSERT INTO tbl_offices (off_name, address, city, ph_no, office_time, contact_person)
			VALUES ('$OfficeName', '$OfficeAddress', '$City', '$PhoneNo', '$OfficeTiming', '$ContactPerson')";
	dbQuery($sql);
	header('Location: office-add-success.php');
}//addNewOffice

function addManager() {
	
	$ManagerName = $_POST['ManagerName'];
	$Password = $_POST['Password'];
	$Address = $_POST['Address'];
	$Email = $_POST['Email'];
	$PhoneNo = $_POST['PhoneNo'];
	$OfficeName = $_POST['OfficeName'];
	
	$sql = "INSERT INTO tbl_courier_officers (officer_name, off_pwd, address, email, ph_no, office, reg_date)
			VALUES ('$ManagerName', '$Password', '$Address', '$Email', '$PhoneNo', '$OfficeName', NOW())";
	dbQuery($sql);
	header('Location: manager-add-success.php');

}//addNewOffice

function updateStatus() {
	
	$OfficeName = $_POST['OfficeName'];
	$status = $_POST['status'];
	$comments = $_POST['comments'];
	$cid = (int)$_POST['cid'];
	$cons_no = $_POST['cons_no'];
	$availability = $_POST['availability'];
	//$OfficeName = $_POST['OfficeName'];
	
	$sql = "INSERT INTO tbl_courier_track (cid, cons_no, current_city, status, comments, bk_time)
			VALUES ($cid, '$cons_no', '$OfficeName', '$status', '$comments', NOW())";
	DbQuery($sql);
	
	$sql_1 = "UPDATE tbl_courier 
				SET status = '$status', 
				availability= '$availability'
				WHERE cid = $cid
				AND cons_no = '$cons_no'";
	dbQuery($sql_1);	
	
	header('Location: update-success.php');

}
//edit office
function editOffice(){
	$off_name = $_POST['OfficeName'];
	$off_address = $_POST['off_address'];
	$city = $_POST['city'];
	$phone_no = $_POST['phone_no'];
	$off_time = $_POST['off_time'];
	$contact = $_POST['contact_person'];
	$id =(int)$_POST['id'];
	
	$sql_1 = "UPDATE tbl_offices
			  SET address='$off_address', ph_no='$phone_no', office_time='$off_time', contact_person='$contact'
			  WHERE id = '$id'
			  AND city = '$city' ";
			
	dbQuery($sql_1);
	header('Location: office-update-succes.php');
	 
}

function logOut(){
	if(isset($_SESSION['user_name'])){
		unset($_SESSION['user_name']);
	}
	if(isset($_SESSION['user_type'])){
		unset($_SESSION['user_type']);
	}
	session_destroy();
	header('Location: login.php');
}//logOut


?>