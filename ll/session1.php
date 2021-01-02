<?php 
session_start();


$tbn= $_SESSION['user'];

//get information
$Fname = $_POST['one'];
$Pname = $_POST['one2'];
$pn = $_POST['one4'];
$pnumber = $_POST['one3'];
$bday = $_POST['one5'];
$bmonth = $_POST['one6'];
$byear = $_POST['one7'];
$cDescription = $_POST['one8'];





if((!empty($Fname))&&(!empty($Pname))&&(!empty($cDescription))){

//SQL information
$dbhost ="localhost";
$dbuser="sbhnycze_wp778";
$dbpassword ="Malek2002";
$dbname ="sbhnycze_wp778";}
else{
    echo"fill ";
}
//create contact

$conn = new mysqli($dbhost,$dbuser,$dbpassword,$dbname);

if(mysqli_connect_error()){

echo mysqli_connect_errno().mysqli_connect_error();

}else{
//Connect SQL

      $sql = "INSERT INTO $tbn (Fname,Pname,pn,pnumber,bday,bmonth,byear,cDescription) VALUE ('$Fname','$Pname','$pn','$pnumber','$bday','$bmonth','$byear','$cDescription')";

$conn->query($sql);


      $conn->close();
}

 $delai=1; 
    $url='http://www.bak1ri.com/session.php';
    header("Refresh: $delai;url=$url");


?>