<?php
  include_once "connection.php";
  include_once "_session.php";

  if (!isset($_SESSION['username'])) {
    header("location: ../index.php");
  }
  $username = $_SESSION['username'];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Kosugi+Maru&family=Montserrat:ital,wght@0,400;0,700;0,800;0,900;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400&display=swap" rel="stylesheet">
    
    <style>
      * {
        font-family: 'Montserrat', sans-serif;
        /* font-family: 'Open Sans', sans-serif; */
      }
    </style>
    <link rel="icon" href="../img/logo.png">
    
    <title id="page-title">Favorites - VN Corner</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid" id="navbar-container">
          <a class="navbar-brand" href="#">
            <img src="../img/logo-b.png" style="height: 30px; width: auto; margin-right: 10px;" alt="">
            VN Corner
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="nav-list">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Search</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Details</a>
              </li>
              
            </ul>
            <form class="d-flex search-btn" method="GET" action="search.php">
              <input class="form-control me-2" type="search" name="name" placeholder="Search VN" aria-label="Search">
              <button class="btn btn-primary" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>


    </header>
    
    <div class="container-fluid" id="content">
      <h1>
        <?php echo $username."'s"; ?>
        favorites
      </h1>
      <ul class="container-fluid row" id="search-content">
      </ul>
    </div>

    <p id="fav-str" style="display: none">
      <?php
        $fav_query = mysqli_query($connection, "SELECT * FROM favorites WHERE username = '$username'");
        $queryResultArray = mysqli_fetch_all($fav_query);
        foreach($queryResultArray as $row)
        {
          echo $row[1]."-";
        }
      ?>
    </p>
    


    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="../script/config.js"></script>
    <script src="../script/favorite.js"></script>
    <script src="../script/load-nav.js"></script>
  </body>
</html>

<?php
  include_once "nav-login.php";
?>