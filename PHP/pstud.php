<?php

$id = $_POST["txtid"];
$name = $_POST["txtname"];
$city = $_POST["txtcity"];
$no = $_POST["txtno"];
$email = $_POST["txtemail"];
$action = $_POST["submit"];	
$cn = new mysqli("localhost","root","","student");



if($action=="insert")
{
 $insert = "INSERT INTO `stud` (`id`, `name`, `city`, `no`, `email`) VALUES ('$id', '$name', '$city', '$no', '$email')";
 $result = mysqli_query($cn,$insert);
 header("location:stud.php");
}
else if($action=="update")
{
 $update = "UPDATE `stud` SET `name`='$name',`city`='$city',`no`='$no',`email`='$email' WHERE `id`=$id";
 $result = mysqli_query($cn,$update);
 header("location:stud.php");
}


if(isset($_GET['id']))
{
 $id=$_GET['id'];

 $delete = "DELETE FROM `stud` WHERE `id`= $id "; 
 $result = mysqli_query($cn,$delete);
 header("location:stud.php");
}

?>