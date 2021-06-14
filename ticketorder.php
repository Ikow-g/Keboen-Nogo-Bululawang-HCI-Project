<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['email'])) { //punya akun


?>
<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible"
      content="IE=edge">
      <title>Keboen Nogo Bululawang Ticket Order</title>
      <meta name="viewport"
      content="width=device-width",
      initital-scale="1">
      <link rel="stylesheet" href="ticketstyle.css">
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
               <img src="images/menu.png" class="menu-icon" onclick="menutoggle();function4();" alt="#">    
          </div>
  </header>

    <section class = "banner">
        <div class="logout" id="hidedivv" onmouseover="function3()" onmouseout="function4()" onclick="function5()">
            <h6  onclick="function5()">Logout</h6>
        </div>
      <h2>PEMESANAN TIKET ONLINE</h2>
      <div class = "card-container">
        <div class = "card-img">
        </div>
        <div class = "card-content">

          <h3>Reservation</h3>

          <form action="ticketorder2.php" method="POST">

            <!-- Menu Input Nama -->
            <div class = "form-row">
              <tr>
                  <td><input type="text" name="nama" required placeholder="Nama Lengkap"></td>
                </tr>
            </div>

              <!-- Menu Input Nomor HP -->

              <div class = "form-row">
                <tr>
                  <td><input type = "text" name="hp" required placeholder="Nomor Handphone"></td>
                  </tr>
              </div>
            
                <!-- Menu Input Email -->

                <div class = "form-row">
                  <tr>
                <td><input type = "email" name="email" required placeholder ="Email"></td>
                  </tr>
                </div>
                
                <!-- Menu Input Jumlah -->

                  <div class = "form-row">
                    <tr>
                      <td><input type = "text" name="ticket" required placeholder="Jumlah Ticket"></td>
                      </tr>
                  </div>
                
                <button type="submit">Submit</button>
                <?php if (isset($_GET['info'])) { ?>
                <p class="info"><?php echo $_GET['info']; ?></p>
                <?php }?>
            </form>

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

          </div>
        </div>
      </section>
    </body>
  </html>

<?php
}else{ //GUEST
?>
<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible"
      content="IE=edge">
      <title>Keboen Nogo Bululawang Ticket Order</title>
      <meta name="viewport"
      content="width=device-width",
      initital-scale="1">
      <link rel="stylesheet" href="ticketstyle.css">
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
               <img src="images/menu.png" class="menu-icon" onclick="menutoggle()" alt="#">    
          </div>
  </header>

    <section class = "banner">
      <h2>PEMESANAN TIKET ONLINE</h2>
      <div class = "card-container">
        <div class = "card-img">
        </div>

        <div class = "card-content">

          <h3>Reservation</h3>

          <form action="login.php">

            <!-- Menu Input Nama -->
            <div class = "form-row">
              <tr>
                  <td><input type="text" name="nama" required placeholder="Nama Lengkap"></td>
                </tr>
            </div>

              <!-- Menu Input Nomor HP -->

              <div class = "form-row">
                <tr>
                  <td><input type = "text" name="hp" required placeholder="Nomor Handphone"></td>
                  </tr>
              </div>
            
                <!-- Menu Input Email -->

                <div class = "form-row">
                  <tr>
                <td><input type = "email" name="email" required placeholder ="Email"></td>
                  </tr>
                </div>
                
                <!-- Menu Input Jumlah -->

                  <div class = "form-row">
                    <tr>
                      <td><input type = "text" name="ticket" required placeholder="Jumlah Ticket"></td>
                      </tr>
                  </div>
                
                <button type="submit">Submit</button>

            </form>

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

          </div>
        </div>
      </section>
    </body>
  </html>
<?php
}
?>