<?php
$conn=mysqli_connect("localhost","root","","rnftc");
if(!$conn){
    die("Fail");
}
$mobile=$_POST["mobile"];
$Password=$_POST["password"];

$sql="SELECT * FROM rnftc WHERE mobile='$mobile' AND password='$Password'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows( $result)>0){
    echo"You have successfully ordered!";/**header:location="login.html"; */
    exit();
}
else{
    ("wenk wonk");
}
mysqli_close($conn);


?>