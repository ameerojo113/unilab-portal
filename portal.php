<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Unilab Portal</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="/img/logo.png" />

</head>

<body>
  <?php include 'partials/_dbconnect.php'; ?>
  <?php require 'partials/_nav.php' ?>

  <!-- Category container starts here -->
  <div class="container">
    <div class="col-lg-12 text-center text-primary border border-primary rounded my-3">
      <h1>Unilab Divisions</h1>
    </div>
    <div class="row">
      <!-- Fetch all the division and use a loop to iterate through division -->
      <?php
      $sql = "SELECT * FROM `division`";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['divisionId'];
        $cat = $row['divisionName'];
        $desc = $row['divisionDesc'];
        echo '<div class="col-lg-4 col-md-6 col-12 d-flex justify-content-center p-5">
                  <div class="card" style="width: 18rem;">
                    <div class="container d-flex" style="height: 300px; overflow:hidden;">
                    <div class="d-flex align-self-center">
                    <center><img class="w-100" src="img/card-' . $id . '.jpg?" alt="Image for this Division"><center>
                    </div>
                    </div><hr>
                    <div class="card-body text-center">
                      <h5 class="card-title"><a href="viewdrugsList.php?catid=' . $id . '">' . $cat . '</a></h5>
                      <a href="viewdrugsList.php?catid=' . $id . '" class="btn btn-primary">View Drugs</a>
                    </div>
                  </div>
                </div>';
      }
      ?>
    </div>
  </div>


  <?php require 'partials/_footer.php' ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
</body>

</html>