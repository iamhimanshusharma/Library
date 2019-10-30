<?php
include('..\header.php');
?>


<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    table{
        border:2px solid purple;
        border-collapse:collapse;
    }
    #input{
        color:black;
        background-color:white;
        font-size:15px;
        width:100%;
        border:2px solid purple;
        border-radius:10px;
        padding-left:10px;
        height:40px;
    }
    #btn {
  background-color: purple;
  border-radius:25px;
  border: none;
  color: white;
  padding:10px;
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
<form method="post">
<table border="1" align="center">
<a href="..\adminportal\adminlogout.php">Log OUT</a>
<h3 align="center">Allotment of Books</h3>
<tr>
<td><input type="tel" name="sid" pattern="[0-9]{}" placeholder="Student ID" id="input"></td>
<tr>
<tr>
<td><input type="submit" name="idsubmit" value="Student ID" id="btn"></td>
<tr>

</table>
</form>
</body>

<?php



if(isset($_POST['idsubmit']))
{
    $id=$_POST['sid'];
    include('..\dbcon.php');
    include('..\studentportal\bookfun.php');

    $idquery="SELECT * FROM `student` WHERE `sid`='$id'";

    $idrun=mysqli_query($con,$idquery);
    if(mysqli_num_rows($idrun) >0)
    {
        $iddata=mysqli_fetch_assoc($idrun);
        ?>
        <table border="1" align="center" width="70%">
        <tr><td>Name: <?php echo $iddata['sfname']." ".$iddata['slname'];?></td></tr>
        <tr><td>Course:  <?php echo $iddata['scourse'];?></td></tr>
        <tr><td>Branch:<?php echo $iddata['sbranch'];?></td></tr>
        <tr><td>Year: <?php echo $iddata['syear'];?></td></tr>
        <tr><td>Semester: <?php echo $iddata['ssemester'];?></td></tr>
        </table>
   <br/>
        <?php
    
    $stquery="SELECT * FROM `books`";

    $strun=mysqli_query($con,$stquery);

    $strow=mysqli_num_rows($strun);
    if($strow>0)
    {
        $stdata=mysqli_fetch_assoc($strun);

        $stcourse=$iddata['scourse'];
        $stbranch=$iddata['sbranch'];
        $styear=$iddata['syear'];
        $stsemester=$iddata['ssemester'];
        

        $stuquery="SELECT * FROM `books` WHERE `course`='$stcourse' AND `branch`='$stbranch' AND `year`='$styear' AND `semester`='$stsemester'";

        $sturun=mysqli_query($con,$stuquery);
        ?>
        <form method="post">
        <table border="1" width="80%" align="center">
        <tr><th>Available Books: Course-<?php echo $stcourse;?> & Branch-<?php echo $stbranch;?></th><th>Writer Name</th></tr><?php
        if(mysqli_num_rows($sturun)>0)
        {
            
                while($studata=mysqli_fetch_assoc($sturun))
                {
                    ?>
                    
                    <tr>
                    <td><input type="checkbox" id="allotbook" name="allotbook[]" value="<?php echo $studata['bookname'];?>"><?php echo $studata['bookname'];?></td>
                    <td><?php echo $studata['writername'];?></td>    
                </tr>
                    <?php
                }
                ?>
                <tr><td colspan=2 align="center"><input type="tel" name="cid" pattern="[0-9]{}" placeholder="Confirm ID Number..." required="required" id="input"></td></tr>

                <tr><td colspan=2 align="center"><input type="submit" name="allot" value="allot"  id="btn"></td></tr>
                </table>
                <?php
                
            }
        }  
            else
            {
                echo "error";
            }
    }
    else
{
    echo "No data found!";
}
    
#book alloting --------------------------------------------------------->
if(isset($_POST['allot']))
                {
                    
                    include('..\dbcon.php');

                    $alquery="SELECT * FROM `books`";

                    $alrun=mysqli_query($con,$alquery);

                    if(mysqli_num_rows($alrun)>0)
                    {
                    
                    $aldata=mysqli_fetch_assoc($alrun);

                    $cid=$_POST['cid'];    
                    $boocourse=$aldata['course'];
                    $boobranch=$aldata['branch'];
                    $booyear=$aldata['year'];
                    $boosemester=$aldata['semester'];
                    $booname=$_POST['allotbook'];
                    $boosepname=implode(" & ", $booname);

                   include('..\dbcon.php');

                   $booquery="INSERT INTO `allotedbook`(`cid`, `bocourse`, `bobranch`, `boyear`, `bosemester`, `bonames`) VALUES ('$cid','$boocourse','$boobranch','$booyear','$boosemester','$boosepname')";


                   if(mysqli_query($con,$booquery) == TRUE)
                   {

                    echo "You have booked two books: ".$boosepname;
                   }
                   else
                   {
                       echo "Sorry You have already booked!";
                   }
                 }

                
                }
 
}

?>


</html>