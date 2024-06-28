<?php
    $connect= mysqli_connect("localhost","root","","ajax");

    $select="SELECT * FROM ajax_crud";
    $execute=mysqli_query($connect,$select);
    while($row=mysqli_fetch_assoc($execute)){ ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['contact']?></td>
            <td><?php echo $row['password']?></td>
            <td>
                <button class="btn btn-dark text-warning" onclick="Delete(<?php echo $row['id']?>)">Delete</button>
                <button class="btn btn-dark text-info" onclick="edit(<?php echo $row['id']?>)">Edit</button>
            </td>
            
        </tr>

   <?php
    }
?>