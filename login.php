<?php
    session_start();

    if (isset($_SESSION["username"])) 
    {
        session_destroy();
    }

    include_once 'connection.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = stripslashes($username);
    $username = addslashes($username);
    $password = stripslashes($password);
    $password = addslashes($password);
   
    $result = mysqli_query($con, "SELECT * FROM teacher_login WHERE email = '$username' and password = '$password'") or die('Error');
   
    $count = mysqli_num_rows($result);
  
    if ($count == 1) {
        while ($row = mysqli_fetch_array($result)) {
            $name = $row['usn'];
                $username=$row['name'];
                $password = $row['password'];
        }
        $_SESSION["name"]     = $name;
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;

        header("location:index.php");
        echo "logged in successfully!";
    } else
        echo "error logging in.";


// ?>