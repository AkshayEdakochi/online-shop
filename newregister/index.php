<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }

//removable
  
//removable

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
            if(isset($_SESSION['balance'])) 
              {echo $_SESSION['balance'];
                unset($_SESSION['balance']);}
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username'];?> </strong> <br> Balance:<?php echo $_SESSION['balanceno'];?> </p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
      
    <?php endif ?>
</div>

<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" type="text/css" href="style2.css">
<!--        -->



  
  
  
<!--            -->

<div class="row">
  <form action="register.php" method="get"> 
        <div class="column">
            <div class="card">
                <img src="watch.jpg">
                <p>Rolex Brand Watch</p>
                <p>Rs.1700/- FLAT OFF</p>
                <button type="button" style="color: red">SHOP</button> 
                <input type="checkbox" name="vehicle" value="Bike"> <br>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="bag.jpg">
                <p>Street Style shoe K12F7</p>
                <p>CASH BACK UPTO 2000/-</p>
                <!-- <button type="button" style="color: red">SHOP</button> -->
                <input type="checkbox" name="vehicle" value="Car" checked="checked"> I have a car<br>
            </div>
        </div>
  
        <div class="column">
            <div class="card">
                <img src="shirt.jpg">
                <p>Van Heusen FLAT 500 OFF</p>
                <p>SEASON PRICE</p>
                <button type="button" style="color: red">SHOP</button>
            </div>
        </div>
  
        <div class="column">
            <div class="card">
                <img src="shoe.jpg">
                <p>NEW WOODLAND</p>
                <p>RS.7000/-</p>
                <button type="button" style="color: red">SHOP</button>
            </div>
        </div>
        </form>
    </div>
    <input type="submit" value="Submit">

    
</body>
</html>
