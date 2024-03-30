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
    <div class="container-fluid  profile_home">
    <!--Nav--> 
        <div class="col-12 ">
            <?php
            include "nav_profile.php";
             ?>
        </div>
    </div>

    
<div class="container-fluid  home mt-3">
<!--Page Contents-->      
  <div class="row ">
      <div class="container "  >
          <div class="row " >
              <div class="col-12 col-md-12 set_main d-flex ">
                  <div class="col-12 col-md-6 set_mini justify-content-center align-iteam-center">
                <div class="card cardpro" style="width: 18rem;">
                    <img class="card-img-top" src="./Assets/Logo01.png" alt="Card image cap">
                        <div class="card-body">
                             <h5 class="card-title">Profile Name</h5>
                        </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Age</li>
                        <li class="list-group-item">Weight</li>
                        <li class="list-group-item">Birth ADy</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Edit Profile</a>
                        <a href="#" class="card-link">Delete Profile</a>
                    </div>
                </div>
                  </div>
                  <div class="col-12 col-md-6 set_mini justify-content-center align-iteam-center">
                    <div class="row ">
                          <button class="btn_ap " type="submit"><a href="Signup.php">Add Appoinments</a></button>
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