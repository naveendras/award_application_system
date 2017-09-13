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
	$relevant_url = $_POST['relevant_url'];
	$num_arti = $_POST['num_arti'];
	
	$nic = $_SESSION['username'];

 $sql = "INSERT INTO sc_index (nic, journal_name, relevant_url, num_arti, title) VALUEs ('$nic', '$journal_name','$relevant_url','$num_arti', '$title' ) ";

if(mysqli_query($conn, $sql)){
   header( "Location: view/sci_index.php") ;
}
 else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
// for delete record

if(isset($_POST['delete']))
{
	$id = $_POST['id'];

	$sql = "DELETE FROM sc_index WHERE id='$id'";
    
if(mysqli_query($conn, $sql)){
   header( "Location: view/sci_index.php") ;
}
 else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

?>