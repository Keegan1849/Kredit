<html>
    <head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home</title>
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="scripts/style.css">
        <link rel="stylesheet" href="scripts/style2.css">
        <link rel="stylesheet" href="scripts/explore.css">
    </head>
    <body>
        <!-- Navigation-->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark stickyNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="explore.php">Kredit</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="explore.php">Explore</a></li>
                        <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="favorites.php">Favorites</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    <!-- End Navigation -->
    <?php
          
          $servername = "localhost";
          $username = "root";
          $password = "password";
          $database = "kredit";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $database);

          $sql = "SELECT * FROM post;";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>

        <div id="card-container">
        </div>
        <div id="loader">
          <div class="skeleton-card">
          <span><?=$row["post_description"]?></span>
          </div>

        </div>
        <div class="card-actions"> 
        <span><?=$row["post_description"]?></span>
            <span id="card-count">
            <span id="card-total">
        </div>
        <?php
             }
              } else {
           echo "0 Results";
             }
               echo "</table>";
              $conn->close();
        ?> 
    </body>
</html>