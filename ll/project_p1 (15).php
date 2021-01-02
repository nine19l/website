<?php 
//get information
$username = $_POST['zero'];
$password = $_POST['zero2'];
$Email = $_POST['zero3'];


if((!empty($username))&&(!empty($password))&&(!empty($Email))){

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
$hash =password_hash($password,PASSWORD_DEFAULT);
      $sql = "INSERT INTO project_p1 (username,password,Email) VALUE ('$username','$hash','$Email')";


  $sql1 ="CREATE TABLE $username (Fname varchar(50) not null
        ,Pname varchar(50) not null
        ,pn int(2) not null
        ,pnumber int(8) not null
        ,bday int(2) not null
        ,bmonth int(2) not null
        ,byear int(4) not null
        ,cDescription varchar(400) not null)";
        

    $query = mysqli_query($conn,"SELECT * FROM project_p1 where username = '$username'");
    $result = mysqli_num_rows($query);

    if($result>0){

echo"<script> alert('there is a user win this username') </script>";

    }
  
    
    else{if(($conn->query($sql))){
        
        echo"<script> alert('Sign up succeful , Hello $username')</script> ";
        
        
         /*$sql1 ="CREATE TABLE '$username' (Fname varchar(50) not null
        ,Pname varchar(50) not null
        ,pn int(2) not null
        ,pnumber int(8) not null
        ,bday int(2) not null
        ,bmonth int(2) not null
        ,byear int(4) not null
        ,cDescription varchar(400) not null)";*/
          
      if (($conn->query($sql1))){
          
          echo"<script> alert('database created')</script> ";
     }else{echo"<script> alert('database not created')</script>";}

     //Send a mail
mail($Email,'Testing site','Welcome to my test Site .','From: malekpoupi@gmail.com');
    if(mail($Email,'Testing site','Welcome to my test Site .','From: malekpoupi@gmail.com')){
       echo "<script> alert('E-mail sent')</script>"; 
       
       
    }else{
        echo "not work";
    };
}
    
}
    $conn->close();
}


   $delai=1; 
    $url='http://www.bak1ri.com/project_p1.html';
    header("Refresh: $delai;url=$url");














?>