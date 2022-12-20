<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'e');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "UPDATE users SET first_name='$first_name', last_name='$last_name', username='$username', password=' $password' WHERE id='$id'  ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>