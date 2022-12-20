<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'e');

if(isset($_POST['insertdata']))
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (`first_name`,`last_name`,`username`,`password`) VALUES ('$first_name','$last_name','$username','$password')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: index.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>