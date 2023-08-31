<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $number=$_POST['number'];
   

$con = new mysqli('localhost','root','','form2');
if($con->connect_error){
    die('Connection Failed : '.$con->connect_error );
}else{
    $stmt = $con->prepare("insert into contact (name,number)
    values(?, ?)");
    $stmt->bind_param("ss",$name, $number);
    $stmt->execute();
    $stmt->close();
    $con->close();
}
if (isset($_POST['submit'])) {
    echo 

    // Include the HTML content
    include('Home1.html');
}



}

?>