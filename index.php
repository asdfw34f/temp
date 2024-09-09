<?php 
$conn = mysqli_connect("localhost","root","x897ty",`redmine`);
if (!$conn) {
    echo"Connect error: ".mysqli_connect_error();
}
$sql = 'select * from redmine.users;';

$result = mysqli_query($conn,$sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
foreach ($users as $user) {
    print_r($user);
}

?>

<!DOCTYPE html>
<html>

</html>