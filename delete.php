<?php

$connection = mysqli_connect("localhost","root","");

$db = mysqli_select_db($connection,"dbacurd");
$delete = $_GET['del'];

$sql = "delete from student where id = '$delete'";



if(mysqli_query($connection,$sql))
{
    echo '<script>location.replace("intex.php")</script>';
}
else
{
     echo"some thing error" . $connection->error;

}

?>