<?php
$conn=mysqli_connect("localhost", "root","","project");
if($conn){
    echo "Connected";
}
else{
    echo "Failed";
}

$username=$_POST['username'];
$password=$_POST['password'];

$data = "INSERT INTO login VALUE ('', '$username', '$password') ";
$check = mysqli_query($conn, $data);

if($check){
    echo "Data sended";
}
else{
    echo "Data couldnt send";
}

?>
