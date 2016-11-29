<?php
$id = $_GET['id'];
$sql = "delete from article where id=$id";
include('../conn.php');
$result = mysqli_query($conn,$sql);
header("location:index.php");