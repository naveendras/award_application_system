<?php
session_start();
include('db_config.php');
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
   
} else {
    header( "Location: index.php") ;
}
         $nic = $_SESSION['username'];

?>


 
<!DOCTYPE html >
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Research Award – 2016 | University of Sri Jayewardenepura, Sri Lanka.</title>
</head>

<body  onload="window.print();">
<div class="row">
<table><tr>
            <td><img src="http://research.sjp.ac.lk/award_2017/images/usjp.png" style="width:860px;height:180px;">
            <hr></td>
          </tr></table>
          
<div class="col-md-12">
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
		echo "NIC : ".$_SESSION['username']."</br>";
		echo "Name : " .$data['f_name']." ".$data['s_name']."</br>";
		echo "Faculty : ".$data['faculty']."<br>"."             "."Department : ".$data['department']."<br>";
		
		
		
}
}
}
?>
</div>
</div>
   <!-- /.box -->
          <div class="row">
          
          <div class="col-md-9">
          <div class="box">
            <div class="box-header">
              <h4 class="box-title">An  abstract published in  a local conference proceedings or symposium</h4>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-bordered table-striped">
               <tr>   
             <td width="30%"></td> 
             <td></td> 
              </tr>
              <?php
              
$quary =  "SELECT * FROM local_conf WHERE nic = '$nic' ";
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
    
              echo "<tr>";    
              echo "<td>Name Of the Conference</td>";  
              echo "<td>".$data['conf_name'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td>URL Of the Conference</td>";  
              echo "<td>".$data['conf_url'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td>Title of the Abstract</td>";  
              echo "<td>".$data['title'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td></td>";  
              echo "<td></td>"; 
              echo "</tr>";
                
               
  
    
}
}
}

             ?>
              </table>
            </div>
             
          </div>
          </div>
          </div>
          <div class="row">
          <div class="col-md-9">
          <div class="box">
            <div class="box-header">
              <h4 class="box-title"> An abstract published  a foreign conference proceedings or symposium</h4>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-bordered table-striped">
               <tr>   
             <td width="30%"></td> 
             <td></td> 
              </tr>
              <?php
              
$quary =  "SELECT * FROM foreign_conf WHERE nic = '$nic' ";
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
    
             
              echo "<tr>";    
              echo "<td>Name of the Conference/Symposium</td>";  
              echo "<td>".$data['conf_name'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td>Country where the Conference/Symposium held</td>";  
              echo "<td>".$data['contry'] ."</td>"; 
              echo "</tr>";
               echo "<tr>";    
              echo "<td>URL Of the Conference/Symposium</td>";  
              echo "<td>".$data['conf_url'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td>Title of the Abstract</td>";  
              echo "<td>".$data['title'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td></td>";  
              echo "<td></td>"; 
              echo "</tr>";
                
               
  
    
}
}
}

            ?>
             </table>
            </div>
             
          </div>
          </div>
          </div>
             <div class="row">
          <div class="col-md-9">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> A full paper published in a conference proceedings </h3>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-bordered table-striped">
               <tr>   
             <td width="30%"></td> 
             <td></td> 
              </tr>
              <?php
              
