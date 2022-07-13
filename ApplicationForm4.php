<?php
include 'connection.php';

if(isset($_POST['submit'])){
	$DegreeChoice1 = $_POST['DegreeChoice1'];
	$DegreeChoice2 = $_POST['DegreeChoice2'];
	$DegreeChoice3 = $_POST['DegreeChoice3'];

	$query = "INSERT INTO degreechoice(DegreeChoice1,DegreeChoice2,DegreeChoice3)
	VALUES(:DegreeChoice1, :DegreeChoice2,:DegreeChoice3)";

	$query_run = $dbh->prepare($query);

	$query_exec = $query_run->execute(array(":DegreeChoice1"=>$DegreeChoice1, ":DegreeChoice2"=>$DegreeChoice2,":DegreeChoice3"=>$DegreeChoice3));

if($query_exec){
	echo "Successful";
}
else{
	echo "Failed";
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>University of Zimbabwe Undergraduate Application Form</title>
	<style type="text/css">
		body{
			background-color: whitesmoke;
		}
	</style>
</head>
<body>
	<form action="" method="POST">
	<fieldset>
		<legend><font color="blue">PROGRAMME CHOICES</font></legend>
			<label for="DegreeP1">First Preference: Degree Programme</label>
			<div class="input text required"><br>
				<label for="DegreeP1"><font color="red">*</font> </label>
				<input name="DegreeChoice1" size="60" maxlength="255" type="text" >
			</div><br>
			<label for="DegreeP2">Second Preference: Degree Programme</label>
			<div class="input text required"><br>
				<label for="DegreeP2"><font color="red">*</font> </label>
				<input name="DegreeChoice2" size="60" maxlength="255" type="text" >
			</div><br>
			<label for="DegreeP3"> Third Preference: Degree Programme</label>
			<div class="input text required"><br>
				<label for="DegreeP3"><font color="red">*</font> </label>
				<input name="DegreeChoice3" size="60" maxlength="255" type="text" >
			</div><br>
			<button type="submit" name="submit">Save</button>	
	</fieldset>
	</form>
</body>
</html>