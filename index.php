<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>NGO Portal</title>

<!-- GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">


</head>

<body>

<!-- TOP BAR -->
<div class="topbar">
    Email: manavasevemadhavaseva@gmail.com | Phone: 798197298
</div>

<!-- HEADER -->
<header>

    <div class="logo-section">
        <img src="1.png" width="100">
        <div class="logo-text">
            <h1 style="color:#111;font-size:35px;">Manavaseva Madhavaseva Organisation</h1>
            <p style="color:#111;font-size:18px;">Service is Celebration | NGO</p>
        </div>
    </div>
</header>

<!-- NAVBAR -->
<div class="navbar">
    <div class="nav-links">
        <a href="#home">Home</a>
        <a href="#services">Services</a>
        <a href="#donation">Donation</a>
        <a href="#about">About</a>

    </div>
    <div>
         <input type="search" id="search"  style="width:370px" placeholder="Search here...">
    
        <a href="donation.html"><button class="btn">Donate</button></a>
        <?php if (!isset($_SESSION['user_email'])): ?>
            <a href="login.php"><button class="btn">Login</button></a>
        <?php else: ?>
            Welcome <?php echo $_SESSION['user_name']; ?>
            <a href="logout.php"><button class="btn">Logout</button></a>
        <?php endif; ?>

    </div>
</div>
<img  class="content" src="2.jpg">
   
    <div class="content">
        <

        <div class="text-section">
            <p>
            A <b>non-governmental organization (NGO)</b> is an entity that is not part of the government.
            NGOs focus on social, humanitarian, and community development activities. 
            They work independently and aim to improve society through services and support.
            </p>
        </div>
        </div>




<!-- IFRAMES -->
<center>
<iframe src="home.html" width="350" height="300"></iframe>
<iframe src="https://ssc.gov.in" width="350" height="300"></iframe>
<iframe src="https://www.wango.org/resources.aspx?section=links" width="350" height="300"></iframe>
</center>

<br>

<center>
<h3>For More Info</h3>
<a href="https://www.wango.org/resources.aspx?section=links">All NGO Websites</a>
</center>

<!-- FOOTER -->
<footer>
    <p>Follow us on</p>
    <img src="3.jpg" width="100">
</footer>
<script src="script.js"></script>
</body>
</html>

  <!-- SIDEBAR 
    <div class="sidebar">
        <a href="upload.html">Registration</a>
        <a href="#">Donors List</a>
        <a href="#">Services</a>
        <a href="#">Administration</a>
        <a href="upload.php">Agreements</a>
        <a href="test.php">About Organisation</a>
    </div>
-->