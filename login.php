<?php
session_start();
include('db_config.php');

if(isset($_POST['code']))
{
$nic = $_POST['nic'];


$quary = "SELECT * FROM user_data WHERE nic = '$nic'";
$result = mysqli_query($conn, $quary);
while($data = mysqli_fetch_assoc($result))
	{
		
		$sb_id = $data['sub'];
	}

if ($result==false)
{
    die(mysqli_error($conn));
}

else if(mysqli_num_rows($result))
 {
 	if($sb_id == 1){
 		header( "Location: view/f_submit.php") ;
 	}else

  header( "Location: view/mydetails.php") ;
 }else

 {
   echo "error nic";
 }

 $count=mysqli_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1){
    
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $nic;
}
}
 ?>