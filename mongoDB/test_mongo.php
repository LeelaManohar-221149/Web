<?php
// Initialize errors strictly for testing
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h2>MongoDB Connection Test</h2>";

// 1. Try to load Vendor
$autoloadPath = realpath(__DIR__ . '/../vendor/autoload.php');
if (!file_exists($autoloadPath)) {
    die("<p style='color:red;'><b>Error:</b> Cannot find vendor/autoload.php! Ensure Composer is installed and you ran 'composer install'. Path evaluated: " . __DIR__ . '/../vendor/autoload.php' . "</p>");
}

require_once $autoloadPath;
echo "<p style='color:green;'>1. Composer Autoload loaded successfully.</p>";

// 2. Try to verify if MongoDB PHP Extension is loaded
if (!extension_loaded('mongodb')) {
    die("<p style='color:red;'><b>Error:</b> The 'mongodb' PHP extension is NOT loaded in your php.ini. You must install/enable php_mongodb.dll in XAMPP.</p>");
}
echo "<p style='color:green;'>2. MongoDB PHP Extension is installed and active.</p>";

// 3. Try connecting to the Server
try {
    $client = new MongoDB\Client("mongodb://localhost:27017");
    
    // Attempting a server command (ping) to strictly verify the connection
    $client->selectDatabase('admin')->command(['ping' => 1]);
    echo "<p style='color:green;'>3. Successfully connected to MongoDB Server at mongodb://localhost:27017.</p>";
    
} catch (Exception $e) {
    die("<p style='color:red;'><b>Connection Error:</b> Failed to connect to MongoDB server. Is MongoDB actually running on your machine? <br>Details: " . $e->getMessage() . "</p>");
}

// 4. Try Write/Read operations on 'ngo_portal'
try {
    $collection = $client->ngo_portal->test_connection;
    
    // Insert
    $insertResult = $collection->insertOne(['status' => 'tested', 'time' => date('Y-m-d H:i:s')]);
    if ($insertResult->getInsertedCount() === 1) {
        echo "<p style='color:green;'>4. Successfully inserted a test document into <i>ngo_portal.test_connection</i>!</p>";
    }
    
    // Read
    $document = $collection->findOne(['status' => 'tested']);
    if ($document) {
        echo "<p style='color:green;'>5. Successfully read the document back out from the database.</p>";
    }
    
    // Cleanup (delete the test collection)
    $collection->drop();
    echo "<p style='color:green;'>6. Successfully cleaned up test data.</p>";
    
    echo "<h3><span style='color:blue;'>Conclusion: MongoDB is working perfectly!</span></h3>";

} catch (Exception $e) {
    die("<p style='color:red;'><b>Database Error:</b> Failed to process read/write operations. Details: " . $e->getMessage() . "</p>");
}
?>