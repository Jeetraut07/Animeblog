<?php
include 'db.php';
if(!isset($_SESSION['id'])){
    header("Location:login.php");
    exit;
}
$id=$_GET['id'];
$user_id=$_SESSION['id'];

$sql=$conn->prepare("delete from anime where id=? and user_id=?");
$sql->bind_param("ii",$id,$user_id);
$sql->execute();
header("Location:dashboard.php");
?>