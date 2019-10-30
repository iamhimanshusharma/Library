
<?php

include_once('..\header.php');

function showbookdetails($bocourse,$bobranch,$boyear,$bosemester)
{

    include('..\dbcon.php');

$boquery = "SELECT * FROM `books` WHERE `course`='$bocourse' AND `branch`='$bobranch' AND `year`='$boyear' AND `semester`='$bosemester'";

$borun = mysqli_query($con,$boquery);

if(mysqli_num_rows($borun) >0)
{
    ?><table border="1" width="100%"><tr><th>Books' Name</th><th>Writers' Name</th></tr><?php
    while($bodata=mysqli_fetch_assoc($borun))
    {
    ?>
    <tr><td><?php echo $bodata['bookname']; ?></td><td><?php echo $bodata['writername'];?></td></tr>    
    <?php
    }
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