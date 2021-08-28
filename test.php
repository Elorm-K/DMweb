<?php
$name=$_POST['name'];
$email=$_POST['email'];
$comments=$_POST['comments'];

//connect to DB
$conn= new mysqli('localhost','root','','test');

if($conn->connect_error){
    die('connection failed :' $conn->conect_error);
}
    else(
        $stmt=$conn->prepare("insert into f_input(name,email,comments)
            values(?,?,?)");
    
    $stmt->bind_param("sss",$name,$email,$comments);
    $stmt->execute();
    echo"Thank you for filling the form";
    $stmt->close();
    $conn->close();
    )
?>