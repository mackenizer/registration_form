
<?php

include_once("utilities/validation.php");


$firstname = $_POST['firstname'];
//echo $firstname, "\n";

$lastname = $_POST['lastname'];
//echo $lastname, "\n";

$middlename = $_POST['middlename'];
//echo $middlename, "\n";

$address = $_POST['address'];
//echo $address, "\n";

$date = $_POST['date'];
//echo $date, "\n";
    
$place = $_POST['place'];
//echo $place, "\n";

$gender = $_POST['gender'];
//echo $gender, "\n";

$guardian = $_POST['guardian'];
//echo $guardian, "\n";

$contact = $_POST['contact'];
//echo $contact, "\n";

$status = $_POST['status'];
//echo $status, "\n";

$yearlvl = $_POST['yearlvl'];
//echo $yearlvl, "\n";

$course = $_POST['course'];
//echo $course, "\n";

$schoolyear = $_POST['schoolyear'];
//echo $schoolyear, "\n";

$email = $_POST['email'];
//echo $email, "\n";

if(isEmpty($firstname) && isEmpty($lastname) && isEmpty($middlename) && isEmpty($place) && isEmpty($guardian) && isEmpty($contact) && isEmpty($status) && isEmpty($schoolyear)
 && isCorrectLentgh($firstname) && isCorrectLentgh($lastname)){
    echo "Inputs are good";
}
else{
    echo "Inputs are bad / Must be proper length";
}

if(onlyNumbers($contact) && numberFormat($contact)){
    echo "\nContact number and contact format is good";
}
else{
    echo "\nContact number format is bad";
}

if(notStartWithNumber($firstname) && notStartWithNumber($lastname) && notStartWithNumber($middlename) && notStartWithNumber($guardian) && notStartWithNumber($status)  && notStartWithNumber($email)){
    echo "\nGood kaayo!";
}
else{
    echo "\nShould not start with a number";
}

if(notStartWithSpecialCharacter($firstname) && notStartWithSpecialCharacter($lastname) && notStartWithSpecialCharacter($middlename) && notStartWithSpecialCharacter($guardian) && notStartWithSpecialCharacter($status)){
    echo "\nOKEEY KAAYO";
}
else{
    echo "\nNo DI PWEDE MAG START OG SPECIAL CHARACTER";
}

if (notStartWithHtmlTags($firstname) && notStartWithHtmlTags($lastname) && notStartWithHtmlTags($middlename) &&
notStartWithHtmlTags($guardian) && notStartWithHtmlTags($contact) && notStartWithHtmlTags($status) && notStartWithHtmlTags($schoolyear) && notStartWithHtmlTags($email)){
    echo "\nGOOD BCUZ NO HTMLTAGS";
}
else{
    echo "\nSHOULD NOT BE START WITH HTML TAGS!";
}

if(validEmail($email)){
    echo "\n$email is a valid Email";
}
else{
    echo "\n$email is not a valid Email";
}

// if(validDate($date)){
//     echo "\nValid Date";
// }
// else {
//     echo "\nNot a valid date";
// }



?>