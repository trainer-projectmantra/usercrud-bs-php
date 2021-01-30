<?php

    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $connection = mysqli_connect("localhost","root","","project_users");

    if($connection === false){
        die("Error Connection Failed".mysqli_connect_error());        
    }

    $query="UPDATE users SET firstname ='$firstname',lastname='$lastname',email='$email', phone='$phone' WHERE id=$id ";
    if(mysqli_query($connection,$query)){
        echo "record updated successfully";
        die('<script type="Text/javascript">window.location=\'http://localhost/usercrud-bs-php/index.php\';</script>');
    }else{
        echo "Error Could not update the record $query. ". mysqli_error($connection);
        header('update.php');
    }

    mysqli_close($connection);
?>