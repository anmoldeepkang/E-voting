<center>
    <?php include "const_login_header.php"; ?>
    <h1>Voter has been Registered. <br>
<?php

include "connection.php";

$id=$_REQUEST['q'];
$select1="select name from voter where pin1=$id";
//echo $select1;
$res1=mysqli_query($conn,$select1);
$row1=mysqli_fetch_array($res1);
echo "$row1[0]'s voter pin is ".$id;
include "footer.php";
?>
    </h1></center>