<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="30">
    <style>
    table{
        border-collapse:collapse;
    }
    </style>
</head>
<body>
<?php

include('..\header.php');
include('..\dbcon.php');

$showquery="SELECT * FROM `allotedbook`";

$showrun=mysqli_query($con,$showquery);

$showrow=mysqli_num_rows($showrun);
?><table border="1" width="100%" style="text-align:center"><tr><th>Student ID</th><th>Course</th><th>Branch</th><th>Year</th><th>Semester</th><th>Book Names</th><tr>
    <a href="..\adminportal\adminlogout.php">Log OUT</a>
    <h3 align="center">Alloted Books' List</h3><?php
if($showrow>0)
{
    while($showdata=mysqli_fetch_assoc($showrun))
    {
    ?>
    
    <tr><td><?php echo $showdata['cid'];?></td><td><?php echo $showdata['bocourse'];?></td><td><?php echo $showdata['bobranch'];?></td><td><?php echo $showdata['boyear'];?></td><td><?php echo $showdata['bosemester'];?></td><td><?php echo $showdata['bonames'];?></td></tr><?php
    }
?><table><?php
}


?>
</body>
</html>