$quary =  "SELECT * FROM conf_pro WHERE nic = '$nic' ";
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
             
              echo "<tr>";    
              echo "<td>Name of the Journal</td>";  
              echo "<td>".$data['journal_name'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td>Title of the Article</td>";  
              echo "<td>".$data['title'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td>Name of the Publisher</td>";  
              echo "<td>".$data['publisher'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td>Official URL of the Conference/Symposium</td>";  
              echo "<td>".$data['conf_url'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td>Type the ISBN, ISSN or ISMN Number</td>";  
              echo "<td>".$data['issn'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td></td>";  
              echo "<td></td>"; 
              echo "</tr>";
                
               
  
    
}
}
}

             ?>
              </table>
            </div>
             
          </div>
          </div>
          </div>
           <div class="row">
          <div class="col-md-9">
          <div class="box">
            <div class="box-header">
              <h4 class="box-title">A full paper  published in a refereed journal</h4>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-bordered table-striped">
               <tr>   
             <td width="30%"></td> 
             <td></td> 
              </tr>
             <?php
              
$quary =  "SELECT * FROM non_index WHERE nic = '$nic' ";
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
             
              echo "<tr>";    
              echo "<td>Name of the Journal</td>";  
              echo "<td>".$data['journal_name'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td>Title of the Article</td>";  
              echo "<td>".$data['title'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td>Name of the Publisher</td>";  
              echo "<td>".$data['publisher'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td>Official URL of the Conference/Symposium</td>";  
              echo "<td>".$data['conf_url'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td>Type the ISBN, ISSN or ISMN Number</td>";  
              echo "<td>".$data['issn'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td></td>";  
              echo "<td></td>"; 
              echo "</tr>";
                
               
  
    
}
}
}

             ?>
              </table>
            </div>
             
          </div>
          </div>
          </div>
             <div class="row">
          <div class="col-md-9">
          <div class="box">
            <div class="box-header">
              <h4 class="box-title">  A full paper  published in any index journal </h4>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-bordered table-striped">
               <tr>   
             <td width="30%"></td> 
             <td></td> 
              </tr>
               <?php
              
$quary =  "SELECT * FROM index_journal WHERE nic = '$nic' ";
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
             
              echo "<tr>";    
              echo "<td>Name of the Journal</td>";  
              echo "<td>".$data['journal_name'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td>Title of the Article</td>";  
              echo "<td>".$data['title'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td>Paste the relevant URL of the Journal Website that shows your Article</td>";  
              echo "<td>".$data['relevant_url'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td>Digital Object Identifier (DOI) number of the Article</td>";  
              echo "<td>".$data['num_arti'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    

              echo "<td>Indexing service and the url</td>";  

              echo "<td>".$data['in_service'] ."</td>"; 

              echo "</tr>";
              echo "<tr>";    
              echo "<td></td>";  
              echo "<td></td>"; 
              echo "</tr>";
                
               
  
    
}
}
}

             ?>
              </table>
            </div>
             
          </div>
          </div>
          </div>
            <div class="row">
          <div class="col-md-9">
          <div class="box">
            <div class="box-header">
              <h4 class="box-title"> Indexed Journal(SCI,SSCI,AHCI)</h4>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-bordered table-striped">
               <tr>   
             <td width="30%"></td> 
             <td></td> 
              </tr>
                <?php
              
$quary =  "SELECT * FROM sc_index WHERE nic = '$nic' ";
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
              
              echo "<tr>";    
              echo "<td>Name of the Journal</td>";  
              echo "<td>".$data['journal_name'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td>Title of the Article</td>";  
              echo "<td>".$data['title'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td>Paste the relevant URL of the Journal Website that shows your Article</td>";  
              echo "<td>".$data['relevant_url'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td>Digital Object Identifier (DOI) number of the Article</td>";  
              echo "<td>".$data['num_arti'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td></td>";  
              echo "<td></td>"; 
              echo "</tr>";
                
               
  
    
}
}
}

             ?>
              </table>
            </div>
             
          </div>
          </div>
          </div>
            <!-- /.box -->
        
           <div class="row">
          <div class="col-md-9">
          <div class="box">
            <div class="box-header">
              <h4 class="box-title">Researcher having the highest citations for the year (Three Awards for each Faculty*)</h4>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-bordered table-striped">
               <tr>   
             <td width="30%"></td> 
             <td></td> 
              </tr>
              <?php
              
$quary =  "SELECT * FROM citations WHERE nic = '$nic' ";
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
              
              echo "<tr>";    
              echo "<td>Number of Citations</td>";  
              echo "<td>".$data['citations'] ."</td>"; 
              echo "</tr>";
             
              
              echo "<tr>";    
              echo "<td></td>";  
              echo "<td></td>"; 
              echo "</tr>";
                
               
  
    
}
}
}

            ?>
              </table>
            </div>
             
          </div>
          </div>
          </div>
             <!-- /.box -->
          <div class="row">
          <div class="col-md-9">
          <div class="box">
            <div class="box-header">
              <h4 class="box-title"> Researcher having the highest h-index for the year (Three Awards for each Faculty*)</h4>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-bordered table-striped">
               <tr>   
             <td width="30%"></td> 
             <td></td> 
              </tr>
              <?php
              
$quary =  "SELECT * FROM hindex WHERE nic = '$nic' ";
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
              
              echo "<tr>";    
              echo "<td>h-Index</td>";  
              echo "<td>".$data['hindex'] ."</td>"; 
              echo "</tr>";
             
              
              echo "<tr>";    
              echo "<td></td>";  
              echo "<td></td>"; 
              echo "</tr>";
                
               
  
    
}
}
}

               ?>
              </table>
            </div>
             
          </div>
          </div>
          </div>
           <div class="row">
          <div class="col-md-9">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Highest Citation Impact (Three awards for each Faculty)</h3>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-bordered table-striped">
               <tr>   
             <td width="30%"></td> 
             <td></td> 
              </tr>
              <?php
              
