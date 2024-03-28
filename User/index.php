<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">

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
        <div class="container set1">
            <div class="row " >
                <div class="col-12 col-lg-12 p-5 justify-content-center align-items-center " style=" height:max-content;">
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

  <!--footer--> 
  <div class="col-12 mt-3 bg-success">
        <?php
        include "footer.php";
        ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>