<?php
include('..\header.php');
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
.input{
        color:black;
        background-color:white;
        font-size:30px;
        width:100%;
        border:2px solid purple;
        border-radius:10px;
        padding-left:10px;
        height:50px;
    }
    .input1{
        color:black;
        background-color:white;
        font-size:30px;
        width:100%;
        border:2px solid purple;
        border-radius:10px;
        padding-left:10px;
        height:50px;
    }

    .btn {
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
.btn:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body>
<form method="post">
<table align="center">
<tr>
<td><input type="text" name="afname" required="required" placeholder="First Name" class="input1"/></td>
</tr>
<tr>
<td><input type="text" name="alname" required="required" placeholder="Last Name" class="input1"/></td>
</tr>
<tr>
<td colspan=2><select name="ablock" required class="input">
<option value="1" disabled>Block</option>
<option value="A" >A</option>
<option value="B" >B</option>
<option value="C" >C</option>
<option value="D" >D</option>
<option value="E" >E</option>
<option value="F" >F</option>
</select></td>
</tr>

<tr>
<td colspan=2><input type="tel" name="acontact" pattern="[0-9]{10}" required="required" placeholder="Contact Number..." class="input"/></td>
</tr>

<tr>
<td colspan=2><input type="password" name="apasswd" required="required" placeholder="Choose Password" class="input"/></td>
</tr>
<tr>
<td colspan=2 ><input type="submit" value="Admin Sign Up" name="asubmit" class="btn"/></td>
</tr>
<tr>
<td><h4>Have an account?<a href="admin.php" style="font-size:25px">Log In</a></h4></td>
</tr>
</table>
</form>
</body>
</html>

<?php

if(isset($_POST['asubmit']))
{
    $afname=$_POST['afname'];
$alname=$_POST['alname'];
$ablock=$_POST['ablock'];
$acontact=$_POST['acontact'];
$apasswd=$_POST['apasswd'];



include('..\dbcon.php');

$aquery="INSERT INTO `admin`(`fname`, `lname`, `block`, `contact`, `password`) VALUES ('$afname','$alname','$ablock','$acontact','$apasswd')";

$arun = mysqli_query($con,$aquery);

if($arun == TRUE)
{
    header('location:welcomeadmin.php');
}
else
{
    echo "This contact number already exist!<br/>";
    ?><a href="#">Forgot password?</a><?php
}


}
?>