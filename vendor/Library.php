<?php
function username() {
  require_once("Database.php");
  $database = new Database;
  if (isset($_SESSION["username"])) {
    $email = $_SESSION["username"];
  } else {
    $email = $_COOKIE["user"];
  }
  $result = $database->fetch_user($email);
  $row = mysqli_fetch_assoc($result);
  $first_name = $row['first_name'];
  $last_name = $row['last_name'];
  echo $first_name . " " . $last_name;
}
class Library
{
  public function Header($title)
  {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <title>
        <?php echo $title; ?>
      </title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
      <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
      <!-- Include Slick slider CSS files -->
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    </head>

    <body>
      <?php
  }

  public function Sidebar()
  {
    ?>
      <div class="sidebar">
        <div class="logo-details">
          <!-- <i class='bx bxl-c-plus-plus icon'></i> -->
          <div class="logo_name">Admin Panel</div>
          <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
          <li>
            <i class='bx bx-search'></i>
            <input type="text" placeholder="Search...">
            <span class="tooltip">Search</span>
          </li>
          <li>
            <a href="#" id="dashboard">
              <i class='bx bx-grid-alt'></i>
              <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
          </li>
          <li>
            <a href="#" id="posts">
              <i class='bx bx-folder'></i>
              <span class="links_name">Posts</span>
            </a>
            <span class="tooltip">Posts</span>
          </li>
          <li>
            <a href="../index.php" id="posts">
              <i class='bx bx-world'></i>
              <span class="links_name">Website</span>
            </a>
            <span class="tooltip">Website</span>
          </li>
          <li class="profile">
            <div class="profile-details">
              <i class='bx bx-user'></i>
              <div class="name_job">
                <div class="name"><?php username(); ?></div>
                <div class="job">Admin</div>
              </div>
            </div>
            <i class='bx bx-log-out' id="log_out"></i>
          </li>
        </ul>
      </div>
    <?php
  }

  public function Head_Navbar()
  {
    ?>
      <nav class="navbar navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid" id="navbar">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="navbarToggle">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="container" style="background-color: #0967a9;">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto me-auto mx-3">
                <li class="nav-item">
                  <a class="nav-link fw-bold nav_title ms-2" href="#">Home</a>
                </li>
              </ul>
              <?php
              if (isset($_SESSION['username'])) {
                if (isset($_SESSION['username']) && $_SESSION['username'] !== "") { ?>
                  <div>
                    <ul class="navbar-nav">
                      <li class="nav-item float-end me-3 fw-bold"><a href="Dashboard/Dashboard.php" class="nav_title" style="text-decoration: none;"><i class="bi bi-person-circle"> <?php username(); ?> </i></a></li>
                    </ul>
                  </div>              
                  <div>
                    <button type="button" class="nav-item btn btn-success me-5 nav_title fw-bold" id="logout" style="background: transparent; border: none;">LOGOUT <i class="bi bi-box-arrow-in-left"></i></button>
                  </div>              
                <?php } else { ?>
                  <div>
                    <button type="button" class="nav-item btn btn-success me-5 nav_title fw-bold" id="login" style="background: transparent; border: none;">LOGIN <i class="bi bi-box-arrow-in-right"></i></button>
                  </div>
                <?php } 
              } else{ 
                if (isset($_COOKIE['user']) && $_COOKIE['user'] !== "") { ?>
                <div>
                    <ul class="navbar-nav">
                      <li class="nav-item me-3 fw-bold"><a href="Dashboard/Dashboard.php" class="nav_title" style="text-decoration: none;"><i class="bi bi-person-circle"> <?php username(); ?> </i></a></li>
                    </ul>
                  </div>              
                  <div>
                    <button type="button" class="nav-item btn btn-success float-end me-5 nav_title fw-bold" id="logout" style="background: transparent; border: none;">LOGOUT <i class="bi bi-box-arrow-in-left"></i></button>
                  </div>              
                <?php } else { ?>
                  <div>
                    <button type="button" class="nav-item btn btn-success me-5 nav_title fw-bold" id="login" style="background: transparent; border: none;">LOGIN <i class="bi bi-box-arrow-in-right"></i></button>
                  </div>
                <?php } 
              } ?>
            </div>
          </div>
        </div>
      </nav>
      <?php
  }

  public function Footer()
  {
    ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.20/sweetalert2.all.min.js"></script>
      <!-- Include Slick Slider CSS and JS -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
      <script src="assets/js/Custom.js"></script>
    </body>

    </html>
    <?php
  }
}




?>