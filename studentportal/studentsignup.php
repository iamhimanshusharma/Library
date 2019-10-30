<?php
include('..\header.php');
?>


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#input{
        color:black;
        background-color:white;
        font-size:30px;
        width:100%;
        border:2px solid purple;
        border-radius:10px;
        padding-left:10px;
        height:50px;
    }
    #input1{
        color:black;
        background-color:white;
        font-size:30px;
        width:100%;
        border:2px solid purple;
        border-radius:10px;
        padding-left:10px;
        height:50px;
    }

    #btn {
  background-color: purple;
  border-radius:25px;
  border: none;
  color: white;
  padding:20px;
  text-align: center;
  text-decoration: none;
  width:100%;
  display: inline-block;
  font-size: 16px;
  margin-top: 20px;
  cursor: pointer;
  transition-duration: 0.2s;
}
#btn:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body>
<form method="post">
<table align="center">
<tr>
<td><input type="text" name="sfname" required="required" placeholder="First Name" id="input1"/></td>
</tr><tr>
<td><input type="text" name="slname" required="required" placeholder="Last Name" id="input1"/></td>
</tr>
<tr>
<td colspan=2><select name="scourse" required id="input">
<option value="1" disabled>Course</option>
<option value="B.Tech." >B.Tech.</option>
</select></td>
</tr>
<tr>
<td colspan=2><select name="sbranch" required id="input">
<option value="1" disabled>Branch</option>
<option value="CSE" >CSE</option>
<option value="EC" >EC</option>
<option value="EE" >EE</option>
<option value="Civil" >Civil</option>
<option value="BioTech" >BioTech</option>
<option value="ME" >ME</option>
</select></td>
</tr>
<tr>
<td colspan=2><select name="syear" required id="input">
<option value="0" disabled>Year</option>
<option value="1" >1</option>
<option value="2" >2</option>
<option value="3" >3</option>
<option value="4" >4</option>
</select></td>
</tr>
<tr>
<td colspan=2><select name="ssemester" required id="input">
<option value="0" disabled>Year</option>
<option value="1" >1</option>
<option value="2" >2</option>
<option value="3" >3</option>
<option value="4" >4</option>
<option value="5" >5</option>
<option value="6" >6</option>
<option value="7" >7</option>
<option value="8" >8</option>
</select></td>
</tr>
<tr>
<td colspan=2><input type="tel" name="scontact" pattern="[0-9]{10}" required="required" placeholder="Enter Contact..." id="input"/></td>
</tr>
<tr>
<td colspan=2><input type="password" name="spasswd" required="required" placeholder="Choose Password" id="input"/></td>
</tr>
<tr>
<td colspan=2><input type="submit" value="Student Sign Up" name="ssubmit" id="btn"/></td>
</tr>
<tr>
<td><h4>Have an account?<a href="studentlogin.php" style="font-size:25px">Log In</a></h4></td>
</tr>
</table>
</form>
</body>
</html>

<?php

if(isset($_POST['ssubmit']))
{
    $sfname=$_POST['sfname'];
    $slname=$_POST['slname'];
    $scourse=$_POST['scourse'];
    $sbranch=$_POST['sbranch'];
    $syear=$_POST['syear'];
    $ssemester=$_POST['ssemester'];
    $scontact=$_POST['scontact'];
    $spassword=$_POST['spasswd'];

    include('..\dbcon.php');

    $squery="INSERT INTO `student`(`sfname`, `slname`, `scourse`, `sbranch`, `syear`, `ssemester`, `scontact`, `spassword`) VALUES ('$sfname','$slname','$scourse','$sbranch','$syear','$ssemester','$scontact','$spassword')";

    $srun=mysqli_query($con,$squery);
    
    if($srun == TRUE)
    {

       header('location:welcomestudent.php');
    }
    else
    {
        echo "Try again later!";
    }
}


?>

