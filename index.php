<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['email'])) { //punya akun


?>
<!DOCTYPE html>
<html>


<head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Kebon Nogo</title>
    <link rel="stylesheet" href="styles.css">
</head>


<body>
    <header>
        <div class="navigation">
            <a href="https://binus.ac.id/" class="logo"><img src="image/logo2.png" alt="#" width="120px"></a>
            <ul id="MenuItems">
                 <li><a href="index.php">HOME</a></li>
                <li><a href="product.php">OUR PRODUCT</a></li>
                <li><a href="ticketorder.php">ORDER</a></li>
                <li><a href="article.php">ARTICLE</a></li>
                <li><a href="streetview.php">VIEW</a></li>
                <li class="username" id="test" onclick="function2()"><h6><?php echo $_SESSION['username']; ?></h6></li>
            </ul>
            <img src="image/menu.png" class="menu-icon" onclick="menutoggle();function4();" alt="#">    
        </div>
    </header>
    <section class="first-section">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-caption d-block">
                    <div class="weather">
                        <div class="logout" id="hidedivv" onmouseover="function3()" onmouseout="function4()" onclick="function5()">
                            <h6  onclick="function5()">Logout</h6>
                        </div>
                        <button onclick="function1()" >Hide</button>
                        <div class="container " id="hidediv">
                            <div class="app-title">
                                <p>Cuaca</p>
                            </div>
                            <div class="notification"></div>
                            <div class="weather-container">
                                <div class="weather-icon">
                                    <img src="icons/unknown.png" alt="">
                                </div>
                                <div class="temperature-value">
                                    <p>- °<span>C</span></p>
                                </div>
                                <div class="temperature-description">
                                    <p>-</p>
                                </div>
                                <div class="location">
                                    <p>-</p>
                                </div>
                            </div>
                            <div class="quote">
                                <p>-</p>
                            </div>
                        </div>
                    </div>
                    <div class="judul">
                        <h1>KEBOEN NOGO </br>BULULAWANG</h1>
                    </div>
                </div>
                 <div class="carousel-item active">
                    <img class="d-block w-100" src="image/background1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="image/background2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="image/background3.jpg" alt="Third slide">
                </div>
            </div>
        </div>
    </section>

    <section class=sixth-section>
        <div class="first-div-sixth-section">
            <h1>Latest Articles</h1>
        </div>
        <div class="second-div-sixth-section">
            <div class="first-diff">
                <figure>
                    <img src="image/berita-1.jpeg" alt="berita 1">
                </figure>
                <h3>Mudik Lebaran 2021 Dilarang, Kemenhub Susun Syarat Perjalanan Via Laut</h3>
                <a href="article.php">
                <button>Read More</button>
                </a>
            </div>
            <div class="second-diff">
                <figure>
                    <img src="image/berita-2.jpeg" alt="berita 2">
                </figure>
                <h3>Usai Cak Imin, Kini Fahri Hamzah Temui Gibran</h3>
                <a href="article.php">
                <button>Read More</button>
                </a>
            </div>
            <div class="third-diff">
                <figure>
                    <img src="image/berita-3.jpeg" alt="berita 3">
                </figure>
                <h3>Usai Ketemu Menhan Inggris, Prabowo ke Rusia Bahas Kerja Sama Militer</h3>
                <a href="article.php">
                <button>Read More</button>
                </a>
            </div>
            <div class="fourth-diff">
                <figure>
                    <img src="image/berita-4.jpeg" alt="berita 4">
                </figure>
                <h3>Malaysia Ungkap 3 Pria Termasuk 1 WNI Ditangkap Atas Rencana Bunuh Mahathir</h3>
                <a href="article.php">
                <button>Read More</button>
                </a>
            </div>
        </div>
    </section>

    <section class="fifth-section">
        <div class=first-div-fifth-section>
            <h1 class="defaulth1">Order sekarang untuk dapat berwisata </br> dengan harga cuma</h1>
            <h1 class="hideh1">Order sekarang untuk </br> dapat berwisata </br> dengan harga cuma</h1>
            <h2>Rp 5.000</h2>
            <a href="ticketorder.php">
                <button>Book Now</button>
            </a>
        </div>
        <div class="second-div-fifth-section">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img class="d-block w-100" src="image/kebon.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="image/kebon2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="image/kebon3.jpg" alt="Third slide">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="third-section">
        <div class="second-div-third-section">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-caption d-block">
                    </div>
                    <div class="carousel-item active">
                        <img class="jus d-block w-100" src="image/jus-buah-naga.png" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Jus Buah Naga</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="image/sirup-buah-naga.png" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Sirup Buah Naga</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="image/kulit-buah-naga.png" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Kulit Buah Naga</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="manisan d-block w-100" src="image/manisan-buah-naga.png" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Manisan Buah Naga</h5>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="first-div-third-section">
            <div class="judul">
                <h1>Our Product</h1>
                <h2>Kita menawarkan produk produk olahan berkualitas tinggi dan fresh yang dibuat langsung dari kebon nogo bululawang</h2>
                <a href="product.php">
                <button>Buy Now</button>
                </a>
            </div>
        </div>
    </section>

    <footer>
        ©HCI Kelompok 1
    </footer>

    <!-- Optional JavaScript -->
    <script src="myjavascript/scripts.js"></script>
    <script>
        var o = document.getElementById("hidedivv");
        if(o.style.display === "none"){
            o.style.display = "block";
        } else {
            o.style.display = "none";
        }
    </script>
    <script>
          var MenuItems = document.getElementById("MenuItems");
          
          MenuItems.style.maxHeight = "0px";

          function menutoggle(){
               if(MenuItems.style.maxHeight == "0px"){
                    MenuItems.style.maxHeight = "220px";
               }
               else{
                    MenuItems.style.maxHeight = "0px";
               }
          }
     </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>


</html>

<?php
}else{ //GUEST
?>
<!DOCTYPE html>
<html>


<head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Kebon Nogo</title>
    <link rel="stylesheet" href="styles.css">
</head>


<body>
    <header>
        <div class="navigation">
            <a href="https://binus.ac.id/" class="logo"><img src="image/logo2.png" alt="#" width="120px"></a>
            <ul id="MenuItems">
                 <li><a href="index.php">HOME</a></li>
                <li><a href="product.php">OUR PRODUCT</a></li>
                <li><a href="ticketorder.php">ORDER</a></li>
                <li><a href="article.php">ARTICLE</a></li>
                <li><a href="streetview.php">VIEW</a></li>
                <li><a href="login.php">LOGIN</a></li>
            </ul>
            <img src="image/menu.png" class="menu-icon" onclick="menutoggle()" alt="#">    
        </div>
    </header>
    <section class="first-section">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-caption d-block">
                    <div class="weather">
                        <button onclick="function1()">Hide</button>
                        <div class="container " id="hidediv">
                            <div class="app-title">
                                <p>Cuaca</p>
                            </div>
                            <div class="notification"></div>
                            <div class="weather-container">
                                <div class="weather-icon">
                                    <img src="icons/unknown.png" alt="">
                                </div>
                                <div class="temperature-value">
                                    <p>- °<span>C</span></p>
                                </div>
                                <div class="temperature-description">
                                    <p>-</p>
                                </div>
                                <div class="location">
                                    <p>-</p>
                                </div>
                            </div>
                            <div class="quote">
                                <p>-</p>
                            </div>
                        </div>
                    </div>
                    <div class="judul">
                        <h1>KEBOEN NOGO </br>BULULAWANG</h1>
                    </div>
                </div>
                 <div class="carousel-item active">
                    <img class="d-block w-100" src="image/background1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="image/background2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="image/background3.jpg" alt="Third slide">
                </div>
            </div>
        </div>
    </section>

    <section class=sixth-section>
        <div class="first-div-sixth-section">
            <h1>Latest Articles</h1>
        </div>
        <div class="second-div-sixth-section">
            <div class="first-diff">
                <figure>
                    <img src="image/berita-1.jpeg" alt="berita 1">
                </figure>
                <h3>Mudik Lebaran 2021 Dilarang, Kemenhub Susun Syarat Perjalanan Via Laut</h3>
                <a href="article.php">
                <button>Read More</button>
                </a>
            </div>
            <div class="second-diff">
                <figure>
                    <img src="image/berita-2.jpeg" alt="berita 2">
                </figure>
                <h3>Usai Cak Imin, Kini Fahri Hamzah Temui Gibran</h3>
                <a href="article.php">
                <button>Read More</button>
                </a>
            </div>
            <div class="third-diff">
                <figure>
                    <img src="image/berita-3.jpeg" alt="berita 3">
                </figure>
                <h3>Usai Ketemu Menhan Inggris, Prabowo ke Rusia Bahas Kerja Sama Militer</h3>
                <a href="article.php">
                <button>Read More</button>
                </a>
            </div>
            <div class="fourth-diff">
                <figure>
                    <img src="image/berita-4.jpeg" alt="berita 4">
                </figure>
                <h3>Malaysia Ungkap 3 Pria Termasuk 1 WNI Ditangkap Atas Rencana Bunuh Mahathir</h3>
                <a href="article.php">
                <button>Read More</button>
                </a>
            </div>
        </div>
    </section>

    <section class="fifth-section">
        <div class=first-div-fifth-section>
            <h1 class="defaulth1">Order sekarang untuk dapat berwisata </br> dengan harga cuma</h1>
            <h1 class="hideh1">Order sekarang untuk </br> dapat berwisata </br> dengan harga cuma</h1>
            <h2>Rp 5.000</h2>
            <a href="ticketorder.php">
                <button>Book Now</button>
            </a>
        </div>
        <div class="second-div-fifth-section">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img class="d-block w-100" src="image/kebon.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="image/kebon2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="image/kebon3.jpg" alt="Third slide">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="third-section">
        <div class="second-div-third-section">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-caption d-block">
                    </div>
                    <div class="carousel-item active">
                        <img class="jus d-block w-100" src="image/jus-buah-naga.png" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Jus Buah Naga</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="image/sirup-buah-naga.png" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Sirup Buah Naga</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="image/kulit-buah-naga.png" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Kulit Buah Naga</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="manisan d-block w-100" src="image/manisan-buah-naga.png" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Manisan Buah Naga</h5>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="first-div-third-section">
            <div class="judul">
                <h1>Our Product</h1>
                <h2>Kita menawarkan produk produk olahan berkualitas tinggi dan fresh yang dibuat langsung dari kebon nogo bululawang</h2>
                <a href="product.php">
                <button>Buy Now</button>
                </a>
            </div>
        </div>
    </section>

    <footer>
        ©HCI Kelompok 1
    </footer>

    <!-- Optional JavaScript -->
    <script src="myjavascript/scripts.js"></script>
    <script>
          var MenuItems = document.getElementById("MenuItems");
          
          MenuItems.style.maxHeight = "0px";

          function menutoggle(){
               if(MenuItems.style.maxHeight == "0px"){
                    MenuItems.style.maxHeight = "220px";
               }
               else{
                    MenuItems.style.maxHeight = "0px";
               }
          }
     </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>


    </html>
<?php
}
?>