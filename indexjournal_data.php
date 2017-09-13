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
	$in_service = $_POST['in_service'];
	
	$nic = $_SESSION['username'];

 $sql = "INSERT INTO index_journal (nic, journal_name, relevant_url, num_arti, in_service, title) VALUEs ('$nic', '$journal_name','$relevant_url','$num_arti','$in_service', '$title' ) ";

if(mysqli_query($conn, $sql)){
   header( "Location: view/index_journal.php") ;
}
 else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
// for delete record

if(isset($_POST['delete']))
{
	$id = $_POST['id'];

	$sql = "DELETE FROM index_journal WHERE id='$id'";
    
if(mysqli_query($conn, $sql)){
   header( "Location: view/index_journal.php") ;
}
 else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

?>