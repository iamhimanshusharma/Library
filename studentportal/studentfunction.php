<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            table{
                border:2px solid purple;
                border-collapse:collapse;
            }
        </style>
    </head>
    <body>
<?php

include_once('..\header.php');

#after login showing details------------------->
function showdetails($stcontact,$stpasswd)
{

    include('..\dbcon.php');


    $squery = "SELECT * FROM `student` WHERE `scontact`='$stcontact' AND `spassword`='$stpasswd'";

    $srun = mysqli_query($con,$squery);

if(mysqli_num_rows($srun) >0)
{

    $sdata=mysqli_fetch_assoc($srun);

    echo "<h3><center>Welcome <h2>".$sdata['sfname']." ".$sdata['slname']."</h2></center></h3>";
    ?><a href="logout.php">Log OUT</a>
    <table border="1" width="80%" align="center">
    <tr><td><b>ID: </b><?php echo $sdata['sid'];?></td></tr>
    <tr><td><b>Name: </b><?php echo $sdata['sfname']." ".$sdata['slname'];?></td></tr>
    <tr><td><b>Course: </b><?php echo $sdata['scourse'];?></td></tr>
    <tr><td><b>Branch: </b><?php echo $sdata['sbranch'];?></td></tr>
    <tr><td><b>Year: </b><?php echo $sdata['syear'];?></td></tr>
    <tr><td><b>Semester: </b><?php echo $sdata['ssemester'];?></td></tr>
    <tr><td><b>Contact No: </b><?php echo $sdata['scontact'];?></td></tr>

    <?php
    #showing alloted books to the student dashboard--------------------------------------------->
$stid=$sdata['sid'];
$saquery="SELECT * FROM `allotedbook`";
$sarun=mysqli_query($con,$saquery);

if(mysqli_num_rows($sarun)>0)
{
    
    $sabquery="SELECT * FROM `allotedbook` WHERE `cid`='$stid'";
    $sabrun=mysqli_query($con,$sabquery);

    if($sabrun == TRUE)
    {
        $sabdata=mysqli_fetch_assoc($sabrun);

    ?>
    <tr><td><h3>Alloted Books:</h3></td></tr>
    <tr><td><?php echo $sabdata['bonames']."<br><br>";?></td></tr></table><?php

    }

}


#to show the list of syllabus books-------------------------------------------->
    echo "<h3>List of your syllaus books:</h3>";

    $stquery="SELECT * FROM `books`";

    $strun=mysqli_query($con,$stquery);

    $strow=mysqli_num_rows($strun);
    if($strow>0)
    {
        $stdata=mysqli_fetch_assoc($strun);

        $stcourse=$sdata['scourse'];
        $stbranch=$sdata['sbranch'];
        $styear=$sdata['syear'];
        $stsemester=$sdata['ssemester'];
        

        $stuquery="SELECT * FROM `books` WHERE `course`='$stcourse' AND `branch`='$stbranch' AND `year`='$styear' AND `semester`='$stsemester'";

        $sturun=mysqli_query($con,$stuquery);

        if(mysqli_num_rows($sturun)>0)
        {
                while($studata=mysqli_fetch_assoc($sturun))
                {
                ?><ul><li type="disk"><?php echo $studata['bookname']."<br/>";?></li></ul><?php
                }
        }
        else{

            echo "Unable to fetch data!";
        }


    }
    else{
        echo "No book yet!";
    }

}

else
{
    ?>
    <script>
    alert('Wrong Fname or Password!!!');
    window.open('studentlogin.php','_self');

    </script>
    <?php
}
}


?>
</body>
</html>