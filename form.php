<?php

require_once('connection.php');

if(isset($_POST['btn-save']))
{
    $Username = mysqli_real_escape_string($conn,$_POST['username']);
    $Name = mysqli_real_escape_string($conn,$_POST['name']);
    $Email = mysqli_real_escape_string($conn,$_POST['email']);
    $Password1 = mysqli_real_escape_string($conn,$_POST['password']);
    $Password2 = mysqli_real_escape_string($conn,$_POST['password_confirmation']);

    if(empty($Username) || empty($Name) || empty($Email) || empty($Password1) || empty($Password2))
    {
        echo "<script>alert('Please Fill in the Blanks.')</script>";
    }  
    if($Password1!=$Password2)
    {
        echo "<script>alert('Password Not Matched.')</script>";
    } 
    else
    {
        $Pass = $Password1;
        $sql = "INSERT INTO user (username,name,email,password) VALUES ('$Username','$Name','$Email','$Password1')";
        $result = mysqli_query($conn,$sql);

        if($result)
        {
            echo "<h2>Thank You. Proceed to login</h2>";
        }
        else
        {
            echo "<script>alert('woops! Something Went Wrong.')</script>";
        }
    }
    
}


?>