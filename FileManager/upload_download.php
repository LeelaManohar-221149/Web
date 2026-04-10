<?php
$uploadSuccess = "";
$uploadedFileName = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['userfile'])) {
    $file     = $_FILES['userfile'];
    $fileName = basename($file['name']);
    $targetDir = __DIR__ . '/uploads/';
    $targetPath = $targetDir . $fileName;

    // Create uploads folder if it doesn't exist
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    if (move_uploaded_file($file['tmp_name'], $targetPath)) {
        $uploadSuccess    = "success";
        $uploadedFileName = $fileName;
    } else {
        $uploadSuccess = "error";
    }
}

// Download handler
if (isset($_GET['download'])) {
    $fileToDownload = basename($_GET['download']);
    $filePath       = __DIR__ . '/uploads/' . $fileToDownload;

    if (file_exists($filePath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $fileToDownload . '"');
        header('Content-Length: ' . filesize($filePath));
        flush();
        readfile($filePath);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 1 – File Upload and Download</title>
        <style>
        body { font-family:'Segoe UI',sans-serif; background:#f3f4f6; margin:0; padding:40px; color:#111827; }
        h1 { color:#2563eb; font-size:26px; margin-bottom:5px; }
        h2 { font-size:18px; color:#374151; margin-bottom:25px; }
        .card { background:#fff; border:1px solid #e5e7eb; border-radius:8px; padding:30px; max-width:600px; box-shadow:0 4px 6px rgba(0,0,0,0.05); margin-bottom:30px; }
        input[type="file"] { display:block; margin:15px 0; font-size:14px; }
        .btn { background:#2563eb; color:#fff; padding:10px 24px; border:none; border-radius:6px; font-size:15px; cursor:pointer; transition:.2s; }
        .btn:hover { background:#1d4ed8; }
        .btn-download { background:#16a34a; color:#fff; padding:10px 20px; border-radius:6px; text-decoration:none; font-size:14px; font-weight:600; display:inline-block; margin-top:15px; }
        .btn-download:hover { background:#15803d; }
        .success { background:#d1fae5; border:1px solid #6ee7b7; color:#065f46; padding:12px 16px; border-radius:6px; margin-bottom:15px; font-weight:500; }
        .error { background:#fee2e2; border:1px solid #fca5a5; color:#b91c1c; padding:12px 16px; border-radius:6px; margin-bottom:15px; }
        label { font-weight:600; font-size:15px; }
        </style>
</head>
<body>

        <h1>Task 1 – File Upload and Download System</h1>
        <h2>| PHP File Handling</h2>
        <div class="card">
            <h3>Upload a File</h3>

            <?php if ($uploadSuccess === "success"): ?>
                <div class="success">
                    ✅ File "<b><?php echo htmlspecialchars($uploadedFileName); ?></b>"
                    uploaded successfully to the <code>uploads/</code> folder!
                </div>
                <a class="btn-download"
                href="?download=<?php echo urlencode($uploadedFileName); ?>">
                    ⬇ Download Uploaded File
                </a>

            <?php elseif ($uploadSuccess === "error"): ?>
                <div class="error">❌ File upload failed. Please try again.</div>
            <?php endif; ?>

            <form action="" method="POST" enctype="multipart/form-data">
                <label for="userfile">Select File (PDF, Image, Text, etc.):</label>
                <input type="file" name="userfile" id="userfile" required>
                <button class="btn" type="submit">Upload File</button>
            </form>
        </div>
</body>
</html>