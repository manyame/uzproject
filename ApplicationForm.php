
<?php 

include "connection.php";

   

if(isset($_POST['submit'])) {
    $intakeId = $_POST['intakeId'];
    $applicationYear = $_POST['applicationYear'];
    $applicationType = $_POST['applicationType'];
    $applicantType = $_POST['applicantType'];
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $birth_date = $_POST['birth_date'];
    $title = $_POST['title'];
    $gender = $_POST['gender'];
    $maritalStatus = $_POST['maritalStatus'];
    $placeOfBirth = $_POST['placeOfBirth'];
    $other_place_of_birth = $_POST['other_place_of_birth'];
    $id_number = $_POST['id_number'];
    $passport_number = $_POST['passport_number'];
    $race = $_POST['race'];
    $religion = $_POST['religion'];
    $nationality = $_POST['nationality'];
    $disability = $_POST['disability'];
    $address = $_POST['address'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $city = $_POST['city'];
    $next_of_kin = $_POST['next_of_kin'];
    $home_phone = $_POST['home_phone'];
    $mobile = $_POST['mobile'];
    $email_address = $_POST['email_address'];
    $sponsor = $_POST['sponsor'];

  

    // Count total files

    $countfiles = count($_FILES['files']['name']);

   

    // Prepared statement

    $query = "INSERT INTO personal_details(intake, application_year, application_type, applicant_type, surname, firstname, image,birth_date, title, gender, maritalStatus, placeOfBirth, other_place_of_birth, id_number, passport_number, race,    religion, nationality, disability, address, latitude, longitude, city, next_of_kin, home_phone, mobile, email_address, sponsor ) 
    VALUES(:intakeId, :applicationYear, :applicationType, :applicantType, :surname, :firstname, :target_file, :birth_date, :title, :gender, :maritalStatus, :placeOfBirth, :other_place_of_birth, :id_number, :passport_number, :race, :religion, :nationality, :disability, :address, :latitude, :longitude, :city, :next_of_kin, :home_phone, :mobile, :email_address, :sponsor)";
    
    $query_run = $dbh->prepare($query);

  

    // Loop all files

    for($i = 0; $i < $countfiles; $i++) {

  

        // File name

        $filename = $_FILES['files']['name'][$i];

      

        // Location

        $target_file = './uploads/'.$filename;

      

        // file extension

        $file_extension = pathinfo(

            $target_file, PATHINFO_EXTENSION);

             

        $file_extension = strtolower($file_extension);

      

        // Valid image extension

        $valid_extension = array("png","jpeg","jpg");

      

        if(in_array($file_extension, $valid_extension)) {

  

            // Upload file

            if(move_uploaded_file(

                $_FILES['files']['tmp_name'][$i],

                $target_file)

            ) {
 

                // Execute query

               $query_exec = $query_run->execute(array(":intakeId"=>$intakeId, ":applicationYear"=>$applicationYear, ":applicationType"=>$applicationType, ":applicantType"=>$applicantType, ":surname"=>$surname, ":firstname"=>$firstname, ":target_file"=>$target_file,":birth_date"=>$birth_date, ":title"=>$title, ":gender"=>$gender, ":maritalStatus"=>$maritalStatus, ":placeOfBirth"=>$placeOfBirth, ":other_place_of_birth"=>$other_place_of_birth, ":id_number"=>$id_number, ":passport_number"=>$passport_number, ":race"=>$race, ":religion"=>$religion, ":nationality"=>$nationality, ":disability"=>$disability, ":address"=>$address, ":latitude"=>$latitude, ":longitude"=>$longitude, ":city"=>$city, ":next_of_kin"=>$next_of_kin, ":home_phone"=>$home_phone, ":mobile"=>$mobile, ":email_address"=>$email_address, ":sponsor"=>$sponsor));

            }

        }

    }

     

    echo "File upload successfully";
    header("Location: ApplicationForm2.php"); 
}
?>
 
<!DOCTYPE html>
<html lang="us-en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UZ Undergraduate Application Form</title>
    <style type="text/css">
        body{
            background-color: whitesmoke;
        }
		form{
			padding: 200px;
			padding-top: 0px;
		}
    </style>
</head>
<body;>
    <form class="myForm" action="ApplicationForm.php" method="POST" enctype="multipart/form-data">
        <center>
            <h2>UZ UNDERGRADUATE APPLICATION FORM</h2>
            <font color="purple"><b><p><em>Note (<font color="red">*</font>) indicates fields that cannot be left blank</em></p></font></b>
        </center>

        <fieldset>
        <legend><font color="blue"><b>FILL IN YOUR PERSONAL DETAILS</b></font></legend>

            <label for="IntakeAppliedFor">Intake Applied For</label>
                <select name="intakeId"  required>
                    <option value="" >--Please Select--</option>
                    <option value="1">February</option>
                    <option value="2">August</option>
                </select><br><br>       
            <label for="application_year">Application Year</label>
                <div class="input select">
                    <label for="ApplicationYear"><font color="red">*</font></label>
                        <select name="applicationYear" required>
                            <option value="2023">2023</option>
                        </select>
                </div><br>      
            <label for="application_type">Application Type</label><br>
            <div class="input select required">
                <label for="ApplicationTypeId"><font color="red">*</font></label>
                    <select name="applicationType" required>
                        <option value="">--Please Select--</option>
                        <option value="Normal Entry">Normal Entry</option>
                        <option value="Special Entry">Special Entry</option>
                        <option value="Mature Entry">Mature Entry</option>
                    </select>
            </div><br>
            <label for="applicant_type">Applicant Type</label><br>
            <div class="input select required">
                <label for="applicant_type"><font color="red">*</font></label>
                    <select name="applicantType" required>
                        <option value="">--Please Select--</option>
                        <option value="LOCAL">LOCAL</option>
                        <option value="SADC">SADC</option>
                        <option value="INTERNATIONAL">INTERNATIONAL</option>
                    </select>
            </div><br>
            <label for="familyname">Surname</label>
            <div class="input text required"><br>
                <label for="familyname"><font color="red">*</font> </label>
                <input name="surname" size="60" maxlength="255" type="text" required>
            </div><br>
                <label for="Fname">First Name</label>
                <div class="input text required"><br>
                    <label for="Ftname"><font color="red">*</font></label>
                    <input name="firstname" size="60" maxlength="255" type="text" required>
                </div><br>
                <label for="image">Upload Your  Image</lable>
                <div class="input image required"><br>
                    <label for="image"><font color="red">*</font></label>
                    <input type='file' name='files[]' single />
                </div><br>
                <label for="BirthDay">Birth Date <b><font color="green">#Birth Date Format: Month-Day-Year</font></em></label><b>
                <div class="input text"><br>
                    <label for="BirthDay"><font color="red">*</font></label>
                    <input name="birth_date" size="60" maxlength="255" type="date" required>
                </div><br><br>      
                <label for="person'sTitle">Title</label><br>
                <div class="input select required">
                    <label for="person'sTitle"><font color="red">*</font></label>
                    <select name="title" required>
                        <option value="">Please Select</option>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Sr">Sr</option>
                        <option value="Miss">Miss</option>
                        <option value="Sr">Sr</option>
                    </select>
                </div><br>
                <label for="Sex">Gender</label>
                <div class="input select required"><br>
                    <label for="Sex"><font color="red">*</font></label>
                    <select name="gender" required>
                        <option value="">Please Select</option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                    </select>
                </div><br>
                <label for="MStatus">Marital Status</label>
                <div class="input select required"><br>
                    <label for="MStatus"></label>
                    <select name="maritalStatus" required>
                        <option value="">Please Select</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                    </select>
                </div><br>
            <label for="City Of Birth">City Of Birth</label>
            <div class="input select required">
            <label for="PlaceOfBirth"><font color="red">*</font></label>
            <input name="placeOfBirth" size="60" maxlength="255" type="text" required>
        </div><br>
            <label for="OtherPlaceOfBirth">Other Place Of Birth</label><font color="green"> (Leave blank if N/A)</font>
            <div class="input text"><br>
                <input name="other_place_of_birth" type="text" >
            </div><br>      
            *<u><i>NB</i></u>: Foreign students may provide passport numbers in place of ID numbers</b><br><br>
            <b><font color="green">#National ID Format: 56-3115524R38 (No spaces)</font></em><br><br>
                <label for="IDNumber">National ID</label><b><font color="green">(Leave blank if N/A)</font></b>
            <div class="input text"><br>
                <label for="IdNumber"></label>
                <input name="id_number" size="60" maxlength="255" type="text" >
            </div><br><br>
            <label for="PassportNumber">Passport Number</label>
            <b><font color="green">(Leave blank if N/A)</font></b>
            <div class="input text"><br>
                <label for="PassportNumber"></label>
                <input name="passport_number" size="60" maxlength="255" type="text" >
            </div><br>
            <div class="input select required"><br>
                <label for="ApplicantRace">Race</label>
                <select name="race" class="race" required>
                    <option value="">Please Select</option>
                    <option value="Asian">Asian</option>
                    <option value="Black">Black</option>
                    <option value="White">White</option>
                </select>
            </div><br>
            <label for="ApplicantReligion">Religion</label>
            <div class="input text required"><br>
                <label for="ApplicantReligion"><font color="red">*</font></label>
                <input name="religion" size="60" maxlength="255" type="text" required>
            </div><br>
            <div class="input text required">
                <label for="ApplicantNationality">Country of Origin</label><br>
                <font color="red">*</font>
                <input name="nationality" size="60" maxlength="255" type="text" required>
                </select><br><br>       
                <label for="ApplicantDisability">Disability<font color="red">*</font></label>
                    <select name="disability" required>
                        <option value="">Please Select</option>
                        <option value="None">None</option>
                        <option value="Physically Challenged">Physically Challenged</option>
                        <option value="Visually Impaired">Visually Impaired</option>
                        <option value="Hearing Impaired">Hearing Impaired</option>
                        <option value="Albinism">Albinism</option>
                    </select><br>
                <div class="input textarea required"><br>
                    <label for="ApplicantAddress">Address<br>
                        <font color="red">*</font></label>
                    <textarea name="address" cols="59" rows="2" required></textarea>
                </div><br><br>

                <div>
                    <h3><font color="green">GPS Coordinates</h3></font>
                    <label for="LocationLatitude">Latitude</label>
                    <span class="input text required">
                        <label for="LocationLatitude"><font color="red">*</font></label>
                        <input name="latitude" size="10" maxlength="255" type="text" required>
                    </span>

                    <label for="LocationLongitude">Longitude</label>
                    <span class="input text required">
                        <label for="LocationLongitude"><font color="red">*</font></label>
                        <input name="longitude" size="10" maxlength="255" type="text" required>
                    </span>
                </div>


                <div class="input text required"><br>
                    <label for="ApplicantCity"><font color="black">City</font></label><br>
                    <label for="ApplicantCity"><font color="whitesmoke">*</font> </label>
                    <input name="city" size="60" maxlength="255" type="text" required>
                </div><br>
                <div class="input text required">
                    <label for="NextOfKin">Next Of Kin</label><br>
                    <label for="NextOfKin"><font color="red">*</font> </label>
                    <input name="next_of_kin" size="60" maxlength="255" type="text" required>
                </div><br>
                <label for="NextOfKin'sPhoneNumber:">Next Of Kin's Phone Number:</label>
                <div class="input text required"><br>
                    <label for="Phone"><font color="red">*</font></label>
                    <input name="home_phone" size="60" maxlength="20" type="text" required>
                </div><br>
                <label for="Applicant'sMobileNumber:">Applicant's Mobile Number:</label>
                <div class="input text required"><br><label for="Mobile"><font color="red">*</font></label>
                    <input name="mobile" size="60" maxlength="20" type="text" required>
                </div><br>
                <label for="ApplicantEmailAddress">Email Address</label>
                <div class="input text required"><br>
                    <label for="ApplicantEmailAddress"><font color="red">*</font></label>
                    <input name="email_address" size="60" maxlength="255" type="text" required>
                </div><br>

                <label for="ApplicantSponsor">Specify Sponsor</label><b>
                <div class="input text"><br>
                    <label for="ApplicantSponsor"></label>
                    <label for="ApplicantSponsor"><font color="red">*</font></label>
                    <input name="sponsor" size="60" maxlength="255" type="text" required>
                </div></b><br>
                <button type="submit" name="submit">Next >></button>
            </div>
        </fieldset><br><br>     
    </form>
</body>
</html>
 