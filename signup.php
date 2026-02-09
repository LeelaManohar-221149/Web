<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {

    $fileName = $_FILES['proof']['name'];
    $tmpName  = $_FILES['proof']['tmp_name'];

    if (!is_dir("uploads")) {
        mkdir("uploads");
    }

    if (move_uploaded_file($tmpName, "uploads" . $fileName)) {

        echo "<h3 style='color:green'>File uploaded successfully!</h3>";

        echo "<br>";
        echo "<a href='download.php?file=" . urlencode($fileName) . "'>";
        echo "<button>Download Uploaded File</button>";
        echo "</a>";

    } else {
        echo "<p style='color:red'>Upload failed</p>";
    }
}
?>
