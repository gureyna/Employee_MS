<?php include("database/conn.php")  ?>
<?php

if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql="DELETE FROM reg WHERE id=$id";
    $result=mysqli_query($conn, $sql);
    

    if($result){
        header("Location:  show_employees.php?message=deleted");
    }
}
else {
     echo "Error: ID not found in URL";
}