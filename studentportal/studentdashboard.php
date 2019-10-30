<?php

include_once('..\header.php');


if(isset($_POST['stsubmit']))
{
    $stcontact=$_POST['stcontact'];

    $stpasswd=$_POST['stpasswd'];
    
    
    include('..\dbcon.php');
    include('studentfunction.php');
    include('bookfun.php');

    showdetails($stcontact,$stpasswd);

}

?>