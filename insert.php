<?php
    $connect = mysqli_connect("localhost","root","","ajax");

    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $password=$_POST['password'];

    $insert="INSERT INTO ajax_crud(Name,Email,Contact,Password) VALUES('$name','$email','$contact','$password')";

    $query=mysqli_query($connect, $insert);

    if($query){
        echo "Database is connected perfeltly";

    }else{
        echo"Database  connect failed..!";
    }


    

?>


