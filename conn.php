<?php
$con = mysqli_connect('sql12.freesqldatabase.com','sql12609889','qlFhd5Hsn3','sql12609889');
if($con)
{
    echo"connected";
}
else{
    echo"notconnected";
}
$email=$_POST['email'];
$pass=$_POST['pass'];
$sql="INSERT INTO login(`email`, `password`) VALUES ('$email','$pass')";
$v=mysqli_query($con,$sql);
if($v)
{
    echo"inserted into database";
}
else{
    echo"not inserted into database";
}
?>