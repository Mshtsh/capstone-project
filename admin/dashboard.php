<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="icon" type="image/png" href="../media/logo-colored.png">
      <link rel="stylesheet" href="../css/stylesheet-db.css">

      <title>Dashboard | San Francisco De Sales</title>
    
    </head>

    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar Start -->
            <div class="bg-white" id="sidebar-wrapper">
                <img src="../media/logo-colored.png" alt="logo" class="mx-auto d-block pt-3" width="40px" height="auto">
                <div class="sidebar-heading pb-4 primary-text fs-5 text-center fw-bold text-muted border-bottom">
                    <i class="fas fa-user-secret me-2"></i>SFDSS Admin</div>
                <div class="list-group list-group-flush my-3">
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active fw-reg"><i
                            class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-reg"><i
                            class="fas fa-project-diagram me-2"></i>Kindergarten</a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-med"><i
                            class="fas fa-chart-line me-2"></i>Elementary</a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-med"><i
                            class="fas fa-paperclip me-2"></i>Junior High School</a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-med"><i
                            class="fas fa-shopping-cart me-2"></i>Senior High School</a>
                    <hr>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-med"><i
                            class="fas fa-gift me-2"></i>Content Manager</a>
                    <a href="login.html" class="list-group-item list-group-item-action bg-transparent text-danger fw-med"><i
                            class="fas fa-gift me-2"></i>Logout</a>
                            
                </div>
            </div>
            <!-- Sidebar End -->

            <!-- Page Content Start -->
            <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3 fw" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0 fw-bold">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark fw-med" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Admin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">200</h3>
                                <p class="fs-5">Kindergarten</p>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">200</h3>
                                <p class="fs-5">Elementary</p>
                            </div>
                            <i
                                class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">300</h3>
                                <p class="fs-5">JHS</p>
                            </div>
                            <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">400</h3>
                                <p class="fs-5">SHS</p>
                            </div>
                            <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Recent Enrollees</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "sfdss-enrollees";

                                $connection = new mysqli($servername, $username, $password, $dbname);

                                if ($connection->connect_error) {
                                    die("Connection failed: " . $connection->connect_error);
                                }

                                $sql = "SELECT * FROM placeholder";
                                $result = $connection->query($sql);

                                if (!$result) {
                                    die("Invalid query: " . $connection->connect_error);
                                }
                                
                                while ($row = $result->fetch_assoc()) {
                                    echo  "<tr>
                                    <td>" . $row["id"] . "</td>
                                    <td>" . $row["first_name"] . "</td>
                                    <td>" . $row["last_name"] . "</td>
                                    <td>" . $row["email"] . "</td>
                                    <td>" . $row["phone"] . "</td>
                                    <td>" . $row["address"] . "</td>
                                    <td>
                                        <a class='btn btn-success btn-sm' href='update'>Update</a>
                                        <a class='btn btn-danger btn-sm' href='delete'>Delete</a>
                                    </td>
                                </tr>";
                                }

                                
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            </div>
            </div>
            <!-- Page Content End -->

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                var el = document.getElementById("wrapper");
                var toggleButton = document.getElementById("menu-toggle");

                toggleButton.onclick = function () {
                el.classList.toggle("toggled");
                };
            </script>
    </body>
</html>