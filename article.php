<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['email'])) { //punya akun


?>
<!DOCTYPE html>
<html>


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Article</title>
    <link rel="stylesheet" href="styless.css">
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

    <section class="article">
        <div class="logout" id="hidedivv" onmouseover="function3()" onmouseout="function4()" onclick="function5()">
            <h6  onclick="function5()">Logout</h6>
        </div>
        <div class="first-div-article">
            <h1>Latest Articles</h1>
        </div>
        <div class="second-div-article">
            <div class="article-1 satu">
                <a href="article 1.php"><img src="image/1.jpeg" alt="berita 1"></a>
                <h1><b>MANFAAT BUAH NAGA</b></h1>
                <h3>Buah naga saat ini masih menjadi populer dikalangan masyarakat karena diyakini memiliki banyak manfaat. Sebagai antioksidan adalah manfaat yang paling unggul dari buah naga. Bahas satu per satu yuk manfaat lain dari buah naga. <a href="article 1.php">Read More</a></h3>
            </div>
            <div class="article-1 dua"> 
                <a href="article 2.php"><img src="image/2.jpg" alt="berita 2"></a>
                <h1>Cara Menyimpan Buah Naga Agar Tahan Lebih Lama</h1>
                <h3>Buah naga menjadi salah satu buah yang disukai oleh banyak orang. Buah naga memiliki warna kulit yang sangat menarik yakni warna merah. Buah naga juga menjadi buah yang sangat menarik karena memiliki daging buah tebal dengan isi buah yang menyebar rata di daging buah. <a href="article 2.php">Read More</a></h3>
            </div>
            <div class="article-1 tiga">
                <a href="article 3.php"><img src="image/3.jpg" alt="berita 3"></a>
                <h1>Inilah 4 Jenis Nuah Naga Yang Bermanfaat Bagi Tubuh</h1>
                <h3>Buah naga merupakan tanaman berkaktus dan buah bersisik yang berasal dari Meksiko. Buah ini memiki rasa yang manis dan segar. Kandungan air yang dimilikinya sangat tinggi, sekitar 90,20% dari berat buahnya. <a href="article 3.php">Read More</a></h3>
            </div>
            <div class="article-1 empat">
                <a href="article 4.php"><img src="image/4.jpg" alt="berita 4"></a>
                <h1>Meski Menyehatkan, Tetap Waspadai 7 Efek Samping Buah Naga Ini</h1>
                <h3>Pada dasarnya, makan buah naga dalam porsi yang wajar merupakan hal yang aman dilakukan. Akan tetapi, bahaya buah naga mungkin muncul apabila Anda mengonsumsinya dalam jumlah berlebihan. <a href="article 4.php">Read More</a></h3>
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
                    MenuItems.style.maxHeight = "220px";
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
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Article</title>
    <link rel="stylesheet" href="styless.css">
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

    <section class="article">
        <div class="first-div-article">
            <h1>Latest Articles</h1>
        </div>
        <div class="second-div-article">
            <div class="article-1 satu">
                <a href="article 1.php"><img src="image/1.jpeg" alt="berita 1"></a>
                <h1><b>MANFAAT BUAH NAGA</b></h1>
                <h3>Buah naga saat ini masih menjadi populer dikalangan masyarakat karena diyakini memiliki banyak manfaat. Sebagai antioksidan adalah manfaat yang paling unggul dari buah naga. Bahas satu per satu yuk manfaat lain dari buah naga. <a href="article 1.php">Read More</a></h3>
            </div>
            <div class="article-1 dua"> 
                <a href="article 2.php"><img src="image/2.jpg" alt="berita 2"></a>
                <h1>Cara Menyimpan Buah Naga Agar Tahan Lebih Lama</h1>
                <h3>Buah naga menjadi salah satu buah yang disukai oleh banyak orang. Buah naga memiliki warna kulit yang sangat menarik yakni warna merah. Buah naga juga menjadi buah yang sangat menarik karena memiliki daging buah tebal dengan isi buah yang menyebar rata di daging buah. <a href="article 2.php">Read More</a></h3>
            </div>
            <div class="article-1 tiga">
                <a href="article 3.php"><img src="image/3.jpg" alt="berita 3"></a>
                <h1>Inilah 4 Jenis Nuah Naga Yang Bermanfaat Bagi Tubuh</h1>
                <h3>Buah naga merupakan tanaman berkaktus dan buah bersisik yang berasal dari Meksiko. Buah ini memiki rasa yang manis dan segar. Kandungan air yang dimilikinya sangat tinggi, sekitar 90,20% dari berat buahnya. <a href="article 3.php">Read More</a></h3>
            </div>
            <div class="article-1 empat">
                <a href="article 4.php"><img src="image/4.jpg" alt="berita 4"></a>
                <h1>Meski Menyehatkan, Tetap Waspadai 7 Efek Samping Buah Naga Ini</h1>
                <h3>Pada dasarnya, makan buah naga dalam porsi yang wajar merupakan hal yang aman dilakukan. Akan tetapi, bahaya buah naga mungkin muncul apabila Anda mengonsumsinya dalam jumlah berlebihan. <a href="article 4.php">Read More</a></h3>
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
                    MenuItems.style.maxHeight = "220px";
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