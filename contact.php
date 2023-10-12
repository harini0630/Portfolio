<?php
$f = $_POST['firstname'];
$l = $_POST['lastname'];
$s = $_POST['sub'];
$m = $_POST['msg'];
$con = mysqli_connect("localhost", "root", "", "portfolio");
$sql = "INSERT INTO contactt (Firstname, Lastname, Subject, Message) VALUES ('$f', '$l', '$s', '$m')";
$r = mysqli_query($con, $sql);
if ($r) {
    echo "ADDED SUCCESSFULLY";
} else {
    echo "NOT ADDED";
}
?>
