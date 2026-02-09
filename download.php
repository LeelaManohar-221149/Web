<?php
if (isset($_GET['file'])) {

    $file = basename($_GET['file']);   // security
    $path = "uploads/" . $file;

    if (file_exists($path)) {

        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=\"$file\"");
        header("Content-Length: " . filesize($path));

        readfile($path);
        exit;
    } else {
        echo "File not found!";
    }
}
?>
