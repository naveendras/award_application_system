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
	$conf_name = $_POST['conf_name'];
	$date = $_POST['date'];
	$venue = $_POST['venue'];
	$conf_url = $_POST['conf_url'];
	$title = $_POST['title'];
	$nic = $_SESSION['username'];

 $sql = "INSERT INTO local_conf (nic, conf_name,c_date,venue, conf_url, title) VALUEs ('$nic', '$conf_name','$date','$venue', '$conf_url', '$title' ) ";

if(mysqli_query($conn, $sql)){
   header( "Location: view/local_con.php") ;
}
 else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
// for delete record

if(isset($_POST['delete']))
{
	$id = $_POST['id'];

	$sql = "DELETE FROM local_conf WHERE id='$id'";
    
if(mysqli_query($conn, $sql)){
   header( "Location: view/local_con.php") ;
}
 else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

?>