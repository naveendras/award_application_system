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
	$cit_16 = $_POST['cit_16'];
  $cit_15 = $_POST['cit_15'];
  $cit_14 = $_POST['cit_14'];
	
	$nic = $_SESSION['username'];

 $sql = "INSERT INTO ci_impact (nic, cit_16, cit_15, cit_14) VALUEs ('$nic', '$cit_16', '$cit_15', '$cit_14' ) ";

if(mysqli_query($conn, $sql)){
   header( "Location: view/citation_impact.php") ;
}
 else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
// for delete record

if(isset($_POST['delete']))
{
	$id = $_POST['id'];

	$sql = "DELETE FROM ci_impact WHERE id='$id'";
    
if(mysqli_query($conn, $sql)){
   header( "Location: view/citation_impact.php") ;
}
 else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

?>