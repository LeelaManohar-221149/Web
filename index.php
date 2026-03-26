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

<style>

/* RESET */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Poppins', sans-serif;
}

/* BODY */
body{
    background: #f4f7fb;
}

/* TOP BAR */
.topbar{
    background: #2acbf8;
    color:white;
    padding:10px;
    text-align:center;
    font-size:14px;
    color:#111;
}

/* HEADER */
header{
    background:white;
    padding:15px 20px;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

/* LOGO SECTION */
.logo-section{
    display:flex;
    align-items:center;
    gap:20px;
}

.logo-section img{
    border-radius:10px;
}

.logo-text h1{
    font-size:24px;
}

.logo-text p{
    font-size:14px;
    color:#555;
}

/* SEARCH + BUTTONS */
.header-actions{
    display:flex;
    justify-content:space-between;
    align-items:center;
    justify-content: center;
    margin-top:10px;

}

#search{
    padding:8px 15px;
    border-radius:20px;
    border:1px solid #bbbaba;
    width:250px;
}

/* BUTTON */
.btn{
    padding:8px 15px;
    border:none;
    border-radius:20px;
    background:linear-gradient(90deg,#0072ff,#00c6ff);
    color:white;
    cursor:pointer;
    transition:0.3s;
    margin-left:5px;
}

.btn:hover{
    transform:scale(1.1);
    box-shadow:0 5px 15px rgba(0,0,0,0.2);
}

/* CONTAINER */
.container{
    display:flex;
    gap:20px;
    padding:20px;
}
/* NAVBAR */
.navbar{
    display:flex;
    justify-content:space-between;
    padding:10px 40px;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

/* NAV LINKS */
.nav-links a{
    margin-right:20px;
    text-decoration:none;
    color:#333;
    font-weight:500;
}

/* BUTTON */
.btn{
    padding:8px 15px;
    border:none;
    border-radius:20px;
    background:linear-gradient(90deg,#0072ff,#00c6ff);
    color:white;
    cursor:pointer;
}

/* SIDEBAR */
.sidebar{
    width:220px;
    background: linear-gradient(#11998e,#38ef7d);
    padding:15px;
    border-radius:10px;
    height:fit-content;
}

.sidebar a{
    display:block;
    color:white;
    padding:10px;
    margin-bottom:10px;
    border-radius:8px;
    text-decoration:none;
    transition:0.3s;
}

.sidebar a:hover{
    background:rgba(255,255,255,0.2);
    transform:translateX(5px);
}

/* MAIN CONTENT */
.content{
    display:cover;
    background:white;
    
    width:100%;
    height:80%;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

/* IMAGE */
.content img{
    width:100%;
    
    transition:0.3s;
}

.content img:hover{
    transform:scale(1.02);
}

/* TEXT */
.text-section{
    margin-top:20px;
    line-height:1.6;
    color:#333;
}

/* IFRAME */
iframe{
    border-radius:10px;
    margin:10px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

/* FOOTER */
footer{
    background:#111;
    color:white;
    text-align:center;
    padding:15px;
}

/* RESPONSIVE */
@media(max-width:768px){
    .container{
        flex-direction:column;
    }
    .sidebar{
        width:100%;
    }
}

</style>
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