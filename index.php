<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manavaseva Madhavaseva | NGO Portal</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href = "script.css">
</head>
<body>

<!-- TOP BAR -->
<div class="topbar">
    <div class="topbar-content">
        <span>Email: manavasevemadhavaseva@gmail.com</span>
        <span>Phone: +91 798197298</span>
    </div>
</div>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="nav-top">
        <div class="logo-container">
            <img src="1.png" alt="NGO Logo" class="brand-logo" onerror="this.src='india.jpeg'">
            <div class="brand-text">
                <h1>Manavaseva Madhavaseva</h1>
                <p>Service is Celebration</p>
            </div>
        </div>
    </div>

    <div class="nav-bottom">
        <div class="nav-links">
            <a href="#home">Home</a>
            <a href="#about">About us</a>
            <a href="#programs">Programs</a>
            <a href="#impact">Impact</a>
            <a href="#contact">Contact</a>
        </div>

        <div class="nav-actions">
            <!-- Search -->
            <div class="search-box">
                <input type="search" id="search" placeholder="Search...">
            </div>

            <?php if (!isset($_SESSION['user_email'])): ?>
                <a href="login.php" class="btn-outline">Login</a>
            <?php else: ?>
                <span class="user-greeting">Welcome, <?php echo htmlspecialchars($_SESSION['user_name'] ?? 'User'); ?></span>
                <a href="logout.php" class="btn-outline">Logout</a>
            <?php endif; ?>

            <a href="donation.html" class="btn-primary">Donate</a>
        </div>
    </div>
</nav>

<!-- HERO SECTION -->
<header class="hero" id="home">
    <div class="hero-overlay"></div>
    <img src="2.jpg" alt="Hero Background" class="hero-bg" onerror="this.src='india.jpeg'">
    <div class="hero-content">
        <h2>Empowering Communities,<br>Transforming Lives.</h2>
        <p>Join us in our mission to bring social, humanitarian, and community development to those who need it most.</p>
        <div class="hero-buttons">
            <a href="donation.html" class="btn-primary large">Make a Donation</a>
            <a href="signup.html" class="btn-secondary large">Become a Volunteer</a>
        </div>
    </div>
</header>

<!-- ABOUT SECTION -->
<section class="about-section" id="about">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h3>What is an NGO?</h3>
                <p>A <strong>non-governmental organization (NGO)</strong> is an entity that is not part of the government. NGOs focus on social, humanitarian, and community development activities. They work independently and aim to improve society through services and support.</p>
                <div class="stats-row">
                    <div class="stat-card">
                        <h4>50+</h4>
                        <p>Projects Done</p>
                    </div>
                    <div class="stat-card">
                        <h4>10k+</h4>
                        <p>Volunteers</p>
                    </div>
                    <div class="stat-card">
                        <h4>1M+</h4>
                        <p>Lives Impacted</p>
                    </div>
                </div>
            </div>
            <div class="about-image">
                <img src="uploadsabc.jpg" alt="About our work" onerror="this.src='india.jpeg'">
            </div>
        </div>
    </div>
</section>

<!-- PROGRAMS SECTION -->
<section class="programs-section" id="programs">
    <div class="container">
        <div class="section-title">
            <h3>Focused Programs</h3>
            <p>We build long-term change through locally led, measurable initiatives.</p>
        </div>
        <div class="program-grid">
            <div class="program-card">
                <h4>Education Access</h4>
                <p>Scholarships, after-school support, and digital learning centers for students in need.</p>
            </div>
            <div class="program-card">
                <h4>Health Outreach</h4>
                <p>Mobile health camps, maternal care, and preventive screenings for underserved areas.</p>
            </div>
            <div class="program-card">
                <h4>Livelihood Support</h4>
                <p>Skill training, micro-grants, and job placement assistance for families.</p>
            </div>
        </div>
    </div>
</section>

<!-- IMPACT / IFRAMES SECTION -->
<section class="impact-section" id="impact">
    <div class="container">
        <div class="section-title">
            <h3>Impact and Resources</h3>
            <p>Explore our partner network and trusted community resources.</p>
        </div>
        <div class="iframe-grid">
            <div class="iframe-card">
                <h4>Government Portals</h4>
                <iframe src="https://ssc.gov.in" title="SSC Portal" loading="lazy"></iframe>
            </div>
            <div class="iframe-card">
                <h4>NGO Resources (WANGO)</h4>
                <iframe src="https://www.wango.org/resources.aspx?section=links" title="WANGO" loading="lazy"></iframe>
            </div>
            <div class="iframe-card">
                <h4>Our Organization Map</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15225.961011508216!2d78.43577732297138!3d17.43621424419998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb90b9b3fd5f17%3A0xc3f345593c66f57c!2sAmeerpet%2C%20Hyderabad%2C%20Telangana%20500038!5e0!3m2!1sen!2sin!4v1689243763261!5m2!1sen!2sin" title="Location Info" loading="lazy"></iframe>
            </div>
        </div>
        <div class="more-info">
            <a href="https://www.wango.org/resources.aspx?section=links" target="_blank" class="btn-outline">View All Partner Websites</a>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="cta-section" id="cta">
    <div class="container cta-container">
        <div class="cta-text">
            <h3>Your support powers measurable change.</h3>
            <p>Join our volunteer network or make a donation that goes directly to verified programs.</p>
        </div>
        <div class="cta-actions">
            <a href="signup.html" class="btn-primary large">Become a Volunteer</a>
            <a href="donation.html" class="btn-secondary large">Support a Cause</a>
        </div>
    </div>
</section>

<!-- CONTACT SECTION -->
<section class="contact-section" id="contact">
    <div class="container">
        <div class="section-title">
            <h3>Contact Us</h3>
            <p>We respond within 24 to 48 hours on business days.</p>
        </div>
        <div class="contact-grid">
            <div class="contact-card">
                <h4>Head Office</h4>
                <p>Ameerpet, Hyderabad, Telangana</p>
                <p>Email: manavasevemadhavaseva@gmail.com</p>
                <p>Phone: +91 798197298</p>
            </div>
            <div class="contact-card">
                <h4>Working Hours</h4>
                <p>Monday to Saturday</p>
                <p>9:00 AM to 6:00 PM</p>
                <p>Sunday closed</p>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="modern-footer">
    <div class="footer-container">
        <div class="footer-brand">
            <div class="logo-text">
                <h2>Manavaseva Madhavaseva</h2>
                <p>Service is Celebration</p>
            </div>
        </div>
        <div class="footer-links">
            <a href="#home">Home</a>
            <a href="donation.html">Donation</a>
            <a href="login.php">Login</a>
            <a href="signup.html">Register</a>
        </div>
        <div class="footer-social">
            <p>Follow us</p>
            <img src="3.jpg" alt="Social Media Status" class="footer-img">
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> Manavaseva Madhavaseva Organisation. All rights reserved.</p>
    </div>
</footer>

<script src="script.js?v=3"></script>

</body>
</html>
