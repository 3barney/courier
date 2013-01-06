
<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();
$id= (int)$_GET['id'];

$sql = "SELECT *
		FROM tbl_offices
		WHERE id = $id";
$sql_1 = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$sql_2 = "SELECT DISTINCT(city)
		FROM tbl_offices";
$result = dbQuery($sql);		
$result_1 = dbQuery($sql_1);
$result_2 = dbQuery($sql_2);
while($data = dbFetchAssoc($result)) {
extract($data);

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
<table width="900" cellspacing="0" cellpadding="0" border="0" align="center">

  <tbody><tr>

    <td width="900">
<?php include("header.php"); ?>

	</td>

  </tr>

  

  <tr>

    <td bgcolor="#FFFFFF">
	
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

      <td class="Partext1" bgcolor="F9F5F5" align="center"><strong>Edit Offices</strong></td>

    </tr>

  </tbody></table>



  <br>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%"> 

    

    <tbody>

       <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="right" width="336">Office Name : </td> 

      <td class="style3" bgcolor="#FFFFFF" width="394"><font color="#FF0000"><?php echo $off_name; ?></font>&nbsp;</td> 
    </tr> 

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="right">Office Address  :</td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $address; ?>&nbsp;</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="right">City :</td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $city; ?></td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#F3F3F3" align="right">Phone Number  :</td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $ph_no; ?>&nbsp;</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#F3F3F3" align="right">Office time :</td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $office_time; ?>&nbsp;</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#F3F3F3" align="right">Contact Person : </td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $contact_person; ?></td>
    </tr> 
  </tbody></table> 

  <span class="Partext1"><br>
   </span><span class="Partext1"><br>

  <br>  

  </span>

  <form action="process.php?action=edit-office" method="post" name="frmShipment" id="frmShipment"> 

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%">

    <tbody><tr>

      <td height="41" colspan="3" align="right" bgcolor="#FFFFFF"><div class="Partext1" align="center"><strong>UPDATE STATUS </strong>

</div></td>

    </tr>

    <tr>

      <td colspan="3" bgcolor="#FFFFFF" align="right"></td>
    </tr>
	<tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right" width="16%">Office Name:</td>

       <td colspan="2" class="Partext1" bgcolor="#FFFFFF">
            <input type="text" name="OfficeName" id="OfficeName" size="30" value="<?php echo $off_name; ?>" /></td>
    <tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right" width="16%">Office Address:</td>

      <td colspan="2" class="Partext1" bgcolor="#FFFFFF">
            <input type="text" name="off_address" id="off_address" value="<?php echo $address; ?>" />          </td>
    </tr>    
     <tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right" width="16%">City:</td>

     <td colspan="2" class="Partext1" bgcolor="#FFFFFF">
            <select name="city">
			<?php 
			while($data = dbFetchAssoc($result_2)){
			?>
			<option value="<?php echo $data['city']; ?>"><?php echo $data['city']; ?></option>
			<?php 
			}//while
			?>
	</select>          </td>
    </tr>    
     <tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right" width="16%">Phone Number:</td>

      <td colspan="2" class="Partext1" bgcolor="#FFFFFF">
            <input type="text" name="phone_no" id="phone_no">          </td>
    </tr>
    
     <tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right" width="16%">Office Time:</td>

      <td colspan="2" class="Partext1" bgcolor="#FFFFFF">
            <input type="text" name="off_time" id="off_time">          </td>
    </tr>
    
     <tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right" width="16%">Contact Person:</td>

      <td colspan="2" class="Partext1" bgcolor="#FFFFFF">
            <input type="text" name="contact_person" id="contact_person">          </td>
    </tr>

    

    <tr>

      <td bgcolor="#FFFFFF" align="right" style="height: 35px"></td>

      <td colspan="2" class="Partext1" bgcolor="#FFFFFF" style="height: 35px">

        <input name="submit" value="Submit" type="submit">

          <input name="id" id="id" value="<?php echo $id; ?>" type="hidden">
          <input name="city" id="city" value="<?php echo $city; ?>" type="hidden"></td>
    </tr>

    <tr>

      <td colspan="3" bgcolor="#FFFFFF" align="right"><div align="center">


      </div></td>
      </tr>
  </tbody></table>

  <br>

  </form>    </td>

  </tr>

  <tr>

    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
    <td bgcolor="#2284d5" width="304"><div align="right"></div></td>
  </tr>
</tbody></table>
</td>

  </tr>

</tbody></table>





</body></html>
<?php } 
?>