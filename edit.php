<?php
    $connect = mysqli_connect("localhost","root","","ajax");

    $editid = $_GET['userId'];

    $select = "SELECT * FROM ajax_crud WHERE id=$editid";
    $excution =mysqli_query($connect, $select);
    $row = mysqli_fetch_array($excution);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h2>This is EDIT page</h2>
        
            <div class="form-group">
                <label > Name</label>
                <input type="text" id="name" class="form-control" name="name" value="<?php echo $row['name'] ?>" placeholder="Type your name">
            </div>
            <div class="form-group">
                <label >Email </label>
                <input type="email" id="email" class="form-control" name="email" value="<?php echo $row['email'] ?>" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label >Contact</label>
                <input type="text" id="contact" class="form-control" name="contact" value="<?php echo $row['contact'] ?>" placeholder="Type your contact">
            </div>
            <div class="form-group">
                <label >Password</label>
                <input type="password" id="password" class="form-control" name="password" value="<?php echo $row['password'] ?>" placeholder="Type your password">
            </div>

            <button class="btn btn-dark text-success" onclick="UPDATE_DATA(<?php echo $row['id']?>)" >Update Data</button>    
            <button class="btn btn-dark text-success" onclick="home()" > Go Home</button>
      
    </div>
</body>
</html>