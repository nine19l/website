<?php 

session_start();


?>
<!DOCTYPE html>
<html lang="en">
    <head>

<meta charset="UTF-8">
<meta name="description" content="main work site">

<title><?php echo$_SESSION['user'];?>_apk</title>
<link href="project_p2.css" rel="stylesheet">

    </head>

<body>
    


<nav>

         <div>
         <div class="aas">  <img class="eg" src="images.png" alt="photo" width="50px" height="50px"> <h1 class="frr"><?php echo$_SESSION['user'];?></h1></div> 
                   <ul class="nav1">
                     
                    <a href="" class="li"> <li>User info</li></a>
                    <a href="" class="li"><li>About</li></a>
                    <a href="" class="li"><li>Logout</li></a>


                    </ul>  
             
         </div>          


</nav>


<div class="body2">
<h1 class="titl">Employee creator</h1>



<fieldset class="casa">

<form action="session1.php" method="POST">

<div class="tarf12">

<div class="tarf1">
    <div class="onee"><label for="one">Nom :</label></div>
    <div><input type="text" name="one" id="one" required></div>
  </div>

  <div class="tarf2">
    <div class="onee2"><label for="one2">Prénom :</label></div>
    <div><input type="text" name="one2" id="one2" required></div>
  </div>

</div>



<div class="tarf34">

  <div class="tarf3">
    
    <div class="onee3"><label for="one3">Phone number :</label></div>
 

<div class="azaz">
<div>
    <select class="one4" name="one4" id="one4">
            
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
      </select>
    </div>

<div>
        <input type="text" name="one3" id="one3" maxlength="8" required></div>
  </div>

</div>
<div>
  <div><label for="one7">Date de naissance :</label></div>
<div class="tarf4">

  <div>
    <select class="one5" name="one5" id="one5">
            
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
  
      </select>
    </div>

<div>

  <select class="one6" name="one6" id="one6">
  <option value="01">01</option>
  <option value="02">02</option>
  <option value="03">03</option>
  <option value="04">04</option>
  <option value="05">05</option>
  <option value="06">06</option>
  <option value="07">07</option>
  <option value="08">08</option>
  <option value="09">09</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>

</select>


</div>

<div>
  <input type="text" class="one7" name="one7" id="one7" maxlength="4" required>
</div>


</div>

</div>




</div>

<div class="tarf56">
<div class="tarf5">
<div><label for="one8">Description :</label></div>
<div><textarea name="one8" id="one8" cols="30" rows="10"></textarea></div>


</div>
<div class="tarf6">

<button id='kikok'  type="submit">Create</button>



</div>
</div>
</form>



<form action="session3.php" method="POST">
<div class="trf">
<div class="tarf78">
<div class="tarf7">

  <div><label for="one9"> NOM</label></div>
 <div> <input type="text" class="one9" name="one9" id="one9" required></div>

</div>

<div class="tarf8">

  <div><label for="one10">PRENOM</label></div>
 <div> <input type="text" class="one10" name="one10" id="one10" required></div>

</div>

</div>

<div>
<button id='ikok' name='ikok'  type="submit">find</button>

</div>


</div>

</form>


</fieldset>

</div>


</body>



</html>