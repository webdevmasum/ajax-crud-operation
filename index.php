<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax CRUD Operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Ajax CRUD Operation</h2>
        <!-- <form action="#" method="post"> -->
            <div class="form-group">
                <label > Name</label>
                <input type="text" id="name" class="form-control" name="name" placeholder="Type your name">
            </div>
            <div class="form-group">
                <label >Email </label>
                <input type="email" id="email" class="form-control" name="email" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label >Contact</label>
                <input type="text" id="contact" class="form-control" name="contact" placeholder="Type your contact">
            </div>
            <div class="form-group">
                <label >Password</label>
                <input type="password" id="password" class="form-control" name="password" placeholder="Type your password">
            </div>

            <button class="btn insert btn-dark text-info">Insert Data</button>
            <button  class="btn reading btn-dark text-white">Read Data</button>

        <!-- </form> -->
        <!-- <div id="reload">kam hoy na re</div>
        <div id="del"> del page</div> -->        
    </div>

    <div class="container2">
        <h2>Inserted Data</h2>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Password</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody id="tbody">
            <!-- <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto@gmail.cpm</td>
                <td>@01766789096</td>
                <td>667889</td>
            </tr> -->
            </tbody>

        </table>

    </div>
    




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="ajax.js"></script>
</body>
</html>