<?php
include 'connection.php';

if(isset($_POST['submit'])){
	$centre_number = $_POST['centre_number'];
	$candidate_number = $_POST['candidate_number'];
	$exam_body = $_POST['exam_body'];
	$year_written = $_POST['year_written'];
	$exam_session = $_POST['exam_session'];
	$olevel_subject1 = $_POST['olevel_subject1'];
	$grade1 = $_POST['grade1'];
	$olevel_subject2 = $_POST['olevel_subject2'];
	$grade2 = $_POST['grade2'];
	$olevel_subject3 = $_POST['olevel_subject3'];
	$grade3 = $_POST['grade3'];
	$olevel_subject4 = $_POST['olevel_subject4'];
	$grade4 = $_POST['grade4'];
	$olevel_subject5 = $_POST['olevel_subject5'];
	$grade5 = $_POST['grade5'];
	$olevel_subject6 = $_POST['olevel_subject6'];
	$grade6 = $_POST['grade6'];
	$olevel_subject7 = $_POST['olevel_subject7'];
	$grade7 = $_POST['grade7'];
	$olevel_subject8 = $_POST['olevel_subject8'];
	$grade8 = $_POST['grade8'];
	$olevel_subject9 = $_POST['olevel_subject9'];
	$grade9 = $_POST['grade9'];
	$olevel_subject10 = $_POST['olevel_subject10'];
	$grade10 = $_POST['grade10'];

	$query = "INSERT INTO olevelqualification(centre_number,candidate_number,exam_body,year_written,exam_session,olevel_subject1,grade1,olevel_subject2,grade2,olevel_subject3,grade3,olevel_subject4,grade4,olevel_subject5,grade5,olevel_subject6,grade6,olevel_subject7,grade7,olevel_subject8,grade8,olevel_subject9,grade9,olevel_subject10,grade10)
	VALUES(:centre_number, :candidate_number, :exam_body, :year_written, :exam_session, :olevel_subject1, :grade1, :olevel_subject2, :grade2, :olevel_subject3, :grade3, :olevel_subject4, :grade4, :olevel_subject5, :grade5, :olevel_subject6, :grade6, :olevel_subject7, :grade7, :olevel_subject8,  :grade8, :olevel_subject9, :grade9,:olevel_subject10, :grade10)";

	$query_run = $dbh->prepare($query);

	$query_exec = $query_run->execute(array(":centre_number"=>$centre_number, ":candidate_number"=>$candidate_number, ":exam_body"=>$exam_body, ":year_written"=>$year_written, ":exam_session"=>$exam_session, ":olevel_subject1"=>$olevel_subject1, ":grade1"=>$grade1, ":olevel_subject2"=>$olevel_subject2, ":grade2"=>$grade2, ":olevel_subject3"=>$olevel_subject3, ":grade3"=>$grade3, ":olevel_subject4"=>$olevel_subject4, ":grade4"=>$grade4, ":olevel_subject5"=>$olevel_subject5, ":grade5"=>$grade5,":olevel_subject6"=>$olevel_subject6, ":grade6"=>$grade6, ":olevel_subject7"=>$olevel_subject7, ":grade7"=>$grade7,":olevel_subject8"=>$olevel_subject8,  ":grade8"=>$grade8, ":olevel_subject9"=>$olevel_subject9, ":grade9"=>$grade9,":olevel_subject10"=>$olevel_subject10, ":grade10"=>$grade10));

if($query_exec){
	echo "Successful";
	header("Location: ApplicationForm3.php");
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
	<form action="" method="POST">
	<fieldset>
			<center>
			<b>
			<font color="green"> <font color="blue"> SCHOOL EXAMINATION RESULTS</font><br>
			(List in ALL passed subjects and results as they appear on the certificate)</font>
			</b>
			</center>

		</fieldset><br/>

		<fieldset>
		<legend><font color="blue"><b>FILL IN YOUR ORDINARY LEVEL RESULTS</b></font></legend>
		<b>ORDINARY LEVEL RESULTS</b><br><BR>
			<div class="input text required">
					<label for="ApplicantOlevelQualificationCentreNumber">Centre number<font color="red">*</font></label>
				<input name="centre_number" maxlength="30" type="text" />
			</div>
			<div class="input text required">
					<label for="ApplicantOlevelQualificationCandidateNumber">Candidate number<font color="red">*</font></label>
				<input name="candidate_number" maxlength="30" type="text" />
			</div><br>
			<label for="ApplicantOlevelQualificationExamBody<fontColor=red>*</font>">Exam Body<font Color=red>*</font></label>
				<select name="exam_body" label="Exam Body&lt;font color=&quot;red&quot;&gt;*&lt;/font&gt;" >
					<option value="">Please Select</option>
					<option value="ZIMSEC">ZIMSEC</option>
					<option value="CAMBRIDGE">CAMBRIDGE</option>
				</select><br><br>
			<div class="input date">
					<label for="ApplicantOlevelQualificationYearWrittenYear">Year Written</label>
				<select name="year_written" >
					<option selected="selected">2022</option>
					<option >2021</option>
					<option >2020</option>
					<option >2019</option>
					<option >2018</option>
					<option >2017</option>
					<option >2016</option>
				</select>
			</div><br><br>
			<label for="ApplicantOlevelQualificationExamSession">Exam Session</label>
				<select name="exam_session" >
					<option value="">--Please Select--</option>
					<option value="November">November</option>
					<option value="June">June</option>
				</select><br>
			<table>
				<tr>
					<td>
						<label for="ApplicantOlevelQualificationSubject:">Subject: </label>
					</td>
					<td>
						<select name="olevel_subject1" >
							<option value=""></option>
							<option value="Additional Mathematics">Additional Mathematics</option>
							<option value="Agriculture">Agriculture</option>
							<option value="Art">Art</option>
							<option value="Biology">Biology</option>
							<option value="Building Studies">Building Studies</option>
							<option value="Business Studies">Business Studies</option>
							<option value="Chemistry">Chemistry</option>
							<option value="Combined Science">Combined Science</option>
							<option value="Commerce">Commerce</option>
							<option value="Computer Studies">Computer Studies</option>
						</select>
					</td>
					<td>
						<label for="ApplicantOlevelQualificationGrade:">Grade: </label>
					</td>
					<td>
						<select name="grade1" >
							<option value=""></option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
							<option value="U">U</option>
						</select>
					</td>
				<tr>
					<td>
						<label for="ApplicantOlevelQualificationSubject:">Subject: </label>
					</td>
					<td>
						<select name="olevel_subject2" >
							<option value=""></option>
							<option value="Additional Mathematics">Additional Mathematics</option>
							<option value="Agriculture">Agriculture</option>
							<option value="Art">Art</option>
							<option value="Biology">Biology</option>
							<option value="Building Studies">Building Studies</option>
							<option value="Business Studies">Business Studies</option>
							<option value="Chemistry">Chemistry</option>
							<option value="Combined Science">Combined Science</option>
							<option value="Commerce">Commerce</option>
							<option value="Computer Studies">Computer Studies</option>
						</select>
					</td>
					<td>
						<label for="ApplicantOlevelQualificationGrade:">Grade: </label>
					</td><td>
						<select name="grade2" >
							<option value=""></option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
							<option value="U">U</option>
						</select>
				<tr>
					<td>
						<label for="ApplicantOlevelQualificationSubject:">Subject: </label>
					</td>
					<td>
						<select name="olevel_subject3">
							<option value=""></option>
							<option value="Additional Mathematics">Additional Mathematics</option>
							<option value="Agriculture">Agriculture</option>
							<option value="Art">Art</option>
							<option value="Biology">Biology</option>
							<option value="Building Studies">Building Studies</option>
							<option value="Business Studies">Business Studies</option>
							<option value="Chemistry">Chemistry</option>
							<option value="Combined Science">Combined Science</option>
							<option value="Commerce">Commerce</option>
							<option value="Computer Studies">Computer Studies</option>

						</select>

					</td>
					<td>
						<label for="ApplicantOlevelQualificationGrade:">Grade: </label>
					</td>
					<td>
						<select name="grade3" >
							<option value=""></option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
							<option value="U">U</option>
						</select>
					</td>
					<tr>
						<td>
							<label for="ApplicantOlevelQualificationSubject:">Subject: </label>
						</td><td>
							<select name="olevel_subject4">
								<option value=""></option>
								<option value="Additional Mathematics">Additional Mathematics</option>
								<option value="Agriculture">Agriculture</option>
								<option value="Art">Art</option>
								<option value="Biology">Biology</option>
								<option value="Building Studies">Building Studies</option>
								<option value="Business Studies">Business Studies</option>
								<option value="Chemistry">Chemistry</option>
								<option value="Combined Science">Combined Science</option>
								<option value="Commerce">Commerce</option>
								<option value="Computer Studies">Computer Studies</option>

							</select>
						</td>
						<td>
							<label for="ApplicantOlevelQualificationGrade:">Grade: </label>
						</td>
						<td>
							<select name="grade4">
								<option value=""></option>
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="C">C</option>
								<option value="D">D</option>
								<option value="E">E</option>
								<option value="U">U</option>
							</select>
						</td>
					<tr>
						<td>
							<label for="ApplicantOlevelQualificationSubject:">Subject: </label>
						</td>
						<td>
							<select name="olevel_subject5">
								<option value=""></option>
								<option value="Additional Mathematics">Additional Mathematics</option>
								<option value="Agriculture">Agriculture</option>
								<option value="Art">Art</option>
								<option value="Biology">Biology</option>
								<option value="Building Studies">Building Studies</option>
								<option value="Business Studies">Business Studies</option>
								<option value="Chemistry">Chemistry</option>
								<option value="Combined Science">Combined Science</option>
								<option value="Commerce">Commerce</option>
								<option value="Computer Studies">Computer Studies</option>
							</select>
						</td>
						<td>
							<label for="ApplicantOlevelQualificationGrade:">Grade: </label>
						</td>
						<td>
							<select name="grade5">
								<option value=""></option>
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="C">C</option>
								<option value="D">D</option>
								<option value="E">E</option>
								<option value="U">U</option>
							</select>
						</td>
					<tr>
						<td>
							<label for="ApplicantOlevelQualificationSubject:">Subject: </label>
						</td>
						<td>
							<select name="olevel_subject6">
							<option value=""></option>
								<option value="Additional Mathematics">Additional Mathematics</option>
								<option value="Agriculture">Agriculture</option>
								<option value="Art">Art</option>
								<option value="Biology">Biology</option>
								<option value="Building Studies">Building Studies</option>
								<option value="Business Studies">Business Studies</option>
								<option value="Chemistry">Chemistry</option>
								<option value="Combined Science">Combined Science</option>
								<option value="Commerce">Commerce</option>
								<option value="Computer Studies">Computer Studies</option>

							</select>
						</td>
						<td>
							<label for="ApplicantOlevelQualificationGrade:">Grade: </label>
						</td>
						<td>
							<select name="grade6">
								<option value=""></option>
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="C">C</option>
								<option value="D">D</option>
								<option value="E">E</option>
								<option value="U">U</option>
							</select>
						</td>
					<tr>
						<td>
							<label for="ApplicantOlevelQualificationSubject:">Subject: </label>
						</td><td>
							<select name="olevel_subject7">
								<option value=""></option>
								<option value="Additional Mathematics">Additional Mathematics</option>
								<option value="Agriculture">Agriculture</option>
								<option value="Art">Art</option>
								<option value="Biology">Biology</option>
								<option value="Building Studies">Building Studies</option>
								<option value="Business Studies">Business Studies</option>
								<option value="Chemistry">Chemistry</option>
								<option value="Combined Science">Combined Science</option>
								<option value="Commerce">Commerce</option>
								<option value="Computer Studies">Computer Studies</option>
							</select>
						</td>
						<td>
							<label for="ApplicantOlevelQualificationGrade:">Grade: </label>
						</td>
						<td>
							<select name="grade7">
								<option value=""></option>
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="C">C</option>
								<option value="D">D</option>
								<option value="E">E</option>
								<option value="U">U</option>
							</select>
						</td>
					<tr>
						<td>
							<label for="ApplicantOlevelQualificationSubject:">Subject: </label>
						</td>
						<td>
							<select name="olevel_subject8">
							<option value=""></option>
								<option value="Additional Mathematics">Additional Mathematics</option>
								<option value="Agriculture">Agriculture</option>
								<option value="Art">Art</option>
								<option value="Biology">Biology</option>
								<option value="Building Studies">Building Studies</option>
								<option value="Business Studies">Business Studies</option>
								<option value="Chemistry">Chemistry</option>
								<option value="Combined Science">Combined Science</option>
								<option value="Commerce">Commerce</option>
								<option value="Computer Studies">Computer Studies</option>
							</select>
						</td>
						<td>
							<label for="ApplicantOlevelQualificationGrade:">Grade: </label>
						</td>
						<td>
							<select name="grade8">
								<option value=""></option>
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="C">C</option>
								<option value="D">D</option>
								<option value="E">E</option>
								<option value="U">U</option>
							</select></td>
						</td>
					<tr>
						<td>
							<label for="ApplicantOlevelQualificationSubject:">Subject: </label>
						</td>
						<td>
							<select name="olevel_subject9">
								<option value="Additional Mathematics">Additional Mathematics</option>
								<option value="Agriculture">Agriculture</option>
								<option value="Art">Art</option>
								<option value="Biology">Biology</option>
								<option value="Building Studies">Building Studies</option>
								<option value="Business Studies">Business Studies</option>
								<option value="Chemistry">Chemistry</option>
								<option value="Combined Science">Combined Science</option>
								<option value="Commerce">Commerce</option>
								<option value="Computer Studies">Computer Studies</option>
							</select>
						</td>
						<td>
							<label for="ApplicantOlevelQualificationGrade:">Grade: </label>
						</td>
						<td>
							<select name="grade9">
								<option value=""></option>
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="C">C</option>
								<option value="D">D</option>
								<option value="E">E</option>
								<option value="U">U</option>
							</select>
						</td>
					<tr>
						<td>
							<label for="ApplicantOlevelQualificationSubject:">Subject: </label>
						</td>
						<td>
							<select name="olevel_subject10">
								<option value="Additional Mathematics">Additional Mathematics</option>
								<option value="Agriculture">Agriculture</option>
								<option value="Art">Art</option>
								<option value="Biology">Biology</option>
								<option value="Building Studies">Building Studies</option>
								<option value="Business Studies">Business Studies</option>
								<option value="Chemistry">Chemistry</option>
								<option value="Combined Science">Combined Science</option>
								<option value="Commerce">Commerce</option>
								<option value="Computer Studies">Computer Studies</option>

							</select>
						</td>
						<td>
							<label for="ApplicantOlevelQualificationGrade:">Grade: </label>
						</td>
						<td>
							<select name="grade10">
								<option value=""></option>
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="C">C</option>
								<option value="D">D</option>
								<option value="E">E</option>
								<option value="U">U</option>
							</select>
						</td>
			</table><br><br>
			<button type="submit" name="submit">Next >></button>
		</fieldset><br><br>
	</form>
</body>
</html>