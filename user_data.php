<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    echo "Please log in first to see this page.";
}

include ('db_config.php');

if(isset($_POST['sub']))
{
	$title = $_POST['title'];
	$sname = $_POST['surname'];
	$fname = $_POST['firstname'];
	$gender = $_POST['sex'];
	$em_no = $_POST['emp_num'];
	$contact_num1 = $_POST['phon_land'];
	$contact_num2 = $_POST['phon_mobile'];
	$email = $_POST['email'];
	$faculty = $_POST['faculty'];
	$department = $_POST['department'];
	$url_gs = $_POST['url_gs'];
    $nic = $_SESSION['username'];
    $subm = 1;

 $sql = "UPDATE user_data SET title = '$title', s_name = '$sname', f_name = '$fname', sex = '$gender', emp_num ='$em_no', contact_1 = '$contact_num1', contact_2 = '$contact_num2', email = '$email', faculty = '$faculty', department = '$department', url_gs ='$url_gs', subm = '$subm'
      WHERE nic = '$nic' ";

if(mysqli_query($conn, $sql)){
  header( "Location: st_mail.php") ;
}
 else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>