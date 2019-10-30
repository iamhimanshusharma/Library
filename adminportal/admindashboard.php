<?php

include('..\header.php');

if(isset($_POST['adminlogin']))
{
    $contact=$_POST['contact'];
    $passwd=$_POST['passwd'];

    include('..\dbcon.php');
    include('function.php');

    showdetails($contact,$passwd);
}

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
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
<table style="text-align:center" align="center">
<tr>
<td><a href="../books/addbook.php" id="btn">To add books</a></td>
</tr>
<tr>
<td><a href="#" id="btn">To delete books</a></td>
</tr>
<tr>
<td><a href="../books/bookavail.php" id="btn">See list of Books</a></td>
</tr>
<tr>
<td><a href="../books/allotbook.php" id="btn">Allotment of Books</a></td>
</tr>
<tr>
<td><a href="../books/allotedbooks.php" id="btn">Show Alloted Books' List</a></td>
</tr>
</table>
</form>

</body>
</html>