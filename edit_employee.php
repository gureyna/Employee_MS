<?php include("database/conn.php")   ?>
<?php 

if (isset($_GET['id'])) {
   $id=$_GET['id'];
   $sql="SELECT * FROM reg WHERE id=$id";
   $result=mysqli_query($conn, $sql);
   $row=mysqli_fetch_assoc($result);
   
   $id_update=$row['id'];
   $name_update=$row['name'];
   $address_update=$row['address'];
   $phone_update=$row['phone'];
   $dept_update=$row['dept'];
   $salary_update=$row['salary'];

}
else {
    echo "Error: ID not found in URL";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <div class="mt-3">
        <a href="index.php" class="btn btn-primary">Back to Home</a>
        <a href="show_employees.php" class="btn btn-primary">Show Employees</a>
    </div>
        <div class="header-contents">
        <h1 class="mt-2 mb-4">Update Employee</h1>
     
        </div>
       
        <form action="edit_employee.php" method="post">
         <div class="form-group">
             <label for="name" class="mb-2">Name</label>
             <input type="text" name="name" id="name" class="form-control" value="<?php echo $name_update ?>" required>
         </div>
         <div class="form-group mt-4">
             <label for="address" class="mb-2">Address</label>
             <input type="text" name="address" id="address" class="form-control" required value="<?php  echo $address_update ?>">
         </div>
         <div class="form-group mt-4">
             <label for="phone" class="mb-2">Phone</label>
             <input type="text" name="phone" id="phone" class="form-control" required value="<?php echo $phone_update ?>">
         </div>
         <div class="form-group mt-4">
             <label for="dept" class="mb-2">Department</label>
             <input type="text" name="dept" id="dept" class="form-control" required value="<?php echo $dept_update ?>">
         </div>
         <div class="form-group mt-4">
             <label for="salary" class="mb-2">Salary</label>
             <input type="text" name="salary" id="salary" class="form-control" required value="<?php echo $salary_update ?>">
         </div>
         <input type="hidden" name="id" value="<?php echo $id ?>">
         <button type="submit" class="btn btn-primary mt-4" name="update">Update</button>
        </form>
        <?php  
           if(isset($_POST['update'])){
            $id=$_POST['id'];
            $name=$_POST['name'];
            $address=$_POST['address'];
            $phone=$_POST['phone'];
            $dept=$_POST['dept'];
            $salary=$_POST['salary'];

            $sql="UPDATE reg SET name='$name', address='$address', phone='$phone', dept='$dept', salary='$salary' WHERE id=$id";
            $update=mysqli_query($conn,$sql);

          if($update){
            header("Location: show_employees.php?message=success");
          }
          else{
            header("Location: edit_employee.php?message=error");
          }

           }
        
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>