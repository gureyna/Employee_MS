<?php
   $server="localhost";
   $user="root";
   $password="";
   $dbname="employees";

   $conn=mysqli_connect($server, $user, $password, $dbname);

   if(!$conn)
   {
       die("connection to this database failed due to".mysqli_connect_error());
   }



 


