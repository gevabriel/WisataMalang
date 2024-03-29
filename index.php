<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <title>WisataMalang</title>
  <link rel="icon" href="assetsindex/images/thumb.png" type="image/png">

  <!-- Bootstrap core CSS -->
  <link href="vendorindex/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assetsindex/css/fontawesome.css">
  <link rel="stylesheet" href="assetsindex/css/templatemo-plot-listing.css">
  <link rel="stylesheet" href="assetsindex/css/animated.css">
  <link rel="stylesheet" href="assetsindex/css/owl.css">

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <?php
              session_start(); // Start the session
              
              // Check if the 'username' key exists in the $_SESSION array
              if (!isset($_SESSION['username'])) {
                ?>
                <li><a href="register.php"><b>SIGN UP</b></a></li>
                <li><a href="login.php"><b>LOG IN</b></a></li>
                <?php
              } else {
                ?>

                <ul class="navbar-nav ms-auto ms-md 0 me-3 me-lg-4">
                  <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <b>Welcome,
                        <?php echo $_SESSION['username']; ?>
                        <?php
                        include 'profilpicture.php';
                        ?>
                      </b>
                      <?php
                      echo "<img src='profile_pictures/$profilePictureName' alt='Profile Picture' class='rounded-circle' style='height: 30px; width: 30px;'>";
                      ?>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><a href="logout.php"><b>LOG OUT</b></a></li>
                    </ul>


                  </li>
                </ul>
                <?php
              }
              ?>
            </ul>
            <a class='menu-trigger'>
              <!-- <span>Menu</span> -->
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="top-text header-text">
            <h6></h6>
            <h2>Temukan wisatamu!</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <form id="search-form" name="gs" method="submit" role="search" action="#">
            <div class="row">
              <div class="col-lg-9 align-self-center">
                <fieldset>
                  <input type="address" name="address" class="searchText" placeholder="Destinasimu" autocomplete="on"
                    required>
                </fieldset>
              </div>
              <div class="col-lg-3">
                <fieldset>
                  <button class="main-button"><i class="fa fa-search"></i> Search Now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-10 offset-lg-1">
          <ul class="categories">
            <li><a href="listing.php"><span class="icon"><img src="assetsindex/images/pine-tree.png" alt="Food"></span>
                Nature</a></li>
            <li><a href="listing.php"><span class="icon"><img src="assetsindex/images/koala (1).png" alt="Home"></span>
                Zoo</a></li>
            <li><a href="listing.php"><span class="icon"><img src="assetsindex/images/brush.png" alt="Vehicle"></span>
                Museum</a></li>
            <li><a href="listing.php"><span class="icon"><img src="assetsindex/images/controller.png"
                    alt="Shopping"></span> Playground</a></li>
            <li><a href="listing.php"><span class="icon"><img src="assetsindex/images/food-apple.png"
                    alt="Travel"></span> Garden</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>


  <div class="popular-categories">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Ayo liburan ke Malang!</h2>
            <h6>Ada berbagai jenis wisata yang bisa kalian kunjungi loh! Cekidot!</h6>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-2">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <span class="icon"><img src="assetsindex/images/pine-tree.png" alt=""></span>

                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <span class="icon"><img src="assetsindex/images/koala (1).png" alt=""></span>

                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <span class="icon"><img src="assetsindex/images/brush.png" alt=""></span>

                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <span class="icon"><img src="assetsindex/images/controller.png" alt=""></span>

                      </div>
                    </div>
                    <div class="last-thumb">
                      <div class="thumb">
                        <span class="icon"><img src="assetsindex/images/food-apple.png" alt=""></span>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-10 align-self-center">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-5 align-self-center">
                              <div class="left-text">
                                <h4>Gunung Bromo</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet nunc sit amet
                                  nisi pretium, eget dictum dolor venenatis. Vivamus maximus egestas fringilla. Aenean
                                  lacinia nulla quis mauris rhoncus, et pharetra velit dignissim. Sed bibendum, elit ac
                                  fringilla venenatis, eros purus fringilla libero, sed mollis mauris lacus sed diam.
                                </p>
                                <div class="main-white-button"><a href="content.php"><i class="fa fa-eye"></i> Discover
                                    More</a>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                              <div class="right-image">
                                <img
                                  src="assetsindex/images/embun-es-selimuti-gunung-bromo-suhu-capai-2-derajat-celsius-t6VNmOXwJ7.jpg"
                                  alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-5 align-self-center">
                              <div class="left-text">
                                <h4>Batu Secret Zoo</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet nunc sit amet
                                  nisi pretium, eget dictum dolor venenatis. Vivamus maximus egestas fringilla. Aenean
                                  lacinia nulla quis mauris rhoncus, et pharetra velit dignissim. Sed bibendum, elit ac
                                  fringilla venenatis, eros purus fringilla libero, sed mollis mauris lacus sed diam.
                                </p>
                                <div class="main-white-button"><a href="content.php"><i class="fa fa-eye"></i> Discover
                                    More</a>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                              <div class="right-image">
                                <img src="assetsindex/images/Batu-Secret-Zoo-Harimau.jpg">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-5 align-self-center">
                              <div class="left-text">
                                <h4>Museum Angkut</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet nunc sit amet
                                  nisi pretium, eget dictum dolor venenatis. Vivamus maximus egestas fringilla. Aenean
                                  lacinia nulla quis mauris rhoncus, et pharetra velit dignissim. Sed bibendum, elit ac
                                  fringilla venenatis, eros purus fringilla libero, sed mollis mauris lacus sed diam.
                                </p>
                                <div class="main-white-button"><a href="content.php"><i class="fa fa-eye"></i> Discover
                                    More
                                  </a></div>
                              </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                              <div class="right-image">
                                <img src="assetsindex/images/promo-wisata_promo-wisata_full01.jpg">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-5 align-self-center">
                              <div class="left-text">
                                <h4>Batu Night Spectacular</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet nunc sit amet
                                  nisi pretium, eget dictum dolor venenatis. Vivamus maximus egestas fringilla. Aenean
                                  lacinia nulla quis mauris rhoncus, et pharetra velit dignissim. Sed bibendum, elit ac
                                  fringilla venenatis, eros purus fringilla libero, sed mollis mauris lacus sed diam.
                                </p>
                                <div class="main-white-button"><a href="content.php"><i class="fa fa-eye"></i> Discover
                                    More</a>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                              <div class="right-image">
                                <img src="assetsindex/images/Batu-Night-Spectacular-Komedi-Putar.jpg">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-5 align-self-center">
                              <div class="left-text">
                                <h4>Kebun Apel Malang</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet nunc sit amet
                                  nisi pretium, eget dictum dolor venenatis. Vivamus maximus egestas fringilla. Aenean
                                  lacinia nulla quis mauris rhoncus, et pharetra velit dignissim. Sed bibendum, elit ac
                                  fringilla venenatis, eros purus fringilla libero, sed mollis mauris lacus sed diam.
                                </p>
                                <div class="main-white-button"><a rel="nofollow" href="content.php"><i
                                      class="fa fa-eye"></i> Discover More</a></div>
                              </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                              <div class="right-image">
                                <img src="assetsindex/images/kebun-buah-apel-batu-malang.jpg" alt="Traveling Beach">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="about">
            <div class="logo">
              <img src="assetsindex/images/logobaru.png">
            </div>
            <p>Wisatamalang merupakan sebuah website yang menyediakan berbagai informasi dan review mengenai berbagai
              tempat wisata menarik yang terdapat di Malang.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="helpful-links">
            <h4>Follow Our Social Media!</h4>
            <div class="row">
              <div class="col-lg-12 col-sm-9">
                <li><a href="#"><i class="fab fa-facebook" style="height: 25px;"></i> Wisata Malang </a></li>
                <li><a href="#"><i class="fab fa-twitter" style="height: 25px;"></i> @wisatamalang</a></li>
                <li><a href="#"><i class="fab fa-instagram" style="height: 25px;"></i> @wisatamalang</a></li>
                <li><a href="#"><i class="fab fa-pinterest" style="height: 25px;"></i> @wisatamalang</a></li>
                <!-- </div>
              <div class="col-lg-6">
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Awards</a></li>
                  <li><a href="#">Useful Sites</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="contact-us">
            <h4>Contact Us!</h4>
            <p>Jl. Veteran, Ketawanggede, Kec. Lowokwaru, <br> Kota Malang, Jawa
            </p>
            <div class="row">
              <div class="col-lg-6">
                <a href="#" class="fab fa-whatsapp"> +6281312345678</a>
              </div>
              <div class="col-lg-9">
                <a href="#">wisatamalang@tourism.com</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="sub-footer">
            <p>Copyright © 2022 WisataMalang, Ltd. All Rights Reserved.
              <br>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendorindex/jquery/jquery.min.js"></script>
  <script src="vendorindex/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assetsindex/js/owl-carousel.js"></script>
  <script src="assetsindex/js/animation.js"></script>
  <script src="assetsindex/js/imagesloaded.js"></script>
  <script src="assetsindex/js/custom.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css"      />

</body>

</html>