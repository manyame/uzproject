<?php
 include 'connection.php';
 if(isset($_POST['view']))
 {
    

    $query = "SELECT * FROM degreechoice";
    $query_run = $dbh->query($query);

    if($query_run){

        echo '<fieldset style="font-size: 13px;">
	<legend><b>APPLICATION STATUS</b></legend>
	<table>
		<tbody>
			<tr>
				<td style="text-align: right">Full Name:</td>

			
			<tr>
				<td style="text-align: right">Program Choice: 1<br>2<br>3</td>
				
			</tr>
			<tr><td style="text-align: right">Application Status:</td>
				</tr>
	
              ';
        while($row = $query_run->fetch(PDO::FETCH_OBJ)){
            echo'<tr>
                    <td style="text-align: left; padding-left: 10px">'.$row->firstname.' </td>
                    <td style="text-align: left; padding-left: 10px">
					<b>'.$row->DegreeChoice1.'</b><br>
					<b>'.$row->DegreeChoice2.'</b><br>
					<b>'.$row->DegreeChoice3.'</b><br>
				</td>
            <td style="text-align: left; padding-left: 10px"></td>
                </tr>
                ';
        }//end of while loop

        echo '	</tbody>
				</table>
				</fieldset>';

    }
    else
    {
        echo '<script> alert("No Record Found")</script>';
    }

 }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		View Status
	</title>
</head>
<body>
	<form action="" method="POST">
		<fieldset>
			<div class="input required">
				<label for="id">National ID</label><br>
				<input type="text" name="national_id" id="id"><br><br>
				<label for="dob">Date Of Birth</label><br>
				<input type="Date" name="birth_date" id="dob"><br><br>
				<label for="intake_id">Intake</label>
				<select name="national_id" id="intake_id">
					<option value="">Select</option>
					<option value="1">February</option>
					<option value="2">August</option>
				</select>
			</div><br><br>
			<div>
		<fieldset style="font-size: 13px;">
	<legend><b>APPLICATION STATUS</b></legend>
	<table>
		<tbody>
			<tr>
				<td style="text-align: right">Full Name:</td>
				<td style="text-align: left; padding-left: 10px">Mr Mawudzwa , Brian</td>
			</tr>
			<tr>
				<td style="text-align: right">Program Choice: 1<br>2<br>3</td>
				<td style="text-align: left; padding-left: 10px">
					<b>BSC HONS  AUDIT AND RISK MANAGEMENT(HARMGT)</b><br>
					<b>BSC HONS. SUPPLY CHAIN MANAGEMENT(HSCM)</b><br>
					<b>BSC HONS. BUSINESS ENTERPRISE DEVELOPMENT(HBED)</b><br>
				</td>
			</tr>
			<tr><td style="text-align: right">Application Status:</td>
				<td style="text-align: left; padding-left: 10px"></td></tr>
		</tbody>
	</table>
</fieldset>
			</div>
		</fieldset>
	</form>
</body>
</html>