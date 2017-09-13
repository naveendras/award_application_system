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
	$hindex = $_POST['hindex'];
	
	$nic = $_SESSION['username'];

 $sql = "INSERT INTO hindex (nic, hindex) VALUEs ('$nic', '$hindex' ) ";

if(mysqli_query($conn, $sql)){
   header( "Location: view/h_index.php") ;
}
 else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
// for delete record

if(isset($_POST['delete']))
{
	$id = $_POST['id'];

	$sql = "DELETE FROM hindex WHERE id='$id'";
    
if(mysqli_query($conn, $sql)){
   header( "Location: view/h_index.php") ;
}
 else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>