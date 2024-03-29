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
        include "nav.php";
        ?>
    </div>  

  <!--Page Contents-->      
    <div class="row ">
        <div class="container "  >
            <div class="row " >
                <div class="col-12 col-lg-12 p-5 justify-content-center align-items-center set1" style=" height:max-content;">
                    <h1 class="topic1 text-center">SAHANA</h1>
                    <h1 class="topic2 text-center">MEDICAL CENTER</h1>
                    <div class="row justify-content-center">
                        <button class="btn_ap " type="submit"><a href="Login.php">Add Appoinments</a></button>
                    </div>
                </div>
              </div>
        </div>
    </div>
  </div>


  <div class="container set1">
            <div class="row " >
                <div class="row p-5 justify-content-center align-items-center " style=" height:max-content;">
                    <div class="col-12 col-lg-6">
                    <img src="" class="rounded mx-auto d-block" alt="...">
                    </div>
                    <div class="col-12 col-lg-5">
                        <h2>DOCTOR</h2>
                        <h3>Dr. Name Here</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque posuere tellus, in vulputate odio blandit vitae. Aliquam vehicula risus ut ante rhoncus faucibus. Mauris massa metus, facilisis congue hendrerit et, vulputate id elit. Donec a turpis sit amet libero eleifend rhoncus. Aliquam mattis tincidunt nibh nec consectetur. Sed malesuada sodales felis, ut iaculis tortor finibus eget. Suspendisse auctor magna leo, vehicula ultrices lectus tincidunt et.</p>
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