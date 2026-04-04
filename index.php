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
    <link rel="stylesheet" href="script.css">
</head>
<body>

<!-- TOP BAR -->
<div class="topbar">
    <div class="topbar-content">
        <span>📧 manavasevemadhavaseva@gmail.com</span>
        <span>📞 +91 798197298</span>
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
            <a href="#impact">Our Impact</a>
        </div>

        <div class="nav-actions">
            <!-- Search -->
            <div class="search-box">
                <input type="search" id="search" placeholder="Search...">
            </div>

            <button id="theme-toggle" class="theme-btn" aria-label="Toggle Dark Mode">🌙</button>

            <?php if (!isset($_SESSION['user_email'])): ?>
                <a href="login.html" class="btn-outline">Login</a>
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

<!-- IMPACT / IFRAMES SECTION -->
<section class="impact-section" id="impact">
    <div class="container">
        <div class="section-title">
            <h3>Resources & Links</h3>
            <p>Explore our network and useful community resources.</p>
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
            <a href="login.html">Login</a>
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

<script>
    // Dark Mode Toggle Logic
    const themeBtn = document.getElementById('theme-toggle');
    const root = document.documentElement;
    
    // Check local storage for existing theme preference
    const currentTheme = localStorage.getItem('theme') || 'light';
    root.setAttribute('data-theme', currentTheme);
    themeBtn.textContent = currentTheme === 'light' ? '🌙' : '☀️';

    themeBtn.addEventListener('click', () => {
        const newTheme = root.getAttribute('data-theme') === 'light' ? 'dark' : 'light';
        root.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);
        themeBtn.textContent = newTheme === 'light' ? '🌙' : '☀️';
    });

    // Sticky Navbar shadow effect
    window.addEventListener('scroll', () => {
        const nav = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
    });
</script>

</body>
</html>