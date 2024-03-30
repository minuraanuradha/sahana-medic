<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("location:doc_login.php");
}
?>
<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/bootstrap/css/bootstrap-grid.rtl.min.css">
    <link rel="stylesheet" href="css/.css">

    <title>DocDashBoard</title>

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="container col-2">1</div>
            <div class="container col-9">2</div>
        </div>
    </div>
    

        <script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Sahana_Admin/Assets/Doc.css">

    <script src="/bootstrap/js/bootstrap.min.js"></script>

    <title>DocDashBoard</title>
</head>
<body>
    <div class="container-fluid" id="full-with">
        <div class="row">
            <!-- Nav Coloumn -->
            <div class="col-md-3 p-3 text-white " id="c-1">
                <h1 class="text-center" style="font-weight:bolder; ">SAHANA</h1>
                <ul class="nav nav-pills flex-column mt-2">
                    <li class="nav-item pb-2 ">
                        <a class="nav-link  " id="sidena" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item pb-2 primary">
                        <a class="nav-link" id="sidenav" href="#">Patients</a>
                    </li>
                    <li class="nav-item pb-2">
                        <a class="nav-link" id="sidenav" href="#">Appointments</a>
                    </li>
                    <li class="nav-item pb-2">
                        <a class="nav-link" id="sidenav" href="#">Profile</a>
                    </li>
                </ul>
                <ul class="nav nav-pills flex-column ">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Log Out</a>
                    </li>
                </ul>
            </div>
            <!-- View Coloumn -->
            <div class="col-md-9  text-white" id="c-2">
                <nav class="navbar navbar-expand-md navbar-dark  pt-3 " style="height:60px;" >
                    <div class="container-fluid ">
                       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                        <span class="navbar-toggler-icon"></span>
                       </button>
                       <div class="collapse navbar-collapse" id="mynavbar">
                            <ul class="navbar-nav me-auto">
                            <form class="d-flex">
                                <input class="form-control me-2 " style="width:35vw;" type="text" placeholder="Search">
                                <button class="btn btn-primary"  type="button">Search</button>
                            </form>
                            </ul>
                            
                            <button class="btn btn-primary m-5 width-5" type="button">Message</button>
                            <a class="navbar-brand" href="#">
                                <img src="/Images/BellFinal.png" alt="Notification Logo" style="width:30px;" class="rounded-pill"> 
                            </a>
                            <a class="navbar-brand" href="#">
                                <img src="/Images/UserFianl.png" alt="Avatar Logo" style="width:30px;" class="rounded-pill "> 
                            </a>
                        </div>
                    </div>
                </nav>
                <div class="containor-fluid  mt-2 rounded text-primary pt-0 p-4" style="height: 520px;">
                    <div class="row ">
                        <div class="col-md-10 ">
                            <h1 class="text-white" style="font-weight:bolder;">Admin Dashboard</h1>
                        </div>
                        <div class="col-md-2 ">
                            <button class="btn btn-primary"  type="button">Patients </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="container bg-white rounded" style="height:45vh;">
                                <h2 class="pt-2" style="font-weight:bolder;font-size:large; ">Calaneder</h2>

                                <div class="container rounded" id="sub-2">1</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="container bg-white rounded" style="height:45vh;">
                                <h2 class="pt-2" style="font-weight:bolder;font-size:large; ">Today Appoinments</h2>
                                <div class="container rounded" id="sub-2">2</div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-lg-12 ">
                            <div class="container bg-white rounded" style="height:26vh;">
                                <h2 class="pt-2" style="font-weight:bolder;font-size:large; ">Overview</h2>
                                <div class="container rounded" id="sub-3">3</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>