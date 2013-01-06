<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();

$sql = "SELECT DISTINCT(weights)
	   FROM weights";
$result = dbQuery($sql);


//while($data = dbFetchAssoc($result)) {
//extract($data);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
.style1 {color: #FF0000}
.style3 {font-family: verdana, tohama, arial}
</style>
</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">

  <tbody><tr>

    <td width="900">
<?php include("header.php"); ?>

	</td>

  </tr>

  

  <tr>

    <td bgcolor="#FFFFFF" style="height: 61px">
	
<style type="text/css">
.ds_box {
	background-color: #FFF;
	border: 1px solid #000;
	position: absolute;
	z-index: 32767;
}
.ds_tbl {
	background-color: #FFF;
}
.ds_head {
	background-color: #333;

	color: #FFF;

	font-family: Arial, Helvetica, sans-serif;

	font-size: 13px;

	font-weight: bold;

	text-align: center;

	letter-spacing: 2px;

}
.ds_subhead {
	background-color: #CCC;
	color: #000;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	width: 32px;
}
.ds_cell {
	background-color: #EEE;
	color: #000;
	font-size: 13px;

	text-align: center;

	font-family: Arial, Helvetica, sans-serif;

	padding: 5px;

	cursor: pointer;

}
.ds_cell:hover {
	background-color: #F3F3F3;
} /* This hover code won't work for IE */
</style>
<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

-->

</style>



 

<table class="ds_box" id="ds_conclass" style="display: none;" cellpadding="0" cellspacing="0"> 

  <tbody><tr> 

    <td id="ds_calclass"> </td> 

  </tr> 

</tbody></table> 



  <br>

  <table border="0" align="center" width="98%">

    <tbody><tr>

      <td class="Partext1" bgcolor="F9F5F5" align="center" style="height: 21px"><strong>
	  ADD PARCEL PRICING</strong></td>

    </tr>

  </tbody></table>


  <br>

<form action="process.php?action=trans-mode" method="post" name="frmShipment" id="frmShipment">
  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%"> 
    <tbody><tr>      
		<td class="TrackMediumBlue" align="right" style="height: 25px; width : 191px" >
		ENTER OFFICE NAME:</td>
		<td style="width: 23px"><input type="text" name="offname" id="offname" align="center"></td>
       	</tr>
       	
       	</tbody></table>
       	
       	<br>
       	
       	<table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%">
       	<tbody>
       	<tr>
       	<td class="TrackMediumBlue" align="center" style="width: 100%">SELECT 
		THE WEIGHT:</td>
        </tr> 
         <tr>
         	<td class="TrackMediumBlue" align="center" style="height: 25px; width: 191px">
         	Less than 0kg:</td>
         	<td style="width: 23px"> <?php echo $data['weights']; ?></td>
         </tr>

       	
       	
        <tr>
    	<td colspan="2" align="center" class="Partext1" bgcolor="#FFFFFF" style="height: 32px">
    	<input name="submit" value="Submit" type="submit" ></td>
    </tr>
	</tbody>
   </table> 
  </form>

    <br>  

  

    </td>

  </tr>

  <tr>

    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody>
</tbody></table>
</td>

  </tr>

</tbody></table>





</body></html>
