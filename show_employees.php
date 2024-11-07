<?php include("database/conn.php")  ?>
<?php
   $sql="SELECT * FROM reg";
   $result=mysqli_query($conn, $sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show Employees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <div class="mt-3">
        <a href="index.php" class="btn btn-primary">Back to Home</a>
        <a href="add_employee.php" class="btn btn-primary">Add Employee</a>

    </div>
    <table class="table mt-5">
            <thead>
                <tr>
              
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Dept</th>
                <th scope="col">Salary</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php  
                   while($row=mysqli_fetch_assoc($result)):
                ?>
                <tr>
             
                <td><?php echo $row['name']  ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['phone'] ?></td>
                <td><?php echo $row['dept'] ?></td>
                <td>$<?php echo $row['salary']  ?></td>
                <td><?php echo $row['joining_date']  ?></td>
                <td>
                    <a href="edit_employee.php?id=<?php echo $row['id'] ?>" class="btn btn-warning btn-sm">Update</a>
                    <a href="delete_employee.php?id=<?php echo $row['id']  ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            
                </tr>
                <?php  endwhile; ?>
               
            </tbody>
            </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>