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
	$journal_name = $_POST['journal_name'];
	$title = $_POST['title'];
	$publisher = $_POST['publisher'];
	$conf_url = $_POST['conf_url'];
	$nic = $_SESSION['username'];

 $sql = "INSERT INTO non_refreed (nic, journal_name, publisher, conf_url, title) VALUEs ('$nic', '$journal_name','$publisher', '$conf_url', '$title' ) ";

if(mysqli_query($conn, $sql)){
   header( "Location: view/non_refreed.php") ;
}
 else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
// for delete record

if(isset($_POST['delete']))
{
	$id = $_POST['id'];

	$sql = "DELETE FROM non_refreed WHERE id='$id'";
    
if(mysqli_query($conn, $sql)){
   header( "Location: view/non_refreed.php") ;
}
 else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

?>