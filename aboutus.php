<?php
session_start();
?>

<html>

  <head>
    <title> About | Le Cafe' </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/aboutus.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>

  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Le Cafe'</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart 
            (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
          
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>

            </ul>
            </li>
          </ul>

<?php
}
?>
        </div>

      </div>
    </nav>
          <div class="item">
<div class="item">
      <div class="carousel-caption">
      </div>

<div class="container-fluid">
  </div>

<br><br>
<div>
<div class="container-fluid" style="background:skyblue; opacity:0.60;">
<h1 style="color:black; text-align:center; text-transform:uppercase;">ABOUT US</h1>
</div>
<div class="container-fluid" style="background:black; opacity:0.70;">
<h3 style="color:white; text-align:center; text-transform:uppercase;"> Mission.</h3>
<p style="color:white; text-align:center; font-size:25px;">To provide affordable, quality, and nutritious food to all our customers and to become the world's most respected brand in delivering quality food to all our customers.</p>

<h3 style="color:white; text-align:center; text-transform:uppercase;">Building amazing experiences.</h3>
<p style="color:white; text-align:center; font-size:25px;">Starting with information for over 1 million restaurants (and counting) globally, we're making dining smoother and more enjoyable with services like online food ordering.</p>

<h3 style="color:white; text-align:center; text-transform:uppercase;">Along with our business philosophy.</h3>
<p style="color:white; text-align:center; font-size:25px;">we aim to be a convenient way of delivering food right at your door step with no extra shipping cost incurred. Yes we are here to serve you and to meet your stomach needs.</p>

</div>
<img src="images/slide003 - Copy.jpg" width='100%'/>

<br><br>
<div class="container-fluid" style="background:skyblue; text-transform:uppercase;padding:20px; border-left:10px solid black;"><h3>locate us</h3></div>
<div class="container-fluid">
<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="304" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124423.86448949322!2d77.5058551108408!3d12.9561194383218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae151c24b7b673%3A0x4597df981331a0c!2sLa%20Cafe!5e0!3m2!1sen!2sin!4v1574165714570!5m2!1sen!2sin" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.emojilib.com">emojilib.com</a></div><style>.mapouter{position:relative;text-align:right;height:304px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:304px;width:100%;}</style></div>

</div>

 <footer class="container-fluid bg-4 text-center">
  <br>
  <p> POOMA' 1999 | &copy All Rights Reserved </p>
  <br>
 


<br>    
</div>
</body>
</html>