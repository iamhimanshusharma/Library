<?php
include_once('header.php');

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            font-family:century gothic;
        }
        .link {
  background-color: purple;
  border-radius:25px;
  border: none;
  color: white;
  padding-top:20px;
  text-align: center;
  text-decoration: none;
  width:100%;
  height:40px;
  display: inline-block;
  font-size: 16px;
  margin-top: 20px;
  cursor: pointer;
  transition-duration: 0.2s;
}
.link:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

    </style>
</head>
<body>
<h2><center>Dashboard</center></h2>
<form action="" method="post">
<table width="40%" align="center">
<tr>
<td><a href="adminportal/admin.php" class="link">Admin</a></td>
</tr>
<tr>
<td><a href="studentportal/studentlogin.php" class="link">Student</a></td>
</tr>
</table>
</form>
</body>
</html>