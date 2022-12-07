<?php 
session_start(); 
include "db_conn.php";?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>All Users</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src='main.js'></script>
</head>
<body>
    <div class = "container">
        <button class = "btn btn-primary my-5"><a href ="AddNewContact.php" class= "text-light"> Add Contact</a> </button>
    
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Telephone</th>
      <th scope="col">Company</th>
      <th scope="col">Type</th>
      <th scope="col">Assigned_TO</th>
    </tr>
  </thead>
  <tbody>
    <?php

        $sql = "Select * from `Contacts`";
        $result = mysqli_query($conn, $sql);
        if ($result){
            while ( $row=mysqli_fetch_assoc($result))
            {
                $title = $row['title'];
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $email = $row['email'];
                $telephone = $row['telephone'];
                $company = $row['company'];
                $type = $row['type'];
                $assigned_to = $row['assigned_to'];
                
                echo '<tr>
                <th scope="row">'.$title.'</th>
                <td>'.$firstname.'</td>
                <td>'.$lastname.'</td>
                <td>'.$email.'</td>
                <td>'.$telephone.'</td>
                <td>'.$company.'</td>
                <td>'.$type.'</td>
                <td>'.$assigned_to.'</td>';
            }
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>

 