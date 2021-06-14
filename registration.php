<!DOCTYPE html>
<html>


<head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Kebon Nogo</title>
    <link rel="stylesheet" href="styles2.css">
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
            <img src="image/menu.png" class="menu-icon" onclick="menutoggle();function4();" alt="#">    
        </div>
    </header>
    
    <section class="first-section">
        <form action="insert.php" method="POST">
            <h2>Register</h2><br>
            <label for="Username">Username :</label>
            <input type="text" name="username" required>
            <label for="Password">Password :</label>
            <input type="password" name="password" required>
            <label for="Gender">Gender :</label>
            <div class="genderr">
                <input type="radio" name="gender" value="m" required class="genderrr">Male
                <input type="radio" name="gender" value="f" required class="genderrr">Female <br>
            </div>
            <div class="emailll">
                <label for="Email">Email :</label>
                <input type="email" name="email" required>
                <label for="Phone no">Phone Number :</label>
                <input type="phone" name="phone" required> <br><br>
            </div>
            <input type="submit" value="Submit" class="submittt">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php }else if(isset($_GET['info'])) { ?>
                <p class="info"><?php echo $_GET['info']; ?></p>
            <?php } ?>
        </form>

        <div class="seconddiv">
            <img src="image/register-image.png" alt="login image">
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