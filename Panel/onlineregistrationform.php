<?php
session_start();
if (!isset($_SESSION['AdminLoginId'])) {
    header("location: adminlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Registration Form </title>

    <!-- link bootstrap  -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../css/Adminpanel.css" />
    <link rel="stylesheet" href="../css/onlineform.css" />

</head>

<body>


    <!-- <?php echo $_SESSION['AdminLoginId'] ?> -->
    <!-- <form method="POST">
            <button name="Logout">LOG OUT</button>
        </form> -->

    <?php
    if (isset($_POST['Logout'])) {
        session_destroy();
        header("location:adminlogin.php");
    }
    ?>

    <!-- admin panel start  -->

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom ">
                <i class="fas fa-user-secret me-2"></i>
                Sadgurukirpa
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="adminpanel.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fas fa-tachometer-alt me-2"> </i>Dashboard</a>
                <a href="onlineregistrationform.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-project-diagram me-2"></i>Forms</a>
                <a href="ashramlist.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-chart-line me-2"></i>Ashram List</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-paperclip me-2"></i>Reports</a>
                <form action="POST">
                            <a href="../Panel/adminlogin.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold" id="logout-btn" name="Logout"><i
                                    class="fas fa-power-off me-2"></i>Logout</a>
                        </form>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>
                                <?php echo $_SESSION['AdminLoginId'] ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <form method="POST">
                                    <li><a class="dropdown-item" href="#"><button class="drop-down" id="logout-btn" name="Logout">Logout</button></li></a>
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>


            <!-- form design start  -->

            <section class="vh-100 ">
                <div class="container py-5 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-12 col-lg-9 col-xl-7">
                            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                                <div class="card-body p-4 p-md-5">
                                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                                    <form>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">

                                                <div class="form-outline">
                                                    <input type="text" id="firstName" class="form-control form-control-lg" />
                                                    <label class="form-label" for="firstName">Name</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4">

                                                <div class="form-outline">
                                                    <input type="number" id="lastName" class="form-control form-control-lg" />
                                                    <label class="form-label" for="lastName">Age</label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">

                                                <h6 class="mb-2 pb-1">Gender: </h6>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="option1" checked />
                                                    <label class="form-check-label" for="femaleGender">Female</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender" value="option2" />
                                                    <label class="form-check-label" for="maleGender">Male</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender" value="option3" />
                                                    <label class="form-check-label" for="otherGender">Other</label>
                                                </div>

                                            </div>

                                            <div class="col-md-6 mb-4 d-flex align-items-center">

                                                <div class="form-outline datepicker w-100">
                                                    <input type="text" class="form-control form-control-lg" id="birthdayDate" />
                                                    <label for="birthdayDate" class="form-label">State</label>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div class="form-outline">
                                                    <input type="text" id="emailAddress" class="form-control form-control-lg" />
                                                    <label class="form-label" for="emailAddress">City</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div class="form-outline">
                                                    <input type="number" id="phoneNumber" class="form-control form-control-lg" />
                                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div class="form-outline">
                                                    <input type="number" id="emailAddress" class="form-control form-control-lg" />
                                                    <label class="form-label" for="emailAddress">Aadhar Number</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div class="form-outline">
                                                    <input type="text" id="phoneNumber" class="form-control form-control-lg" />
                                                    <label class="form-label" for="phoneNumber">Recived Form</label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div class="form-outline">
                                                    <input type="Date" id="emailAddress" class="form-control form-control-lg" />
                                                    <label class="form-label" for="emailAddress">Recived Date </label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div class="form-outline">
                                                    <input type="text" id="phoneNumber" class="form-control form-control-lg" />
                                                    <label class="form-label" for="phoneNumber">Recived Form</label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">


                                            </div>
                                            <div class="col-md-8 pe-5">

                                                <input class="form-control form-control-lg" id="formFileLg" type="file" placeholder="Upload Image" />
                                                <div class="small text-muted mt-2">Upload your image relevant file. Max file
                                                    size 50 MB</div>

                                            </div>
                                        </div>

                                        <div class="mt-4 pt-2">
                                            <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- form design end  -->



        </div>
    </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>


</body>

</html>