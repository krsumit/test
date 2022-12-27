<?php
$link = mysqli_connect("localhost","root","pass","test");
if($link==false){
    die("error".mysqli_connect_error());
    
}
$sql = "insert INTO  User (username,repo) Value ('sumit','/testfile')";
if(mysqli_query($link,$sql)){
    echo "sucessfull insert record";
    
}else{
    echo "erro connection";
}
mysqli_close();
?>

curl www.example.com /script.php?username = sumit & repo = testfile<?php
$link = mysqli_connect("localhost","root","pass","test");
if($link==false){
    die("error".mysqli_connect_error());
    
}
$sql = "insert INTO  User (username,repo) Value ('sumit','/testfile')";
if(mysqli_query($link,$sql)){
    echo "sucessfull insert record";
    
}else{
    echo "erro connection";
}
mysqli_close();
?>

curl www.example.com /script.php?username = sumit & repo = testfile