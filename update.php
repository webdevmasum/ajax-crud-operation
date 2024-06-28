<?php
     $connect = mysqli_connect("localhost","root","","ajax");

     $name = $_GET['name'];
     $email = $_GET['email'];
     $contact = $_GET['contact'];
     $password = $_GET['password'];
     $updateid = $_GET['userId'];

     $update="UPDATE ajax_crud SET name='$name', email='$email',contact='$contact',password='$password' WHERE id=$updateid";

     $excution = mysqli_query($connect, $update);

     if($excution){
        echo "update successfully";
     }else{
        echo "Update failed..!";
     }

?>