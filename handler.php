<?php 
$conn = mysqli_connect("localhost","redmine","root","x897ty");
if (!$conn) {
    echo"Connect error: ".mysqli_connect_error();
}
$sql = 'select firstname from users';

$result = mysqli_query($conn,$sql);
echo $result;

?>