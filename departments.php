<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'link.php'?>
    <title>Document</title>
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
                    <a class="nav-link active" aria-current="page" href="departments.php">Departments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="courses.php">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Sign-up</a>
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
    <div class="">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Established-at</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>101</td>
                    <td>Computer Science And Engineering</td>
                    <td>14-03-2014</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>102</td>
                    <td>Electrical and Electronics Engineering</td>
                    <td>20-06-2019</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>103</td>
                    <td>Bachelor of Laws</td>
                    <td>13-05-2008</td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php include 'script.php' ?>
</body>
</html>