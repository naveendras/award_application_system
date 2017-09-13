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
	$citations = $_POST['citations'];
	
	$nic = $_SESSION['username'];

 $sql = "INSERT INTO citations (nic, citations) VALUEs ('$nic', '$citations' ) ";

if(mysqli_query($conn, $sql)){
   header( "Location: view/citations.php") ;
}
 else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
// for delete record

if(isset($_POST['delete']))
{
	$id = $_POST['id'];

	$sql = "DELETE FROM citations WHERE id='$id'";
    
if(mysqli_query($conn, $sql)){
   header( "Location: view/citations.php") ;
}
 else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

?>