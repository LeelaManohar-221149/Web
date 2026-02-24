<?php
require_once 'google-config.php';

$login_url = $client->createAuthUrl();
?>

<!DOCTYPE html>
<html>
<head>
    <title>NGO Customer Support</title>
</head>
<body>

<h2>NGO Customer Support Page</h2>

<?php if (!isset($_SESSION['user_name'])): ?>

    <a href="<?php echo htmlspecialchars($login_url); ?>">
        <button>Login with Google</button>
    </a>

<?php else: ?>

    <h3>Welcome <?php echo $_SESSION['user_name']; ?></h3>
    <p>Email: <?php echo $_SESSION['user_email']; ?></p>
    <a href="logout.php"><button>Logout</button></a>

<?php endif; ?>

</body>
</html>
