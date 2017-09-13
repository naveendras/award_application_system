<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    echo "Please log in first to see this page.";
}

include ('db_config.php');
?>
<?php
$nic = $_SESSION['username'];

$quary =  "SELECT * FROM user_data WHERE nic = '$nic' ";
$result1 = mysqli_query($conn, $quary);

if(mysqli_num_rows($result1) > 0)
{
if ($result1==false)
{
   die(mysqli_error($conn));
      
}

else if(mysqli_num_rows($result1))
 {
   
	while($data = mysqli_fetch_assoc($result1))
	{
		
		$email = $data['email'];
		$subm = $data['subm'];
	
}
}
}
?>
<?php
if(isset($_POST['sub']))
{
 
 $val = 1;
 $nic = $_SESSION['username'];

 $sql = "UPDATE user_data SET sub = '$val' WHERE nic = '$nic' ";
 if($subm==1){

if(mysqli_query($conn, $sql)){



    

 header( "Location: http://websitesoon.com/mailer?email=$email") ;
}
 else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}else
{
	echo "Please visit and save <a href='http://research.sjp.ac.lk/award_2017/view/mydetails.php'>Details of the Applicant page</a>";
}
}
?>
