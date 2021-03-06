<!DOCTYPE html>

<html>
<title>Bundle Information</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
    .mySlides {display:none}
    .w3-tag, .fa {cursor:pointer}
    .w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
    .w3-bar-item {font-color: white}
    .nav_links {height: 50px; padding:10px}
    .search-form {margin:10px; margin-left:20px}
    .white-font {color:white}
    .background {background:url('images/bg.jpg')}
</style>

<!--*************************************************************************************************-->

<body class="background">

  <!-- Navbar -->
  <div class="w3-top w3-green background">
      <div class="w3-bar w3-theme-d2 w3-left-align">

          <!--Nav buttons-->
          <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
          <a href="#" class="w3-bar-item w3-button w3-teal nav_links"><i class="fa fa-home w3-margin-right"></i></a>
          <a href="library.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white nav_links">Library</a>
          <a href="store.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white nav_links">Store</a>
          <a href="news.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white nav_links">News</a>
          <a href="wish_list.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white nav_links">Wishlist</a>
          <a href="cart.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white nav_links">Cart</a>
          <a href="chat.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white nav_links">Chat</a>
          <a href="about.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white nav_links">About</a>

          <!-- Logout -->
          <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Logout">
            <img src="images/icons/logout.png" class="w3-circle" style="height:23px;width:23px" alt="Log out">
          </a>

          <!--Profile avatar-->
         <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
            <img src=<?php if($_SESSION['player_pp'] != '') echo $_SESSION['player_pp']; else echo "images/icons/avatar.png";?> class="w3-circle" style="height:23px;width:23px" alt="Avatar">
         </a>

         <!--Search-->
         <form class="w3-bar-item w3-right" action="search_result_screen.php" method="post">
           <input type="text" placeholder="Search.." name="search" class="search-form">
           <button type="submit"><i class="fa fa-search search-form"></i></button>
         </form>
      </div>
  </div>

  <!-- Content -->
  <div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

    <div class="w3-panel white-font w3-border">
      <h1 style="margin:20px"><br>Bundle Information</h1>
    </div>


    <!-- Page Container -->
  <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">

    <!-- The Grid -->
    <div class="w3-row">

      <!-- Middle Column -->
      <div class="w3w3-center">

        <div class="w3-panel white-font">
          <h4><br>Bundle name</h4>
        </div>

        <!--Buy/Play now-->
        <div class="w3-container w3-card w3-border w3-round w3-margin white-font"><br>
          <p class="w3-center"><del>20.99 $</del><br>13.99 $</p>
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 ">Buy now</button>
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 "><img src="images/icons/cart.png" style="width:2%">Add to cart</button>
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 "><img src="images/icons/wish.png" style="width:1%">Add to wish list</button>
        </div>

        <br>

        <!-- Bundle games-->
        <div class="w3-container w3-card w3-border w3-round w3-margin white-font w3w3-center" style="overflow:scroll"><br>

          <!--Game grid-->
          <div class="w3-row white-font">

              <div class="w3-panel white-font">
                <h4><br>Games in the bundle</h4>
              </div>

              <div class="w3-col l3 s6">
                <div class="w3-container">
                  <a href="game_information.php"><img src="images/game1.jpg" style="width:100%"></a>
                  <p>Witcher 3<br><b>$13.99</b></p>
                </div>
              </div>

              <div class="w3-col l3 s6">
                <div class="w3-container">
                  <a href="game_information.php"><img src="images/witcher2.jpg" style="width:100%"></a>
                  <p>Witcher 2<br><b>$13.99</b></p>
                </div>
              </div>

              <div class="w3-col l3 s6">
                <div class="w3-container">
                  <a href="game_information.php"><img src="images/heartandstone.png" style="width:100%"></a>
                  <p>Witcher Dlc1<br><b>$13.99</b></p>
                </div>
              </div>

              <div class="w3-col l3 s6">
                <div class="w3-container">
                  <a href="game_information.php"><img src="images/bloodandwine.jpg" style="width:100%"></a>
                  <p>Witcher Dlc2<br><b>$13.99</b></p>
                </div>
              </div>
          </div>
          <!--End of Game grid-->

        </div>

      <!-- End Middle Column -->
      </div>

    <!-- End Grid -->
    </div>

  <!-- End Page Container -->
  </div>

  <!--*************************************************************************************************-->

  <!--Scripts-->
  <script>

      // Slideshow
      var slideIndex = 1;
      showDivs(slideIndex);

      function plusDivs(n)
      {
        showDivs(slideIndex += n);
      }

      function currentDiv(n)
      {
        showDivs(slideIndex = n);
      }

      function showDivs(n)
      {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demodots");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length} ;
        for (i = 0; i < x.length; i++)
        {
           x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++)
        {
           dots[i].className = dots[i].className.replace(" w3-white", "");
        }

        x[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " w3-white";
      }
  </script>

</body>
</html>
