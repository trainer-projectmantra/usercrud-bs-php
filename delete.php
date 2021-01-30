<?php

    $id=$_GET['id'];
    $connection = mysqli_connect("localhost","root","","project_users");

    if($connection === false){
        die("Error Connection Failed".mysqli_connect_error());        
    }

    $query="DELETE FROM users WHERE id=$id ";
    if(mysqli_query($connection,$query)){
        echo "record Deleted successfully";
        die('<script type="Text/javascript">window.location=\'http://localhost/usercrud-bs-php/index.php\';</script>');
    }else{
        echo "Error Could not update the record $query. ". mysqli_error($connection);
        header('update.php');
    }

    mysqli_close($connection);
?>