$quary =  "SELECT * FROM ci_impact WHERE nic = '$nic' ";
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
              
              $cit_16 = $data['cit_16'];
              $cit_15 = $data['cit_15'];
              $cit_14 = $data['cit_14'];

              $impact_num = (($cit_16-$cit_15)+($cit_15-$cit_14))/2 ;

            
              echo "<tr>";    
              echo "<td>Number of Citations_2016</td>";  
              echo "<td>".$data['cit_16'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td>Number of Citations_2015</td>";  
              echo "<td>".$data['cit_15'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td>Number of Citations_2014</td>";  
              echo "<td>".$data['cit_14'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td><strong>Citations impact Number</strong></td>";  
              echo "<td>".$impact_num."</td>"; 
              echo "</tr>";
             


             
              
              echo "<tr>";    
              echo "<td></td>";  
              echo "<td></td>"; 
              echo "</tr>";

              
               
  
    
}
}
}

               ?>
              </table>
            </div>
             
          </div>
          </div>
            <div class="row">
          <div class="col-md-9">
          <div class="box">
            <div class="box-header">
              <h4 class="box-title">Early Career Research Award (less than 40 years)</h4>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-bordered table-striped">
               <tr>   
             <td width="30%"></td> 
             <td></td> 
              </tr>
              <?php
              
$quary =  "SELECT * FROM career_rsh WHERE nic = '$nic' ";
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
              
              echo "<tr>";    
              echo "<td>Name of the Journal</td>";  
              echo "<td>".$data['birthday'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td>Name of the Journal</td>";  
              echo "<td>".$data['journal_name'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td>Title of the Article</td>";  
              echo "<td>".$data['title'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td>Relevant URL of the Thomson Reuters Master Journal List</td>";  
              echo "<td>".$data['re_url'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td>The relevant URL of the Scopus Journal List</td>";  
              echo "<td>".$data['conf_url'] ."</td>"; 
              echo "</tr>";
              echo "<tr>";    
              echo "<td>Digital Object Identifier (DOI) number of the Article</td>";  
              echo "<td>".$data['doi_arti'] ."</td>"; 
              echo "</tr>";
              
              echo "<tr>";    
              echo "<td></td>";  
              echo "<td></td>"; 
              echo "</tr>";
                
               
  
    
}
}
}

            
             ?>
              </table>
              <div>
              <hr>
              <p>I state that the above particulars are true and correct. I confirm above submited details are true and correct. I understand that the decision of the research council is final. </p><br>
              ...........................<br>
              Signature of the applicant </div>
            </div>
             
          </div>
          </div>
          </div>

</body>
</html>

