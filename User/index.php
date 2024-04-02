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
  <!--------------Nav + page  con 01---------------> 
  <div class="container-fluid  home">

    <!--Nav--> 
    <div class="col-12 ">
      <?php
        include "nav.php";
      ?>
    </div>  

    <!---------------Page Contents 01-------------->      
    <div class="row ">
      <div class="container "  >
        <div class="row " >
          <div class="col-12 col-md-12 set_main d-flex ">
            <div class="col-12 col-md-5 set_mini justify-content-center align-iteam-center">
              <h1 class="topic1 text-start">Take Care of your</h1>
              <h1 class="topic2 text-start"> HELTH </h1>
              <p  class="sub_topic text-start">lasjdvnoksjdv nowkv wkvinwievkw evp zsdv awbv </p>
              <div class="row ">
                <button class="btn_ap " type="submit"><a href="Signup.php">Add Appoinments</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!---------------Services-------------->
  <div class="row container-fluid " style="padding-left:3vw">
    
      <div class="container"  >
        <div class="row text-center" >
            <h1 class="sub_topic1">Our Services</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas a saepe itaque quae. Ratione illum itaque ex quaerat dignissimos non quis, corporis possimus iure totam, aperiam voluptas temporibus facilis quibusdam!</p>
          <div class="col-12 col-md-12 set_main1 d-flex ">

            <div class="col-12 col-md-3  justify-content-center align-iteam-center">
              <div class="card text-center" id="card01">
                <img class="card-img-top" src="./Assets/S01.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            
            <div class="col-12 col-md-3  justify-content-center align-iteam-center">
              <div class="card text-center" id="card02">
              <img class="card-img-top" src="./Assets/S02.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-3  justify-content-center align-iteam-center">
              <div class="card text-center" id="card03">
              <img class="card-img-top" src="./Assets/S03.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            
            <div class="col-12 col-md-3  justify-content-center align-iteam-center">
              <div class="card text-center" id="card04">
              <img class="card-img-top" src="./Assets/S04.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
  </div>


  <!---------------Line-------------->
  <div id="carouselExampleSlidesOnly" class="carousel slide mt-5  d-flex" data-bs-ride="carousel">
    <div class="carousel-inner ">
      <div class="carousel-item active ">
        <img src="./Assets/p03.jpg" class="d-block w-100  " alt="...">
      </div>
      <div class="carousel-item">
        <img src="./Assets/p03.jpg" class="d-block w-100" alt="..." >
      </div>
      <div class="carousel-item">
        <img src="./Assets/p03.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>

  <!---------------Join Us-------------->
  <div class="row container-fluid mt-5  d-flex " style="padding-left:3vw">
    
      <div class="container  "  >
        <div class="row text-center justify-content-center align-iteam-center" >
            <h1 class="sub_topic1">Join With Us</h1>
            <p class="col-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas a saepe itaque quae. Ratione illum itaque ex quaerat dignissimos non quis, corporis possimus iure totam, aperiam voluptas temporibus facilis quibusdam!</p>
            <div class="card col-8" id="card05">
                <div class="card-header">
                <img src="./Assets/Logo04white.png" alt="">
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-primary btn_ap1">Sign Up</a>
                </div>
            </div>
        </div>
      </div>
  </div>



  <!--footer--> 
  <div class="col-12 mt-3 bg-success">
    <?php
      include "footer.php";
    ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>