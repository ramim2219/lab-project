<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include 'link.php' ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="departments.php">Departments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="courses.php">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Sign-up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="database_info.php">Database-info</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
    <div class="full_body bg-secondary d-flex justify-content-center align-items-center">
        <div class="w-50 shadow p-3 mb-5 rounded p-2 form-design">
            <h1 class="text-center mb-3 fs-3">Sign up</h1>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">User name</label>
                    <input type="user_name" class="form-control" id="user_name" aria-describedby="user_name"
                    name="user" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="email" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1" required>Check me out</label>
                </div>
                <div class="d-flex justify-content-end mb-3">
                    <input class="btn btn-primary" type="submit" name="submit_btn" value="Submit">
                </div>
                <div class="d-flex justify-content-end mb-3">
                    <input class="btn btn-success" type="submit" name="submit_btn" value="Check-form">
                </div>
            </form>
        </div>
    </div>
    <?php 
    
        include 'connection.php'; 
        include 'script.php';
        if(isset($_POST['submit_btn']))
        {
            $name = $_POST['user'];
            $mail = $_POST['email'];
            $pass = $_POST['password'];

            $insertquery = "INSERT INTO `students`(`username`, `email`, `password`) VALUES ('$name','$mail','$pass')";

            $res = mysqli_query($con,$insertquery);
            if($res)
            {
                ?>
                    <script>
                        alert("data inserted");
                    </script>
                <?php
            }
            else
            {
                ?>
                    <script>
                        alert("data not inserted");
                    </script>
                <?php
            }
        }
    ?>
</body>
</html>