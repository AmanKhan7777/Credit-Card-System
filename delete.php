<?php
include 'connect.php';

$id= $_GET['CardId'];
$query= "delete from credit where CardId ='$CardId'";
$run= mysqli_query($con,$query);
if($run)
{
 echo '<script>alert("Record Delete Successfuly!");</script>';

}
else{
    echo '<script>alert("Unable to delete");</script>';
}

?>