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
<h3 align="center">Add Book</h3>
<tr>
<td><select name="course" required id="input">
<option value="1" disabled>Course</option>
<option value="B.Tech." >B.Tech.</option>
</select></td>
</tr>
<tr>
<td><select name="branch" required id="input">
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
<td><select name="year" required id="input">
<option value="0" disabled>Year</option>
<option value="1" >1</option>
<option value="2" >2</option>
<option value="3" >3</option>
<option value="4" >4</option>
</select></td>
</tr>
<tr>
<td><select name="semester" required id="input">
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
<td><input type="textarea" name="bookname" required="required" placeholder="Enter Book Name..." id="input"/></td>
</tr>
<tr>
<td><input type="text" name="bookwriter" required="required" placeholder="Enter Writer's Name..." id="input"/></td>
</tr>
<tr>
<td><input type="submit" value="Submit" name="booksubmit" id="btn"/></td>
</tr>
</table>
</form>
</body>
</html>

<?php

if(isset($_POST['booksubmit']))
{
$bcourse=$_POST['course'];
$bbranch=$_POST['branch'];
$byear=$_POST['year'];
$bsemester=$_POST['semester'];
$bname=$_POST['bookname'];
$bwriter=$_POST['bookwriter'];

include('..\dbcon.php');

$bookquery="INSERT INTO `books`(`course`, `branch`, `year`, `semester`, `bookname`, `writername`) VALUES ('$bcourse','$bbranch','$byear','$bsemester','$bname','$bwriter')";

$bookrun = mysqli_query($con,$bookquery);

if($bookrun)
{
?>
<script>
alert("Book Added Successfully!!!");
window.open('addbook.php','_self');
</script>

<?php
}
else
{echo "no";}
}
?>