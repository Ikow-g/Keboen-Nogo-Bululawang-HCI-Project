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
      <link rel="stylesheet" href="maps.css">
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
<div class="logout" id="hidedivv" onmouseover="function3()" onmouseout="function4()" onclick="function5()">
            <h6  onclick="function5()">Logout</h6>
        </div>
<p>
  <iframe src="https://www.google.com/maps/embed?pb=!4v1621791738679!6m8!1m7!1sIRztFcgi55qo-1H9YcLosw!2m2!1d-8.081164937102548!2d112.6387819392878!3f120.14734!4f0!5f0.7820865974627469"
  width="100%" height="900" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</p>
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
      <link rel="stylesheet" href="maps.css">
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
               <img src="images/menu.png" class="menu-icon" onclick="menutoggle();function4();" alt="#">    
          </div>
</header>
<p>
  <iframe src="https://www.google.com/maps/embed?pb=!4v1621791738679!6m8!1m7!1sIRztFcgi55qo-1H9YcLosw!2m2!1d-8.081164937102548!2d112.6387819392878!3f120.14734!4f0!5f0.7820865974627469"
  width="100%" height="900" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</p>

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
</body>
</html>

<?php
}
?>