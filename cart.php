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
    <link rel="stylesheet" href="stylecart.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Cart</title>
</head>
<body>

<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Pricing</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </div>
        </div>
    </div>
</nav> -->

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
     <div class="logout" id="hidedivv" onmouseover="function3()" onmouseout="function4()" onclick="function5()">
            <h6  onclick="function5()">Logout</h6>
        </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>

            <div class="col-lg-8">
                <table class="table bg-light">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga Produk</th>
                        <th scope="col">Jumlah Produk</th>
                        <th scope="col">Total</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                            if(isset($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $key => $value){
                                    $sr=$key+1;
                                    echo"
                                        <tr>
                                            <td>$sr</td>
                                            <td>$value[Item_Name]</td>
                                            <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                            <td>
                                                <form action='action.php' method='POST'>
                                                    <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit()' type='number' value='$value[Quantity]' min='1' max='10'>
                                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                </form>
                                            </td>
                                            <td class='itotal'></td>
                                            <td>
                                                <form action='action.php' method='POST'>
                                                    <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                </form> 
                                            </td>
                                        </tr>
                                    ";
                                 }
                            }
                            
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h3>Total Harga:</h3>
                    <h5 class="text-right" id="gtotal"></h5>
                    <br>
                    <?php
                        if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
                        {
                    ?>
                    <form action="purchase.php" method="POST">
                        <div class="mb-3">
                            <label>Full Name</label>
                            <input type="text" name="full_name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Phone Number</label>
                            <input type="number" name="phone_no" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" required>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pay_mode" value="COD"  id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Cash On Delivery
                            </label>
                        </div>
                        <button class="btn btn-primary btn-block" name="purchase">Make Purchase</button>
                    </form>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <footer>
          ©HCI Kelompok 1
     </footer>

    <script>
        
        var gt=0;
        var iprice=document.getElementsByClassName('iprice');
        var iquantity=document.getElementsByClassName('iquantity');
        var itotal=document.getElementsByClassName('itotal');
        var gtotal=document.getElementById('gtotal');

        function subTotal(){
            gt=0;
            for(i=0;i<iprice.length;i++){
                itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);

                gt=gt+(iprice[i].value)*(iquantity[i].value);
            }
            gtotal.innerText=gt;
        }

        subTotal();

    </script>

    <script>
          var MenuItems = document.getElementById("MenuItems");
          
          MenuItems.style.maxHeight = "0px";

          function menutoggle(){
               if(MenuItems.style.maxHeight == "0px"){
                    MenuItems.style.maxHeight = "300px";
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
    <link rel="stylesheet" href="stylecart.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Cart</title>
</head>
<body>

<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Pricing</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </div>
        </div>
    </div>
</nav> -->

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
               <img src="images/menu.png" class="menu-icon" onclick="menutoggle();function4();" alt="#">    
          </div>
     </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>

            <div class="col-lg-8">
                <table class="table bg-light">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga Produk</th>
                        <th scope="col">Jumlah Produk</th>
                        <th scope="col">Total</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                            if(isset($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $key => $value){
                                    $sr=$key+1;
                                    echo"
                                        <tr>
                                            <td>$sr</td>
                                            <td>$value[Item_Name]</td>
                                            <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                            <td>
                                                <form action='action.php' method='POST'>
                                                    <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit()' type='number' value='$value[Quantity]' min='1' max='10'>
                                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                </form>
                                            </td>
                                            <td class='itotal'></td>
                                            <td>
                                                <form action='action.php' method='POST'>
                                                    <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                </form> 
                                            </td>
                                        </tr>
                                    ";
                                 }
                            }
                            
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h3>Total Harga:</h3>
                    <h5 class="text-right" id="gtotal"></h5>
                    <br>
                    <?php
                        if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
                        {
                    ?>
                    <form action="purchase.php" method="POST">
                        <div class="mb-3">
                            <label>Full Name</label>
                            <input type="text" name="full_name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Phone Number</label>
                            <input type="number" name="phone_no" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" required>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pay_mode" value="COD"  id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Cash On Delivery
                            </label>
                        </div>
                        <button class="btn btn-primary btn-block" name="purchase">Make Purchase</button>
                    </form>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <footer>
          ©HCI Kelompok 1
     </footer>

    <script>
        
        var gt=0;
        var iprice=document.getElementsByClassName('iprice');
        var iquantity=document.getElementsByClassName('iquantity');
        var itotal=document.getElementsByClassName('itotal');
        var gtotal=document.getElementById('gtotal');

        function subTotal(){
            gt=0;
            for(i=0;i<iprice.length;i++){
                itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);

                gt=gt+(iprice[i].value)*(iquantity[i].value);
            }
            gtotal.innerText=gt;
        }

        subTotal();

    </script>

    <script>
          var MenuItems = document.getElementById("MenuItems");
          
          MenuItems.style.maxHeight = "0px";

          function menutoggle(){
               if(MenuItems.style.maxHeight == "0px"){
                    MenuItems.style.maxHeight = "300px";
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