<?php
include 'connection.php';

if(isset($_POST['submit'])){
	$centre_number = $_POST['centre_number'];
	$candidate_number = $_POST['candidate_number'];
	$exam_body = $_POST['exam_body'];
	$year_written = $_POST['year_written'];
	$exam_session = $_POST['exam_session'];
	$alevel_subject1 = $_POST['alevel_subject1'];
	$grade1 = $_POST['grade1'];
	$alevel_subject2 = $_POST['alevel_subject2'];
	$grade2 = $_POST['grade2'];
	$alevel_subject3 = $_POST['alevel_subject3'];
	$grade3 = $_POST['grade3'];
	$alevel_subject4 = $_POST['alevel_subject4'];
	$grade4 = $_POST['grade4'];
	$alevel_subject5 = $_POST['alevel_subject5'];
	$grade5 = $_POST['grade5'];

	$query = "INSERT INTO alevelqualification(centre_number,candidate_number,exam_body,year_written,exam_session,alevel_subject1,grade1,alevel_subject2,grade2,alevel_subject3,grade3,alevel_subject4,grade4,alevel_subject5,grade5)
	VALUES(:centre_number, :candidate_number, :exam_body, :year_written, :exam_session, :alevel_subject1, :grade1, :alevel_subject2, :grade2, :alevel_subject3, :grade3, :alevel_subject4, :grade4, :alevel_subject5, :grade5)";

	$query_run = $dbh->prepare($query);

	$query_exec = $query_run->execute(array(":centre_number"=>$centre_number, ":candidate_number"=>$candidate_number, ":exam_body"=>$exam_body, ":year_written"=>$year_written, ":exam_session"=>$exam_session, ":alevel_subject1"=>$alevel_subject1, ":grade1"=>$grade1, ":alevel_subject2"=>$alevel_subject2, ":grade2"=>$grade2, ":alevel_subject3"=>$alevel_subject3, ":grade3"=>$grade3, ":alevel_subject4"=>$alevel_subject4, ":grade4"=>$grade4, ":alevel_subject5"=>$alevel_subject5, ":grade5"=>$grade5));

	if($query_exec){
		echo "Successful";
		header("Location: ApplicationForm4.php");
	}
	else
	{
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
	<br><br>
	<form action="" method="POST">
	<fieldset>
		<legend><font color="blue"><b>FILL IN YOUR A LEVEL RESULTS</b></font></legend>
		<u><b>ADVANCED LEVEL RESULTS</u></b><br><BR>
		
			<div class="input text required">
				<label for="ApplicantAlevelQualificationCentreNumber">Centre number<font color="red">*</font></label>
				<input name="centre_number" maxlength="30" type="text"/>
			</div>
			<div class="input text required">
				<label for="ApplicantAlevelQualificationCandidateNumber">Candidate number<font color="red">*</font></label>
				<input name="candidate_number" maxlength="30" type="text"/>
			</div><br>
			<label for="ApplicantAlevelQualificationExamBody<fontColor=red>*</font>">Exam Body<font Color=red>*</font></label>
				<select name="exam_body" label="Exam Body&lt;font color=&quot;red&quot;&gt;*&lt;/font&gt;">
					<option value="">Please Select</option>
					<option value="ZIMSEC">ZIMSEC</option>
					<option value="CAMBRIDGE">CAMBRIDGE</option>
					<option value="EDEXCEL">EDEXCEL</option>
				</select><br><br>
			<div class="input date required">
				<label for="ApplicantAlevelQualificationYearWrittenYear">Year Written</label>
				<select name="year_written">
					<option value="2022" selected="selected">2022</option>
					<option value="2021">2021</option>
					<option value="2020">2020</option>
					<option value="2019">2019</option>
					<option value="2018">2018</option>

				</select>
			</div><br>
			<label for="ApplicantAlevelQualificationExamSession">Exam Session</label>
				<select name="exam_session">
					<option value="">--Please Select--</option>
					<option value="Nov">November</option>
					<option value="Jun">June</option>
				</select><br><br>
			<table>
				<tr>
					<td>
						<label for="ApplicantAlevelQualificationSubject:">Subject: </label>
					</td>
					<td>
						<select name="alevel_subject1">
							<option value=""></option>
							<option value="Business Enterprsie Skills">Business Enterprsie Skills</option>
							<option value="Computing">Computing</option>
							<option value="Pure Mathematics">Pure Mathematics</option>
							<option value="Statistics">Statistics</option>
						</select>
					</td>
					<td>
						<label for="ApplicantAlevelQualificationGrade:">Grade: </label>
					</td><td><select name="grade1">
						<option value=""></option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="O">O</option>
						<option value="F">F</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<label for="ApplicantAlevelQualificationSubject:">Subject: </label>
				</td>
				<td>
					<select name="alevel_subject2">
							<option value=""></option>
							<option value="Business Enterprsie Skills">Business Enterprsie Skills</option>
							<option value="Computing">Computing</option>
							<option value="Pure Mathematics">Pure Mathematics</option>
							<option value="Statistics">Statistics</option>
						</select>
					</td>
					<td>
						<label for="ApplicantAlevelQualificationGrade:">Grade: </label>
					</td>
					<td>
						<select name="grade2">
							<option value=""></option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
							<option value="O">O</option>
							<option value="F">F</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label for="ApplicantAlevelQualificationSubject:">Subject: </label>
					</td>
					<td>
						<select name="alevel_subject3">
							<option value=""></option>
							<option value="Business Enterprsie Skills">Business Enterprsie Skills</option>
							<option value="Computing">Computing</option>
							<option value="Pure Mathematics">Pure Mathematics</option>
							<option value="Statistics">Statistics</option>					
						</select>
					</td>
					<td>
						<label for="ApplicantAlevelQualificationGrade:">Grade: </label>
					</td>
					<td>
						<select name="grade3">
							<option value=""></option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
							<option value="O">O</option>
							<option value="F">F</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label for="ApplicantAlevelQualificationSubject:">Subject: </label>
					</td>
					<td>
						<select name="alevel_subject4">
							<option value=""></option>
							<option value="Business Enterprsie Skills">Business Enterprsie Skills</option>
							<option value="Computing">Computing</option>
							<option value="Pure Mathematics">Pure Mathematics</option>
							<option value="Statistics">Statistics</option>
						</select>
					</td>
					<td>
						<label for="ApplicantAlevelQualificationGrade:">Grade: </label>
					</td>
					<td>
						<select name="grade4">
							<option value=""></option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
							<option value="O">O</option>
							<option value="F">F</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label for="ApplicantAlevelQualificationSubject:">Subject: </label>
					</td>
					<td>
						<select name="alevel_subject5">
							<option value=""></option>
							<option value="Business Enterprsie Skills">Business Enterprsie Skills</option>
							<option value="Computing">Computing</option>
							<option value="Pure Mathematics">Pure Mathematics</option>
							<option value="Statistics">Statistics</option>
						</select>
					</td>
					<td>
						<label for="ApplicantAlevelQualificationGrade:">Grade: </label>
					</td>
					<td>
						<select name="grade5">
							<option value=""></option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
							<option value="O">O</option>
							<option value="F">F</option>
						</select>
					</td>
				</tr>
			</table><br><br>
			<button type="submit" name="submit">Next >></button>
		</fieldset><br><br>
	</form>
</body>
</html>