<?php
session_start();

// Ensure user is logged in
if (!isset($_SESSION['user_email'])) {
    header("Location: login.php");
    exit();
}

$userName = $_SESSION['user_name'] ?? 'Volunteer';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Manavaseva Madhavaseva</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
            color: #111827;
        }

        /* Top Navbar */
        .dashboard-nav {
            background: #ffffff;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #e5e7eb;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .dashboard-nav .brand {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dashboard-nav .brand img {
            width: 45px;
            height: 45px;
            border-radius: 50%;
        }

        .dashboard-nav .brand h2 {
            margin: 0;
            font-size: 20px;
            color: #111827;
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nav-actions span {
            font-weight: 500;
            color: #4b5563;
        }

        .btn-logout {
            background: #ffffff;
            color: #ef4444;
            border: 1px solid #fca5a5;
            padding: 8px 18px;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s;
            text-decoration: none;
        }

        .btn-logout:hover {
            background: #fef2f2;
            border-color: #ef4444;
        }

        /* Banner */
        .dashboard-banner {
            background: url('images/dashboard_banner.png') center/cover no-repeat;
            position: relative;
            height: 220px;
            display: flex;
            align-items: center;
            padding: 0 60px;
        }

        .dashboard-banner::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(to right, rgba(37, 99, 235, 0.85), rgba(17, 24, 39, 0.4));
        }

        .banner-content {
            position: relative;
            z-index: 1;
            color: #ffffff;
        }

        .banner-content h1 {
            font-size: 36px;
            font-weight: 700;
            margin: 0 0 10px 0;
            text-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }

        .banner-content p {
            font-size: 18px;
            margin: 0;
            opacity: 0.9;
        }

        /* Main Content */
        .container {
            max-width: 1200px;
            margin: -40px auto 40px auto;
            position: relative;
            z-index: 2;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr 300px;
            gap: 30px;
        }

        .card {
            background: #ffffff;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
            border: 1px solid #e5e7eb;
            margin-bottom: 30px;
        }

        .card-header {
            border-bottom: 1px solid #e5e7eb;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }

        .card-header h3 {
            margin: 0;
            font-size: 20px;
            color: #111827;
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .stat-box {
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            padding: 20px;
            border-radius: 6px;
            text-align: center;
        }

        .stat-box h4 {
            font-size: 32px;
            color: #2563eb;
            margin: 0 0 5px 0;
        }

        .stat-box p {
            margin: 0;
            font-size: 14px;
            color: #6b7280;
            font-weight: 500;
            text-transform: uppercase;
        }

        /* Table */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            text-align: left;
            padding: 12px 15px;
            border-bottom: 1px solid #e5e7eb;
            font-size: 15px;
        }

        th {
            color: #6b7280;
            font-weight: 600;
            background: #f9fafb;
        }

        .status-badge {
            background: #d1fae5;
            color: #065f46;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        /* Sidebar Elements */
        .action-link {
            display: block;
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            padding: 15px;
            border-radius: 6px;
            color: #374151;
            text-decoration: none;
            font-weight: 500;
            margin-bottom: 15px;
            transition: 0.2s;
        }

        .action-link:hover {
            background: #eff6ff;
            border-color: #bfdbfe;
            color: #1d4ed8;
            transform: translateX(5px);
        }

        .btn-solid-blue {
            display: block;
            text-align: center;
            background: #2563eb;
            color: white;
            padding: 12px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.2s;
            margin-bottom: 20px;
        }

        .btn-solid-blue:hover {
            background: #1d4ed8;
        }

        @media (max-width: 900px) {
            .container {
                grid-template-columns: 1fr;
            }
            .stats-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<nav class="dashboard-nav">
    <div class="brand">
        <img src="1.png" alt="Logo" onerror="this.src='india.jpeg'">
        <h2>NGO Portal</h2>
    </div>
    <div class="nav-actions">
        <span>Logged in as <?php echo htmlspecialchars($userName); ?></span>
        <a href="logout.php" class="btn-logout">Logout</a>
    </div>
</nav>

<div class="dashboard-banner">
    <div class="banner-content">
        <h1>Welcome, <?php echo htmlspecialchars($userName); ?>!</h1>
        <p>Your dashboard for managing impact, donations, and volunteer activities.</p>
    </div>
</div>

<div class="container">
    <div class="main-column">
        <!-- Overview Stats -->
        <div class="card">
            <div class="card-header">
                <h3>My Impact Overview</h3>
            </div>
            <div class="stats-grid">
                <div class="stat-box">
                    <h4>$500</h4>
                    <p>Total Donated</p>
                </div>
                <div class="stat-box">
                    <h4>12</h4>
                    <p>Volunteer Hours</p>
                </div>
                <div class="stat-box">
                    <h4>3</h4>
                    <p>Campaigns Supported</p>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="card">
            <div class="card-header">
                <h3>Recent Donation History</h3>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Campaign</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Oct 15, 2026</td>
                        <td>Rural Education Fund</td>
                        <td>$250.00</td>
                        <td><span class="status-badge">Completed</span></td>
                    </tr>
                    <tr>
                        <td>Aug 02, 2026</td>
                        <td>Disaster Relief</td>
                        <td>$100.00</td>
                        <td><span class="status-badge">Completed</span></td>
                    </tr>
                    <tr>
                        <td>Mar 21, 2026</td>
                        <td>Clean Water Initiative</td>
                        <td>$150.00</td>
                        <td><span class="status-badge">Completed</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="card" style="margin-top: 0;">
            <div class="card-header">
                <h3>Quick Actions</h3>
            </div>
            <a href="donation.html" class="btn-solid-blue">+ Make a New Donation</a>
            
            <h4 style="margin-bottom:10px; color:#6b7280; font-size:14px; text-transform:uppercase;">Menu</h4>
            <a href="#" class="action-link">Update My Profile</a>
            <a href="#" class="action-link">Download Tax Receipts</a>
            <a href="index.php" class="action-link">Return to Public Site</a>
        </div>
    </div>
</div>

</body>
</html>
