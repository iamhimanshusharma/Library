<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
</head>
<body>

<?php

function showbookdetails()
{
    

    include('..\dbcon.php');

$boquery = "SELECT * FROM `books` WHERE `course`='$bocourse' AND `branch`='$bobranch' AND `year`='$boyear' AND `semester`='$bosemester'";

$borun = mysqli_query($con,$boquery);

if(mysqli_num_rows($borun) >0)
{
    ?><table border="1" width="100%"><tr><th>Books' Name</th><th>Writers' Name</th><th>Alloting:</th></tr><?php
    while($bodata=mysqli_fetch_assoc($borun))
    {
    ?>
    <tr><td><?php echo $bodata['bookname']; ?></td><td><?php echo $bodata['writername'];?></td><td><label class="switch">
  <input type="checkbox">
  <span class="slider"></span>
</label>
</td></tr>    
    <?php
    }
    ?>
    </table>
<?php
}
else{
    echo "No book found!!!";
}
}
?>

</body>
</html>