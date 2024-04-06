<?php
session_start();

include '../Model/connection.php';

// Fetch reviews from the database
$sql = "SELECT * FROM reviews";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reviews</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">

  <style>
    .card {
      margin-bottom: 20px;
    }
    .card-body {
      background-color: #C9E5CB;  
    }
    .card-body:hover {
      background-color: #C9E5CB; 
      transform:  scale(1.05); 
      transition: transform 0.3s ease-in-out;
    }
    .card-title {
      color: #006400; 
    }
    .card-text {
      color: #006400;  
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row">
    <div class="col-12">
      <?php include "nav.php"; ?>
    </div>
  </div>
  <h1 class="text-center mb-4" style="color: #004c32;">Reviews</h1>
  <div class="row">
    <?php if ($result->num_rows > 0): ?>
      <?php while ($row = $result->fetch_assoc()): ?>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row["name"]; ?></h5>
              <p class="card-text">Rating: <?php echo $row["rating"]; ?>/5</p>
              <p class="card-text"><?php echo $row["message"]; ?></p>
              <p class="card-text"><small class="text-muted">Created at: <?php echo $row["created_at"]; ?></small></p>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php else: ?>
      <div class="col">
        <div class="alert alert-info" role="alert">
          No reviews yet.
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>
<div class="col-12 mt-3 bg-success">
    <?php
    include "footer.php";
    ?>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php $conn->close(); ?>
