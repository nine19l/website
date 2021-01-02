<?php
session_start();


$ss=$_SESSION['user'];



$connect = mysqli_connect('localhost','sbhnycze_wp778','Malek2002','sbhnycze_wp778');



if(isset($_POST['ikok'])){
$Fname=$_POST['one9'];
$Pname=$_POST['one10'];



$Fname=strip_tags(mysqli_real_escape_string($connect,trim(($Fname))));
$Pname=strip_tags(mysqli_real_escape_string($connect,trim(($Pname))));



$query = "SELECT * FROM $ss WHERE Fname='".$Fname."'AND Pname='".$Pname."'";
$tlb=mysqli_query($connect,$query);
if(mysqli_num_rows($tlb)>0){

    $row = mysqli_fetch_array($tlb);
    $fname=$row['Fname'];
    $pname=$row['Pname'];
    $pn=$row['pn'];
  $pnumber=$row['pnumber'];
  $bday=$row['bday'];
  $bmonth=$row['bmonth'];
  $byear=$row['byear'];
  $cDescription=$row['cDescription'];

 

 
  echo "<script>alert('".$fname." ".$pname." "." "." Phone number : 0" .$pn.$pnumber." "." "."Birthday date : " .$bday."/".$bmonth."/".$byear." ". " "."Description :"." ".$cDescription."')</script>";

    
    
    
    
}

 
}
 $conn->close();


include 'session.php';

 

?>