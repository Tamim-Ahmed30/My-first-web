<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $date=$_POST['date'];


$con = new mysqli('localhost','root','','form');
if($con->connect_error){
    die('Connection Failed : '.$con->connect_error );
}else{
    $stmt = $con->prepare("insert into data (name,number,email,date)
    values(?, ?, ?, ?)");
    $stmt->bind_param("ssss",$name, $number, $email, $date);
    $stmt->execute();
    echo "data successfully";
    $stmt->close();
    $con->close();
}


}

?>