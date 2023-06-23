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
                    <a class="nav-link" aria-current="page" href="departments.php">Departments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="courses.php">Courses</a>
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
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Short_name</th>
                    <th scope="col">Course_code</th>
                    <th scope="col">Type</th>
                    <th scope="col">Credit</th>
                    <th scope="col">Department-id</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>2219</td>
                    <td>Shafayet Ullah Ramim</td>
                    <td>Ramim</td>
                    <td>CSE 225</td>
                    <td>CSE</td>
                    <td>3.0</td>
                    <td>101</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>2219</td>
                    <td>Shafayet Ullah Ramim</td>
                    <td>Ramim</td>
                    <td>EEE 201</td>
                    <td>EEE</td>
                    <td>3.0</td>
                    <td>101</td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php include 'script.php' ?>
</body>
</html>