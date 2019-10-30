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
<form action="" method="post">
<table align="center">
<a href="..\adminportal\adminlogout.php">Log OUT</a>
    <h3 align="center">All Book List</h3>
<tr>
<td><select name="bocourse" required id="input">
<option value="1" disabled>Course</option>
<option value="B.Tech." >B.Tech.</option>
</select></td>
</tr>
<tr>
<td><select name="bobranch" required id="input">
<option value="1" disabled>Block</option>
<option value="CSE" >CSE</option>
<option value="EC" >EC</option>
<option value="EE" >EE</option>
<option value="Civil" >Civil</option>
<option value="BioTech" >BioTech</option>
<option value="ME" >ME</option>
</select></td>
</tr>
<tr>
<td><select name="boyear" required id="input">
<option value="0" disabled>Year</option>
<option value="1" >1</option>
<option value="2" >2</option>
<option value="3" >3</option>
<option value="4" >4</option>
</select></td>
</tr>
<tr>
<td><select name="bosemester" required id="input">
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
<td><input type="submit" value="Submit" name="bosubmit" id="btn"/></td>
</tr>
</table>
</form>
</body>
</html>

<?php

if(isset($_POST['bosubmit']))
{
    $bocourse=$_POST['bocourse'];
    $bobranch=$_POST['bobranch'];
    $boyear=$_POST['boyear'];
    $bosemester=$_POST['bosemester'];

    include('..\dbcon.php');
    include('bookfunction.php');

    showbookdetails($bocourse,$bobranch,$boyear,$bosemester);


}

?>
