<?php
?>
<!doctype html>
<html>
    <head>
        <meta name="description" content="Simple User CRUD application using HTML, CSS, JS, Bootstrap, Mysql and PHP">
        <meta name="Viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
        <title>Add User | Project Mantra | User CRUD With Bootstrap and PHP</title>
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
                <div class="card shadow-sm">
                    <form method="post" action="save.php">
                        <div class="card-header">
                            <div class="display-6">Add A User</div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="firstname" class="form-label">Enter Your First Name</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter Your First Name">
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="form-label">Enter Your Last Name</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Your Last Name">
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Enter Your Email ID</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                            </div>
                            <div class="form-group">
                                <label for="phone" class="form-label">Enter Your Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone Number">
                            </div>                        
                        </div>
                        <div class="card-footer">
                            <div class="form-group">                            
                                <input type="submit" class="btn btn-outline-success" value="Submit">
                                <a href="index.php" class="btn btn-outline-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
           
        </main>



        <script src="assets/Vendors/Jquery/Jquery.js"></script>
        <script src="assets/Vendors/bootstrap5/js/bootstrap.js"></script>   
        <script src="assets/custom/js/script.js"></script>     
    </body>
</html>
