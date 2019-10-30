
<?php

include_once('..\header.php');

function showbookdetails($bocourse,$bobranch,$boyear,$bosemester)
{

    include('..\dbcon.php');

$boquery = "SELECT * FROM `books` WHERE `course`='$bocourse' AND `branch`='$bobranch' AND `year`='$boyear' AND `semester`='$bosemester'";

$borun = mysqli_query($con,$boquery);

if(mysqli_num_rows($borun) >0)
{
    ?><table border="1" style="text-align:center" width="100%"><tr><th>Books' Name</th><th>Writers' Name</th><th>Delete</th></tr><?php
    while($bodata=mysqli_fetch_assoc($borun))
    {
    ?>
    <tr><td><?php echo $bodata['bookname']; ?></td><td><?php echo $bodata['writername'];?></td><td><a href="deletefucntion.php?sid=<?php echo $bodata['bookid'];?>">Delete</a></td></tr>    
    <?php
    }
    $bid=$_REQUEST['sid'];

    $dquery="DELETE FROM `books` WHERE `bookid`='$bid'";
    $drun=mysqli_query($con,$dquery);
   

    ?>
    </table>
<?php
}
else{
    ?>
    <script>
    alert('No Data Found!');
    window.open('bookavail.php','_self');

    </script>
    <?php
}
}
?>