<?php
    $connection = mysqli_connect("localhost","root","","project_users");

    if($connection  === false){
        die("ERROR: Could not Establish a Connection" . mysqli_connect_error());
    }

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $query = "INSERT INTO users(firstname,lastname,email,phone)VALUES('$firstname','$lastname','$email','$phone')";

    if(mysqli_query($connection,$query)){
        echo "Data was Added Successfully";    
        die('<script type="Text/javascript">window.location=\'http://localhost/usercrud-bs-php/index.php\';</script>');
    }else{
        echo "Error: Insertion Failed $query" . mysqli_error($connection);
    }

    mysqli_close($connection);

?>