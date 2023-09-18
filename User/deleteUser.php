<?php 

$user_id = $_GET['id'];
include_once "../connect_db.php";

$sql = "DELETE FROM user where user_id = $user_id";
if (mysqli_query($conn, $sql)) {
    header("location:showUser.php?message=DeleteSuccess");
} else {
    header("location:showUser.php?message=DeleteFail");
}

?>