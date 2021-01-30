<?php
    $userid = $_GET['id'];
?>
<!doctype html>
<html>
    <head>
        <meta name="description" content="Simple User CRUD application using HTML, CSS, JS, Bootstrap, Mysql and PHP">
        <meta name="Viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
        <title>Delete User | Project Mantra | User CRUD With Bootstrap and PHP</title>
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
                <div class="card">
                    <div class="card-header">
                    <h5 class="text-black">Are your Sure you want to delete this user?</h5>
                    </div>
                    <div class="card-body">

                    
                        <div class="row">
                            <a href="delete.php?id=<?php echo isset($userid) ? $userid : '' ?>" class="btn btn-outline-danger col-2">Yes, Confirm</a>
                            <a href="index.php" class="btn btn-outline-secondary col-2">Cancel</a>
                        </div>
                    </div>
                </div>
           </div>
        </main>



        <script src="assets/Vendors/Jquery/Jquery.js"></script>
        <script src="assets/Vendors/bootstrap5/js/bootstrap.js"></script>   
        <script src="assets/custom/js/script.js"></script>     
    </body>
</html>
