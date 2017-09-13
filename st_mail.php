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



		header( "Location: http://websitesoon.com/mailer/st_mailer?email=$email") ;
	
}
}
}
 
?>

