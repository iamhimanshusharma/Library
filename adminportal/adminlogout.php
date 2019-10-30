<?php

$time = time()-86400;
setcookie("logout","",$time);


header('location:admin.php');
?>