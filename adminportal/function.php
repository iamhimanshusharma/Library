<?php

function showdetails($contact,$passwd)
{

    include('..\dbcon.php');


$query = "SELECT * FROM `admin` WHERE `contact`='$contact' AND `password`='$passwd'";

$run = mysqli_query($con,$query);

if(mysqli_num_rows($run) >0)
{

    $data=mysqli_fetch_assoc($run);
    ?><a href="adminlogout.php">Log OUT</a><?php
    echo "<h3><center>Welcome <h2><i>".$data['fname']." ".$data['lname']."</i></h2></center></h3>";
}
else{
    ?>
    <script>
    alert('Wrong Fname or Password!!!');
    window.open('admin.php','_self');

    </script>
    <?php
}
}
?>