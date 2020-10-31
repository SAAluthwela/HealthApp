<?php

require_once 'db_connect.php';

if($_POST){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age']; #error
    $contact = $_POST['contact'];
    
    $sql = "INSERT INTO members (fname , lname, contact, age, active) VALUES ('$fname', '$lname' , '$age' ,
     '$contact' , 1)";
 
     if($connect->query($sql) == TRUE){
           echo "<p>New Record Successfully created!</p>";
           echo "<a herf='../create.php'><button type='button'>Back</button></a>";
           echo "<a herf='../index.php'><button type='button'>Home</button></a>";
     }else{
        echo "Error " .$sql. ''.$connect->connect_error;
     }
  #error
     $connect->close();
}

?>