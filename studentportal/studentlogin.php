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
<form action="studentdashboard.php" method="post">
<table align="center">
<tr>
<td><input type="tel" pattern="[0-9]{10}" name="stcontact" required="required" id="input" placeholder="Enter Contact..."/></td>
</tr>
<tr>
<td><input type="password" name="stpasswd" required="required" id="input" placeholder="Enter Password..."/></td>
</tr>
<tr>
<td><input type="submit" value="Student Log In" name="stsubmit" id="btn"/></td>
</tr>
<tr>
<td><h4>Don't have an account?<a href="studentsignup.php" style="font-size:25px">Sign Up</a></h4></td>
</tr>
</table>
</form>
</body>
</html>