<!DOCTYPE html>
<html>
<body>
<form method="POST" enctype="multipart/form-data" >
<input type="hidden" name="chk" value="update">
<table border="groove" cellpadding="15px">
<tr>
<td>s.no</td>
<td>Reg.No</td>
<td>name</td>
<td>Present</td>
</tr>

<?php 
include_once("yourconfig.php"); //add here your db config file
extract($_POST);
//After Click on Submit Call this

	
		if($atn_value=="present")
		{
			$upd_qry="UPDATE attendance SET present=present+1 where s_no='".$atn_key."'";
			mysql_query($upd_qry);
		}
		elseif($atn_value=="absent")
		{
			$upd_qry="UPDATE attendance SET absent=absent-1 where s_no='".$atn_key."'";
			mysql_query($upd_qry);
		}
	}



//Default call this
$check_exist_qry="select * from attendance";
$rs=mysql_query($check_exist_qry);
$total_found=mysql_num_rows($rs);
while ($row = mysql_fetch_assoc($rs))
{
	
	echo "<tr><td>";
	echo $row['s.no']."</td><td>";  
	echo $row['Reg.No']."</td><td>";
	echo $row['name']."</td><td>";
	echo $row['Present']."</td>";

	echo "<td> <input type='radio' name='attend[s.no]' value='present' >Present &nbsp; <input type='radio' name='attend[s.no]' value='absent'>absent</td></tr>";
}

echo "</table>";
echo "<input type='submit' name='btnAbsent' value='submit'>";
?>
</form>
</html>
</body>