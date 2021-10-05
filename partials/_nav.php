<style>
  html {
    box-sizing: border-box;
  }
</style>

<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $loggedin = true;
  $userId = $_SESSION['userId'];
  $username = $_SESSION['username'];
} else {
  $loggedin = false;
  $userId = 0;
}

$sql = "SELECT * FROM `sitedetail`";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$systemName = $row['systemName'];

echo '<nav class="navbar navbar-expand-lg navbar-primary bg-light text-center sticky-top">
      <a class="navbar-brand" href="index.php"><img src="/img/logo-unilab-header.png" height="54px" alt="Unilab Logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="portal.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Divisions
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">';
$sql = "SELECT divisionName, divisionId FROM `division`";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
  echo '<a class="dropdown-item" href="viewdrugsList.php?catid=' . $row['divisionId'] . '">' . $row['divisionName'] . '</a>';
}

if ($loggedin) {
  echo '</div>
          </li>
  
          <li class="nav-item">
            <a class="nav-link" href="viewOrder.php">Your Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="message.php">Help Center</a>
          </li>
          
        </ul>
        <form method="get" action="/search.php" class="form-inline my-2 my-lg-0 mx-3 justify-content-center d-flex">
          <input class="form-control mr-sm-2" type="search" name="search" id="search" placeholder="Search" aria-label="Search" required>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>';

  $countsql = "SELECT SUM(`itemQuantity`) FROM `viewcart` WHERE `userId`=$userId";
  $countresult = mysqli_query($conn, $countsql);
  $countrow = mysqli_fetch_assoc($countresult);
  $count = $countrow['SUM(`itemQuantity`)'];
  if (!$count) {
    $count = 0;
  }
  echo '<a href="viewCart.php"><button type="button" class="btn btn-light mx-2" title="MyCart">
          <svg xmlns="img/cart.svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>  
          <span class="badge badge-primary badge-pill">' . $count . '</span>
        </button></a>';


  echo '<ul class="navbar-nav mr-2">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"> ' . $username . '</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="partials/_logout.php">Logout</a>
              </div>
            </li>
          </ul>
          <div class="text-center image-size-small position-relative">
            <img src="img/person-' . $userId . '.jpg" class="rounded-circle" onError="this.src = \'img/profilePic.jpg\'" style="width:40px; height:40px">
          </div>';
} else {
  echo '</ul><button type="button" class="btn btn-success mx-2"  data-toggle="modal" data-target="#loginModal">Login</button>';
}
//           <button type="button" class="btn btn-success mx-2"  data-toggle="modal" data-target="#signupModal">SignUp</button>';
// }

echo '</div>
    </nav>';

include 'partials/_loginModal.php';
include 'partials/_signupModal.php';

if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true") {
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong> You can now login.
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
            </div>';
}
if (isset($_GET['error']) && $_GET['signupsuccess'] == "false") {
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Warning!</strong> ' . $_GET['error'] . '
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
            </div>';
}
if (isset($_GET['loginsuccess']) && $_GET['loginsuccess'] == "true") {
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong> You are now logged in.
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
            </div>';
}
if (isset($_GET['loginsuccess']) && $_GET['loginsuccess'] == "false") {
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Warning!</strong> Invalid Credentials...
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
            </div>';
}
