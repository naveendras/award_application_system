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
	$re_url = $_POST['re_url'];
	$conf_url = $_POST['conf_url'];
	$doi_arti = $_POST['doi_arti'];
	$nic = $_SESSION['username'];

 $sql = "INSERT INTO sci_journal (nic, journal_name, re_url, doi_arti, conf_url, title) VALUES ('$nic', '$journal_name','$re_url','$doi_arti', '$conf_url', '$title' ) ";

if(mysqli_query($conn, $sql)){
   header( "Location: view/sci_journal.php") ;
}
 else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
// for delete record

if(isset($_POST['delete']))
{
	$id = $_POST['id'];

	$sql = "DELETE FROM sci_journal WHERE id='$id'";
    
if(mysqli_query($conn, $sql)){
   header( "Location: view/sci_journal.php") ;
}
 else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

?>