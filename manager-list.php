<?php
session_start();
require_once('database.php');
require_once('library.php');

isUser();

$sql = "SELECT *
		FROM tbl_courier_officers";
$result = dbQuery($sql);		

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style2 {color: #FFFFFF}
-->
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
    <td bgcolor="#FFFFFF">
	<script language="JavaScript">
var checkflag = "false";

function check(field) {
if (checkflag == "false")
 {
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll")
	{
	field[i].checked=true;	
	}
	}
	checkflag = "true";
}
else
{
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll")
	{
	field[i].checked=false;
	}
	}
	checkflag = "false";
}

}
function confirmDel(field,msg)
{
	count=0;
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll" && field[i].checked==true)
	{
	count++;
	}
	}
	
	if(count == 0)
	{
		alert("Select any one record to delete!");
		return false;
	}
	else
	{
		return confirm(msg);
	}
}
</script>
<table border="0" align="center" width="80%">
    <tbody><tr>
      <td class="LargeBlue" bgcolor="#FFFFFF" align="left">&nbsp;</td>
    </tr>
    <tr>
      <td class="LargeBlue" bgcolor="#FFFFFF" align="left"><div class="Partext1" align="center"><strong>View All Manager Details </strong></div></td>
    </tr>
  </tbody></table>

 
  <table border="0" cellpadding="1" cellspacing="1" align="center" width="95%">
    <tbody>
	<tr>
    <td>
	</td>
    </tr>
  </tbody></table>
  <table class="blackbox" border="0" cellpadding="1" cellspacing="1" align="center" width="95%">
    <tbody><tr class="BoldRED" bgcolor="#FFFFFF" style="height:20px;">
      <td class="newtext" bgcolor="#EDEDED" width="20%">Officer Name </td>
      <td class="newtext" bgcolor="#EDEDED" width="20%">Address</td>
	  <td class="newtext" bgcolor="#EDEDED" width="20%">Email</td>
      <td class="newtext" bgcolor="#EDEDED" width="15%">Phone Numner</td>
      <td class="newtext" bgcolor="#EDEDED" width="25%">Office Name </td>
    
    </tr>
	<?php
	
	while($data = dbFetchAssoc($result)){
	extract($data);	
	?>
      <tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF" style="height:20px;">
	
      <td class="gentxt"><?php echo $officer_name; ?></td>
      <td class="gentxt"><?php echo $address; ?></td>
      <td class="gentxt"><?php echo $email; ?></td>
      <td class="gentxt"><?php echo $ph_no; ?></td>
      <td class="gentxt"><?php echo $office; ?></td>
	  
    </tr>
    <?php
	}//while
	?>
	  </tbody></table>
  <br>
	
    </td>
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