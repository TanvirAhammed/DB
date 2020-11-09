<?php

    require_once "./db/insert.php";
    $firstName="";
    $lastName="";
    $email="";
    $gender="";

    if(isset($_POST['insert'])){
        $firstName=$_POST['firstname'];
        $lastName=$_POST['lastname'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        insertPerson($firstName,$lastName,$email,$gender);
    }
?>


<!DOCTYPE html>
<html>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">  
    <fieldset>			
			<legend align="center"> Registration </legend>
<table style="width:100 ">
    			
			
    <tr>
    <td><label for='fram'>First Name:</label><br></td>
    <td><input type='text' id='textbox' name="firstname"></td>    
    </tr> 
    
    <tr>
    <td><label for='fram'>Email:</label><br></td>
    <td><input type='text' id='textbox' name="email" required></td>    
    </tr>
    
    <tr>
    <td><label for='fram'>Last name:</label><br></td>
    <td><input type='text' id='textbox' name="lastname"></td>    
    </tr>
    
<!--
    <tr>
    <td><label for='fram'>Password:</label><br></td>
    <td><input type='password' id='textbox'></td>    
    </tr>
    
    <tr>
    <td><label for='fram'>Confrim Password:</label><br></td>
    <td><input type='password' id='textbox'></td>    
    </tr>
-->
    
   

    <tr>
    <td><label for='fram'>Gender:</label><br></td>
    <td><input type='radio' id='Male' name="gender" value='Male'>Male</td>
    <td><input type='radio' id='Female' name="gender" value='Female'>Female</td>
    <td><input type='radio' id='Others' name="gender" value='Others'>Others</td>
    </tr>
  <!--  
    
    <tr>
    <td><input type="date"><br></td>
    </tr>
    -->
    <tr>
    <td><input type='submit' name="insert"></td>
<!--    <td><input type='reset' ></td>    -->
    </tr>

       
</table>
    </fieldset>
</body>
</html>