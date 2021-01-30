<?php

    $connection = mysqli_connect("localhost","root","","project_users");

    if($connection  === false){
        die("ERROR: Could not Establish a Connection" . mysqli_connect_error());
    }

?>
<!doctype html>
<html>
    <head>
        <meta name="description" content="Simple User CRUD application using HTML, CSS, JS, Bootstrap, Mysql and PHP">
        <meta name="Viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
        <title>Project Mantra | User CRUD With Bootstrap and PHP</title>
        <link href="assets/Vendors/bootstrap5/css/bootstrap.css" rel="stylesheet">
        <link href="assets/Vendors/fontawesome47/css/font-awesome.css" rel="stylesheet">
        <link href="assets/custom/css/style.css" rel="Stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><img src="assets/images/projectmantra_white_logo.png" height="30px" width="auto"></a>
                </div>
                <ul class= "nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php">Home</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main style="padding-top:100px">
            <div class="container">
                <div class="container-fluid" id="add-user">
                    <a href="add-user.php" class="btn btn-success">Add New User</a>
                </div>

                
                    <?php
                    $query = "SELECT * FROM users";
                        if($query_data= mysqli_query($connection,$query)){
                            if(mysqli_num_rows($query_data)>0){    
                                echo '<table class="table" style="padding-top:25px">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email Id</th>
                                            <th scope="col">Phone No.</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>';
                                $i=1;                    
                                while($row = mysqli_fetch_array($query_data)){

                                        echo"<tr>";
                                            echo"<td>" .$i. "</td>";
                                            echo"<td>" .$row['firstname']." ".$row['lastname']. "</td>";                                            
                                            echo"<td>" .$row['email']. "</td>";
                                            echo"<td>" .$row['phone']. "</td>";
                                            echo'<td>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <a href="edit-user.php?id='.$row['id'].'" class="text-center"><span class="fa fa-pencil-square-o"></span></a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a href="delete-user.php?id='.$row['id'].'" class="text-center"><span class="fa fa-trash"></span></a>
                                                        </div>
                                                    </div>
                                                </td>';
                                        echo"</tr>";
                                        
                                        $i++;
                                       
                                }                
                                echo "</tbody>";
                                echo "</table>";              
                            }else{
                                echo "
                                    <div style='padding:15px;' class='alert alert-warning alert-dismissible fade show' role='alert'>Table Empty
                                        <button type='button' class='close' data-bs-dismiss='alert' aria-label='close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>";
                            }  
                        }else{
                            echo "<BR>Failed to execute". $query . mysqli_error($connection);
                        }
                        mysqli_close($connection);
                    ?>
                  
            </div>
        </main>



        <script src="assets/Vendors/Jquery/Jquery.js"></script>
        <script src="assets/Vendors/bootstrap5/js/bootstrap.js"></script>   
        <script src="assets/custom/js/script.js"></script>     
    </body>
</html>
