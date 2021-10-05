<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title id="title">Category</title>
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <style>
        .jumbotron {
            padding: 2rem 1rem;
        }

        #cont {
            min-height: 570px;
        }
    </style>
</head>

<body>
    <?php include 'partials/_dbconnect.php'; ?>
    <?php require 'partials/_nav.php' ?>

    <div>&nbsp;
        <a href="/portal.php" class="active text-dark">
            <i class="fas fa-qrcode"></i>
            <span>See All Divisions</span>
        </a>
    </div>

    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `division` WHERE divisionId = $id";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $catname = $row['divisionName'];
        $catdesc = $row['divisionDesc'];
    }
    ?>

    <!-- drugs container starts here -->
    <div class="container my-3" id="cont">
        <div class="col-lg-12 text-center text-primary border border-primary rounded my-3">
            <h2 class="text-center"><span id="catTitle">Items</span></h2>
            <i>
                <h6 class="text-center"><span id="catdesc"><?php echo $catdesc; ?></span></h6>
            </i>
        </div>
        <div class="row">
            <?php
            $id = $_GET['catid'];
            $sql = "SELECT * FROM `drugs` WHERE drugsdivisionId = $id";
            $result = mysqli_query($conn, $sql);
            $noResult = true;
            while ($row = mysqli_fetch_assoc($result)) {
                $noResult = false;
                $drugsId = $row['drugsId'];
                $drugsName = $row['drugsName'];
                $drugsPrice = $row['drugsPrice'];
                $drugsDesc = $row['drugsDesc'];
                $drugsUOM = $row['UOM'];
                echo '<div class="col-lg-4 col-md-6 col-12 d-flex justify-content-center p-5 text-center">
                        <div class="card" style="width: 18rem;">
                            <img src="img/drugs-' . $drugsId . '.jpg?" class="card-img-top" alt="Image for ' . $drugsName . '" width="249px" height="270px">
                            <div class="card-body">
                                <h5 class="card-title">' . substr($drugsName, 0, 10) . '...</h5>
                                <h6 style="color: #ff0000">₱ ' . $drugsPrice . ' / ' . $drugsUOM . '</h6>
                                <p class="card-text">' . substr($drugsDesc, 0, 29) . '...</p>   
                                <div class="row justify-content-center">';
                if ($loggedin) {
                    $quaSql = "SELECT `itemQuantity` FROM `viewcart` WHERE drugsId = '$drugsId' AND `userId`='$userId'";
                    $quaresult = mysqli_query($conn, $quaSql);
                    $quaExistRows = mysqli_num_rows($quaresult);
                    if ($quaExistRows == 0) {
                        echo '<form action="partials/_manageCart.php" method="POST">
                                              <input type="hidden" name="itemId" value="' . $drugsId . '">
                                              <button type="submit" name="addToCart" class="btn btn-primary mx-2">Add to Cart</button>';
                    } else {
                        echo '<a href="viewCart.php"><button class="btn btn-primary mx-2">Go to Cart</button></a>';
                    }
                } else {
                    echo '<button class="btn btn-primary mx-2" data-toggle="modal" data-target="#loginModal">Add to Cart</button>';
                }
                echo '</form>                            
                                <a href="viewdrugs.php?drugsid=' . $drugsId . '" class="mx-2"><button class="btn btn-primary">Quick View</button></a> 
                                </div>
                            </div>
                        </div>
                    </div>';
            }
            if ($noResult) {
                echo '<div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <p class="display-4">No items available.</p>
                        <p class="lead"> We will update Soon.</p>
                    </div>
                </div> ';
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
    <script>
        document.getElementById("title").innerHTML = "<?php echo $catname; ?>";
        document.getElementById("catTitle").innerHTML = "<?php echo $catname; ?>";
        // document.getElementById("catdesc").innerHTML = "<?php //echo $catdesc; 
                                                            ?>";
    </script>
</body>

</html>