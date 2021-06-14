<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['email'])) { //punya akun


?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
     <title>Product</title>
</head>
<body>

     <header>
          <div class="navigation">
               <a href="https://binus.ac.id/" class="logo"><img src="images/binus_white.png" alt="#" width="120px"></a>
               <ul id="MenuItems">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="product.php">OUR PRODUCT</a></li>
                    <li><a href="ticketorder.php">ORDER</a></li>
                    <li><a href="article.php">ARTICLE</a></li>
                    <li><a href="streetview.php">VIEW</a></li>
                    <li class="username" id="test" onclick="function2()"><h6><?php echo $_SESSION['username']; ?></h6></li>
               </ul>
               <?php
                    $count=0;
                    if(isset($_SESSION['cart'])){
                         $count=count($_SESSION['cart']);
                    }
               ?>
               <a href="cart.php" class="bag"><img src="images/bag2.png" alt="#" width="50px">(<?php echo $count; ?>)</a>
               <img src="images/menu.png" class="menu-icon" onclick="menutoggle();function4();" alt="#">    
          </div>
     </header>

    <section>
        <div class="logout" id="hidedivv" onmouseover="function3()" onmouseout="function4()" onclick="function5()">
            <h6  onclick="function5()">Logout</h6>
        </div>
        <h2 class="title show-on-scroll" id="titles">Produk Olahan Buah Naga</h2>
        <div class="small-container single-product show-on-scroll">
            <div class="row">
                <div class="col-2">
                    <img src="images/jus-buah-naga.jpeg" alt="" width="100%">

                </div>
                <div class="col-2">
                    <form action="action.php" method="POST">
                        <p>Produk Olahan</p>
                        <h1>Jus Buah Naga</h1>
                        <h4>Rp. 50.000</h4>
                        <button type="submit" class="btn1" name="Add_To_Cart">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Jus Buah Naga">
                        <input type="hidden" name="Price" value="50000">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h3>Product Details <i class="fa fa-indent"></i></h3>
                        <p>Jus buah naga mengandung kalori cukup rendah sehingga mampu mencegah obesitas. Jus buah naga diolah langsung dari kebun petik buah naga Bululawang!</p>    
                    </form>
                </div>
            </div>
        </div>

        <div class="small-container single-product show-on-scroll">
            <div class="row">
                <div class="col-2">
                    <img src="images/sirup-buah-naga.jpg" alt="" width="100%">

                </div>
                <div class="col-2">
                    <form action="action.php" method="POST">
                        <p>Produk Olahan</p>
                        <h1>Sirup Buah Naga</h1>
                        <h4>Rp. 25.000</h4>
                        <button type="submit" class="btn1" name="Add_To_Cart">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Sirup Buah Naga">
                        <input type="hidden" name="Price" value="25000">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <h3>Product Details <i class="fa fa-indent"></i></h3>
                        <p>Sirup buah naga hasil olahan dari kebun petik buah naga Bululawang tanpa pengawet dari buah yang masih segar!</p>
    
                    </form>
                </div>
            </div>
        </div>

        <div class="small-container single-product show-on-scroll">
            <div class="row">
                <div class="col-2">
                    <img src="images/Kulit-buah-naga2.jpg" alt="" width="100%">

                </div>
                <div class="col-2">
                    <form action="action.php" method="POST">
                        <p>Produk Olahan</p>
                    <h1>Kulit Buah Naga</h1>
                    <h4>Rp. 50.000</h4>
                    <button type="submit" class="btn1" name="Add_To_Cart">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Kulit Buah Naga">
                    <input type="hidden" name="Price" value="50000">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Product Details <i class="fa fa-indent"></i></h3>
                    <p>Kulit buah naga yang mengandung banyak manfaat sebagai obat ataupun olahan makanan pendamping!<br></p>
                    </form>
                    
                </div>
            </div>
        </div>

        <div class="small-container single-product show-on-scroll">
            <div class="row">
                <div class="col-2">
                    <img src="images/manisan-buah-naga.jpg" alt="" width="100%">

                </div>
                <div class="col-2">
                    <form action="action.php" method="POST">
                        <p>Produk Olahan</p>
                    <h1>Manisan Buah Naga</h1>
                    <h4>Rp. 50.000</h4>
                    <button type="submit" class="btn1" name="Add_To_Cart">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Manisan Buah Naga">
                    <input type="hidden" name="Price" value="50000">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <h3>Product Details <i class="fa fa-indent"></i></h3>
                    <p>Manisan buah naga yang diolah dari kulit buah naga yang dikeringkan dan menjadi camilan oleh - oleh khas Bululawang!<br></p>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>

     <footer>
          ©HCI Kelompok 1
     </footer>

     <script>
          var MenuItems = document.getElementById("MenuItems");
          
          MenuItems.style.maxHeight = "0px";

          function menutoggle(){
               if(MenuItems.style.maxHeight == "0px"){
                    MenuItems.style.maxHeight = "200px";
               }
               else{
                    MenuItems.style.maxHeight = "0px";
               }
          }
          var o = document.getElementById("hidedivv");
        if(o.style.display === "none"){
            o.style.display = "block";
        } else {
            o.style.display = "none";
        }
        function function2() {
            var o = document.getElementById("hidedivv");
            if(o.style.display === "none"){
            o.style.display = "block";
            } else {
                o.style.display = "none";
            }
        }
        function function3() {
            var o = document.getElementById("hidedivv");
                o.style.display = "block";
        }

        function function4() {
        var o = document.getElementById("hidedivv");
                o.style.display = "none";
        }

        function function5() {
            window.location.replace("logout.php");
        }
     </script>

     <script src="productjs.js"></script>
     
</body>
</html>

<?php
}else{ //GUEST
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
     <title>Product</title>
</head>
<body>

     <header>
          <div class="navigation">
               <a href="https://binus.ac.id/" class="logo"><img src="images/binus_white.png" alt="#" width="120px"></a>
               <ul id="MenuItems">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="product.php">OUR PRODUCT</a></li>
                    <li><a href="ticketorder.php">ORDER</a></li>
                    <li><a href="article.php">ARTICLE</a></li>
                    <li><a href="streetview.php">VIEW</a></li>
                    <li><a href="login.php">LOGIN</a></li>
               </ul>
               <?php
                    $count=0;
                    if(isset($_SESSION['cart'])){
                         $count=count($_SESSION['cart']);
                    }
               ?>
               <a href="cart.php" class="bag"><img src="images/bag2.png" alt="#" width="50px">(<?php echo $count; ?>)</a>
               <img src="images/menu.png" class="menu-icon" onclick="menutoggle()" alt="#">    
          </div>
     </header>

    <section>
        <h2 class="title show-on-scroll" id="titles">Produk Olahan Buah Naga</h2>
        <div class="small-container single-product show-on-scroll">
            <div class="row">
                <div class="col-2">
                    <img src="images/jus-buah-naga.jpeg" alt="" width="100%">

                </div>
                <div class="col-2">
                    <form action="login.php" method="POST">
                        <p>Produk Olahan</p>
                        <h1>Jus Buah Naga</h1>
                        <h4>Rp. 50.000</h4>
                        <button type="submit" class="btn1" name="Add_To_Cart" href="login.php">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Jus Buah Naga">
                        <input type="hidden" name="Price" value="50000">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h3>Product Details <i class="fa fa-indent"></i></h3>
                        <p>Jus buah naga mengandung kalori cukup rendah sehingga mampu mencegah obesitas. Jus buah naga diolah langsung dari kebun petik buah naga Bululawang!</p>    
                    </form>
                </div>
            </div>
        </div>

        <div class="small-container single-product show-on-scroll">
            <div class="row">
                <div class="col-2">
                    <img src="images/sirup-buah-naga.jpg" alt="" width="100%">

                </div>
                <div class="col-2">
                    <form action="login.php" method="POST">
                        <p>Produk Olahan</p>
                        <h1>Sirup Buah Naga</h1>
                        <h4>Rp. 25.000</h4>
                        <button type="submit" class="btn1" name="Add_To_Cart" href="login.php">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Sirup Buah Naga">
                        <input type="hidden" name="Price" value="25000">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <h3>Product Details <i class="fa fa-indent"></i></h3>
                        <p>Sirup buah naga hasil olahan dari kebun petik buah naga Bululawang tanpa pengawet dari buah yang masih segar!</p>
    
                    </form>
                </div>
            </div>
        </div>

        <div class="small-container single-product show-on-scroll">
            <div class="row">
                <div class="col-2">
                    <img src="images/Kulit-buah-naga2.jpg" alt="" width="100%">

                </div>
                <div class="col-2">
                    <form action="login.php" method="POST">
                        <p>Produk Olahan</p>
                    <h1>Kulit Buah Naga</h1>
                    <h4>Rp. 50.000</h4>
                    <button type="submit" class="btn1" name="Add_To_Cart" href="login.php">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Kulit Buah Naga">
                    <input type="hidden" name="Price" value="50000">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Product Details <i class="fa fa-indent"></i></h3>
                    <p>Kulit buah naga yang mengandung banyak manfaat sebagai obat ataupun olahan makanan pendamping!<br></p>
                    </form>
                    
                </div>
            </div>
        </div>

        <div class="small-container single-product show-on-scroll">
            <div class="row">
                <div class="col-2">
                    <img src="images/manisan-buah-naga.jpg" alt="" width="100%">

                </div>
                <div class="col-2">
                    <form action="login.php" method="POST">
                        <p>Produk Olahan</p>
                    <h1>Manisan Buah Naga</h1>
                    <h4>Rp. 50.000</h4>
                    <button type="submit" class="btn1" name="Add_To_Cart" href="login.php">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Manisan Buah Naga">
                    <input type="hidden" name="Price" value="50000">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <h3>Product Details <i class="fa fa-indent"></i></h3>
                    <p>Manisan buah naga yang diolah dari kulit buah naga yang dikeringkan dan menjadi camilan oleh - oleh khas Bululawang!<br></p>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>

     <footer>
          ©HCI Kelompok 1
     </footer>

     <script>
          var MenuItems = document.getElementById("MenuItems");
          
          MenuItems.style.maxHeight = "0px";

          function menutoggle(){
               if(MenuItems.style.maxHeight == "0px"){
                    MenuItems.style.maxHeight = "200px";
               }
               else{
                    MenuItems.style.maxHeight = "0px";
               }
          }
     </script>

     <script src="productjs.js"></script>
     
</body>
</html>

<?php
}
?>