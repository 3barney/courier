<?php
session_start();
require_once('database.php');

require_once('library.php');

require_once('sql.php');
//isUser();



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

<table border="0" align="center" width="80%">
    <tbody><tr>
      <td class="LargeBlue" bgcolor="#FFFFFF" align="left">&nbsp;</td>
    </tr>
    <tr>
      <td class="LargeBlue" bgcolor="#FFFFFF" align="left"><div class="Partext1" align="center"><strong>Update Shipment </strong></div></td>
    </tr>
  </tbody></table>
	
    
 
 <form action="process.php?action=payments" method="post" name="frmShipment" id="frmShipment"> 
 

  <table class="blackbox" border="0" cellpadding="1" cellspacing="1" align="center" width="95%">
    <tbody><tr class="BoldRED" bgcolor="#FFFFFF">
      <td class="newtext" bgcolor="#EDEDED" width="10%" style="height: 20px">WEIGHTS</td>
       <td class="newtext" bgcolor="#EDEDED" width="10%" style="height: 20px">ENTER PRICE OF THE WEIGHTS</td>
       <td class="newtext" bgcolor="#EDEDED" width="10%" style="height: 20px">CHOOSE DESTINATION</td>
    </tr>
    <tr>
	<?php
	
	while($data = dbFetchAssoc($result)){
	extract($data);	
	?>
      <tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">
      <td height="35" class="gentxt"><input name="weight1" value="<?php echo $data['weight']; ?>" id="weight1" readonly size="40" type="TEXT" style="text-transform:uppercase; color:red; font-weight:bold; width:240px;"></td>     
      <td height="35" class="gentxt"><input name="lessthanzero" id="lessthanzero" maxlength="7" type="text" > </td>
      <td>
      		<select id="Destination" name="Destination">
				     <?php 
						while($data = dbFetchAssoc($result_8)){
						?>
						<option value="<?php echo $data['off_name']; ?>"><?php echo $data['off_name']; ?></option>
						<?php 
						}//while
					?>
           
            </select>
      </td>
    </tr>
    <?php
	}//while
	?>
    
    
    <?php
	
	while($data_1 = dbFetchAssoc($result_1)){
	extract($data_1);	
	?>
      <tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">
      <td height= "35px" class="gentxt"><input name="weight2" value="<?php echo $data_1['weight']; ?>" id="weight2" readonly type="text" style="text-transform:uppercase; color:red; font-weight:bold; width:240px"></td>
      <td height="35" class="gentxt"><input name="uptoThree" id="uptoThree" maxlength="7" type="text" > </td>
      <td>
      		<select id="Destination1" name="Destination1">
				     <?php 
						while($data = dbFetchAssoc($result_9)){
						?>
						<option value="<?php echo $data['off_name']; ?>"><?php echo $data['off_name']; ?></option>
						<?php 
						}//while
					?>
           
            </select>
      </td>
    </tr>
    <?php
	}//while
	?>
    
    <?php
	
	while($data_2 = dbFetchAssoc($result_2)){
	extract($data_2);	
	?>
      <tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">
      <td height= "35px" class="gentxt"><input name="weight3" value="<?php echo $data_2['weight']; ?>" id="weight3" readonly type="text" style="text-transform:uppercase; color:red; font-weight:bold; width:240px"></td>
      <td height="35" class="gentxt"><input name="uptoFive" id="uptoFive" maxlength="7" type="text" > </td>
      <td>
      		<select id="Destination2" name="Destination2">
				     <?php 
						while($data = dbFetchAssoc($result_10)){
						?>
						<option value="<?php echo $data['off_name']; ?>"><?php echo $data['off_name']; ?></option>
						<?php 
						}//while
					?>
           
            </select>
      </td>
    </tr>
    <?php
	}//while
	?>
    
    <?php
	
	while($data_3 = dbFetchAssoc($result_3)){
	extract($data_3);	
	?>
      <tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">
      <td height= "35px" class="gentxt"><input name="weight4" value="<?php echo $data_3['weight']; ?>" id="weight4" readonly type="text" style="text-transform:uppercase; color:red; font-weight:bold; width:240px"></td>
      <td height="35" class="gentxt"><input name="uptoTen" id="uptoTen" maxlength="7" type="text" > </td>
      <td>
      		<select id="Destination3" name="Destination3">
				     <?php 
						while($data = dbFetchAssoc($result_11)){
						?>
						<option value="<?php echo $data['off_name']; ?>"><?php echo $data['off_name']; ?></option>
						<?php 
						}//while
					?>
           
            </select>
      </td>
    </tr>
    <?php
	}//while
	?>
    
    <?php
	
	while($data_4 = dbFetchAssoc($result_4)){
	extract($data_4);	
	?>
      <tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">
      <td height= "35px" class="gentxt"><input name="weight5" value="<?php echo $data_4['weight']; ?>" id="weight5" readonly type="text" style="text-transform:uppercase; color:red; font-weight:bold; width:240px"></td>
      <td height="35" class="gentxt"><input name="uptoFifteen" id="uptoFifteen" maxlength="7" type="text" > </td>
      <td>
      		<select id="Destination4" name="Destination4">
				     <?php 
						while($data = dbFetchAssoc($result_12)){
						?>
						<option value="<?php echo $data['off_name']; ?>"><?php echo $data['off_name']; ?></option>
						<?php 
						}//while
					?>
           
            </select>
      </td>
    </tr>
    <?php
	}//while
	?>
    
    <?php
	
	while($data_5 = dbFetchAssoc($result_5)){
	extract($data_5);	
	?>
      <tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">
      <td height= "35px" class="gentxt"><input name="weight6" value="<?php echo $data_5['weight']; ?>" id="weight6" readonly type="text" style="text-transform:uppercase; color:red; font-weight:bold; width:240px"></td>
       <td height="35" class="gentxt"><input name="uptoTwenty" id="uptoTwenty" maxlength="7" type="text" > </td>
       <td>
      		<select id="Destination5" name="Destination5">
				     <?php 
						while($data = dbFetchAssoc($result_13)){
						?>
						<option value="<?php echo $data['off_name']; ?>"><?php echo $data['off_name']; ?></option>
						<?php 
						}//while
					?>
           
            </select>
      </td>
    </tr>
    <?php
	}//while
	?>
    
    <?php
	
	while($data_6 = dbFetchAssoc($result_6)){
	extract($data_6);	
	?>
      <tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">
      <td height= "35px" class="gentxt"><input name="weight7" value="<?php echo $data_6['weight']; ?>" id="weight7" readonly type="text" style="text-transform:uppercase; color:red; font-weight:bold; width:240px"></td>
       <td height="35" class="gentxt"><input name="uptoTwentyfive" id="uptoTwentyfive" maxlength="7" type="text" > </td>
       <td>
      		<select id="Destination6" name="Destination6">
				     <?php 
						while($data = dbFetchAssoc($result_14)){
						?>
						<option value="<?php echo $data['off_name']; ?>"><?php echo $data['off_name']; ?></option>
						<?php 
						}//while
					?>
           
            </select>
      </td>
    </tr>
    <?php
	}//while
	?>
    
    <?php
	
	while($data_7 = dbFetchAssoc($result_7)){
	extract($data_7);	
	?>
      <tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">
      <td height= "35px" class="gentxt"><input name="weight8" value="<?php echo $data_7['weight']; ?>" id="weight8" readonly type="text" style="text-transform:uppercase; color:red; font-weight:bold; width:240px"></td>
       <td height="35" class="gentxt"><input name="uptoThirty" id="uptoThirty" maxlength="7" type="text" > </td>
       <td>
      		<select id="Destination7" name="Destination7">
				     <?php 
						while($data = dbFetchAssoc($result_15)){
						?>
						<option value="<?php echo $data['off_name']; ?>"><?php echo $data['off_name']; ?></option>
						<?php 
						}//while
					?>
           
            </select>
      </td>
    </tr>
    <?php
	}//while
	?>
   	
     <td colspan="7" class="Partext1" bgcolor="#FFFFFF" style="height: 35px">

        <input name="submit" value="Submit" type="submit">
       </td>
       
	  </tbody></table>
      </form>
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
<script language="javascript">
	var input = document.getElementById('mlessthanzero');
	input.onkeydown = function(e){
		var k = e.which;
			if ( (k < 48 || k > 57) && (k < 96 || k > 105)) {
            e.preventDefault();
           return ;
		};
	};
</script>


</body></html>