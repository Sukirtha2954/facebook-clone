<?php
   $connection = mysqli_connect('localhost','root','','facebookclone')
   $id = $_POST['id'];
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $phoneoremail = $_POST['phoneoremail'];
   $password = $_POST['password'];

   $check_data = mysqli_query($connection,"SELECT * FROM userdata WHERE phoneoremail = '$phoneoremail'  and password = '$password'");
   $check = mysqli_num_rows($check_data);

   if($check>0){
     echo "Login Successful";
   }
   else{
       echo "Login Failed";
 ?>