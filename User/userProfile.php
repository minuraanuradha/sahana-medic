<?php
session_start();

include '../Model/connection.php';

// Fetch reviews from the database
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch each row from the result set
    while ($row = $result->fetch_assoc()) {
        // Display user data
        $fullName = $row["full_name"];
        $email = $row["email"];
        $date_of_birth = $row["date_of_birth"];
        $weight = $row["weight"];
        $gender = $row["gender"];
        $address = $row["address"];
        $allergies = $row["allergies"];
        
    }
} else {
    echo "No user data found";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <title>index</title>
</head>
<body>
<div class="container-fluid  home">
    <!--Nav-->
    <div class="col-12 ">
      <?php
      include "nav_profile.php";
      ?>
    </div>

    <!--Page Contents-->      
    <div class="row " >
        <div class="col-12 col-md-12 pro d-flex ">


            <div class="col-12 col-md-3 set_mini justify-content-center align-iteam-center">
                <div class="card cardpro" style="width: 17rem;">
                        <img class="card-img-top p-4" src="./Assets/Logo01.png" alt="Card image cap" style="height:100px,weight:100px">
                        <div class="card-body">
                             <h3 class="card-title"><?php echo $fullName; ?></h3>
                        </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"> <b>Email</b> <br> <?php echo $email; ?></li>
                                <li class="list-group-item"> <b>Birth Day</b> <br><?php echo $date_of_birth; ?></li>
                                <li class="list-group-item"> <b>weight</b> <br><?php echo $weight; ?> KG</li>
                                <li class="list-group-item"> <b>Gender</b> <br><?php echo $gender; ?></li>
                                <li class="list-group-item"> <b>Address</b> <br><?php echo $address; ?></li>
                            </ul>
                        <div class="card-body">
                            <a href="#"><button class="btn02 m-3" style="width:180px;" data-bs-toggle="modal" data-bs-target="#appointmentModal" type="submit">Edit Profile</button></a>
                            <a href="#"><button class="btn02 mb-2" style="width:180px;" data-bs-toggle="modal" data-bs-target="#appointmentModal" type="submit">Delete Profile</button></a>
                        </div>
                </div>
            </div>

            <div class="col-12 col-md-9  justify-content-center align-iteam-center d-flex">
                
                <div class="col-12 col-md-12  justify-content-center align-iteam-center">

                    <div class="row justify-content-center ">
                        <a href="Signup.php"></a><button class="btn_ap m-1" type="submit">Add Appoinments</button>
                        <a href="Signup.php"></a>  <button class="btn_ap m-2" type="submit">Add Review</button>
                    </div>
                    <div class="row mt-2">
                        <div class="container-fluid apoinment-cover">
                            <div class="container-fluid ">
                                
                                <h5 class="pro_topic">| Allegies</h5>
                                <div class="container mt-4">
                                <div class="col-2 card_c mb-1">
                                <?php echo $allergies; ?>
                                </div>
                            </div>
                        </div>
                    </div> 
                    
                </div>



                <div class="col-12 col-md-12 mt-3  justify-content-center align-iteam-center">
                    <div class="row ">
                        <div class="container-fluid apoinment-cover">
                        <div class="container ">
                            <h5 class="pro_topic">| My Appoinments</h5>
                            <div class="container">
                            <div class="col-2 card_a">
                                10
                            </div>
                            <div class="col-2 card_a">
                                10
                            </div>
                            <div class="col-2 card_a">
                                10
                            </div>
                            <div class="col-2 card_a">
                                10
                            </div>
                            <div class="col-2 card_a">
                                10
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                
            </div>





        </div>
    </div>
    
</div>


    


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>