<?php


$connect = mysqli_connect('localhost','sbhnycze_wp778','Malek2002','sbhnycze_wp778');

if(isset($_POST['hhhh'])){
$username=$_POST['zero4'];
$password=$_POST['zero5'];

    $username=strip_tags(mysqli_real_escape_string($connect,trim(($username))));
    $password=strip_tags(mysqli_real_escape_string($connect,trim(($password))));


$query = "SELECT * FROM project_p1 WHERE username='".$username."'";
$tlb=mysqli_query($connect,$query);
if(mysqli_num_rows($tlb)>0){

    $row = mysqli_fetch_array($tlb);
    $password_hash=$row['password'];
    if(password_verify($password,$password_hash)){
       
       session_start();

$_SESSION['user']=$username;

        echo"<script> alert('Sign in succeful , Hello $username')</script> ";
       

    
include 'session.php';


       
       
    }else{
       
         echo"<script> alert('Wrong account , try again ')</script> ";
         $delai=1; 
    $url='http://www.bak1ri.com/project_p1.html';
    header("Refresh: $delai;url=$url");

          
         
         
         
    }
    
    
}
 
}





?>