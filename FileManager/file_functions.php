<?php
// Create demo.txt for demonstrations
file_put_contents("demo.txt", "Line 1: Hello World\nLine 2: Web Technology Lab\nLine 3: PHP File Functions\n");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Task 2 - PHP File Functions</title>
    <style>
        body { font-family: Segoe UI; background: #f3f4f6; padding: 30px; }
        h1   { color: #2563eb; }
        h2   { color: #1e40af; border-left: 4px solid #2563eb; padding-left: 10px; margin-top: 30px; }
        .box { background: #fff; border: 1px solid #e5e7eb; border-radius: 8px;
               padding: 20px; margin-bottom: 15px; }
        .out { background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 6px;
               padding: 12px; font-family: Consolas; font-size: 14px;
               white-space: pre-wrap; color: #065f46; margin-top: 10px; }
        b    { color: #1d4ed8; }
    </style>
</head>
<body>

<h1>Task 2 - PHP File Functions</h1>

<!-- ============================
     1. FILE READ / WRITE
     ============================ -->
<h2>1. File Read / Write</h2>

<div class="box">
    <b>fopen() + fwrite() + fclose()</b>
    <?php
        $fp = fopen("demo.txt", "w");
        fwrite($fp, "Written using fwrite()\n");
        fclose($fp);
    ?>
    <div class="out">fwrite() → Written to demo.txt ✅
fclose() → File closed ✅</div>
</div>

<div class="box">
    <b>fread()</b>
    <?php
        $fp      = fopen("demo.txt", "r");
        $content = fread($fp, 100);
        fclose($fp);
    ?>
    <div class="out">fread() → <?php echo htmlspecialchars($content); ?></div>
</div>

<div class="box">
    <b>file_get_contents()</b>
    <?php
        file_put_contents("demo.txt", "Hello from file_get_contents demo\nLine 2 here\n");
        $data = file_get_contents("demo.txt");
    ?>
    <div class="out">file_get_contents() → <?php echo htmlspecialchars($data); ?></div>
</div>

<div class="box">
    <b>file_put_contents()</b>
    <?php
        file_put_contents("demo.txt", "Overwritten by file_put_contents()\nNew line added\n");
    ?>
    <div class="out">file_put_contents() → demo.txt overwritten ✅</div>
</div>

<div class="box">
    <b>file() — Read into Array</b>
    <?php
        $lines = file("demo.txt");
    ?>
    <div class="out"><?php
        foreach($lines as $i => $line)
            echo "Line " . ($i+1) . ": " . htmlspecialchars($line);
    ?></div>
</div>


<!-- ============================
     2. FILE INFORMATION
     ============================ -->
<h2>2. File Information</h2>

<div class="box">
    <b>file_exists(), filesize(), filetype(), fileatime(), filemtime(),
filectime(), fileperms(), fileowner(), filegroup(), fileinode()</b>
    <?php $f = "demo.txt"; ?>
    <div class="out">file_exists()  → <?php echo file_exists($f) ? "true" : "false"; ?>

filesize()     → <?php echo filesize($f); ?> bytes
filetype()     → <?php echo filetype($f); ?>

fileatime()    → <?php echo date('d-m-Y H:i:s', fileatime($f)); ?>

filemtime()    → <?php echo date('d-m-Y H:i:s', filemtime($f)); ?>

filectime()    → <?php echo date('d-m-Y H:i:s', filectime($f)); ?>

fileperms()    → <?php echo substr(sprintf('%o', fileperms($f)), -4); ?>

fileowner()    → <?php echo fileowner($f); ?>

filegroup()    → <?php echo filegroup($f); ?>

fileinode()    → <?php echo fileinode($f); ?>
</div>
</div>


<!-- ============================
     3. FILE & FOLDER MANAGEMENT
     ============================ -->
<h2>3. File and Folder Management</h2>

<div class="box">
    <b>copy(), rename(), unlink()</b>
    <?php
        copy("demo.txt", "demo_copy.txt");
        rename("demo_copy.txt", "demo_renamed.txt");
        unlink("demo_renamed.txt");
    ?>
    <div class="out">copy()    → demo_copy.txt created ✅
rename()  → demo_copy.txt renamed to demo_renamed.txt ✅
unlink()  → demo_renamed.txt deleted ✅</div>
</div>

<div class="box">
    <b>mkdir(), rmdir(), is_file(), is_dir()</b>
    <?php
        if(!is_dir("test_folder")) mkdir("test_folder");
        $isDir  = is_dir("test_folder")  ? "true" : "false";
        $isFile = is_file("demo.txt")    ? "true" : "false";
        rmdir("test_folder");
    ?>
    <div class="out">mkdir()   → test_folder created ✅
is_dir()  → <?php echo $isDir; ?>

is_file() → <?php echo $isFile; ?>

rmdir()   → test_folder deleted ✅</div>
</div>


<!-- ============================
     4. DIRECTORY HANDLING
     ============================ -->
<h2>4. Directory Handling</h2>

<div class="box">
    <b>scandir()</b>
    <?php $files = scandir("."); ?>
    <div class="out">scandir() → <?php echo implode(", ", $files); ?></div>
</div>

<div class="box">
    <b>opendir(), readdir(), closedir()</b>
    <?php
        $dh    = opendir(".");
        $items = [];
        while(($entry = readdir($dh)) !== false)
            $items[] = $entry;
        closedir($dh);
    ?>
    <div class="out">opendir() + readdir() + closedir():
<?php foreach($items as $it) echo "  → " . $it . "\n"; ?></div>
</div>

<div class="box">
    <b>getcwd(), chdir()</b>
    <?php
        $before = getcwd();
        chdir("..");
        $after  = getcwd();
        chdir($before);
    ?>
    <div class="out">getcwd() before → <?php echo htmlspecialchars($before); ?>

chdir(..)      → moved up one folder
getcwd() after → <?php echo htmlspecialchars($after); ?>

chdir back     → restored to original ✅</div>
</div>


<!-- ============================
     5. FILE LOCKING
     ============================ -->
<h2>5. File Locking</h2>

<div class="box">
    <b>flock()</b>
    <?php
        $fp = fopen("demo.txt", "w");
        if(flock($fp, LOCK_EX)){
            fwrite($fp, "Written safely using flock()\n");
            flock($fp, LOCK_UN);
            $lockMsg = "LOCK_EX acquired → fwrite done → LOCK_UN released ✅";
        } else {
            $lockMsg = "Could not lock file";
        }
        fclose($fp);
    ?>
    <div class="out">flock() → <?php echo $lockMsg; ?></div>
</div>

</body>
</html>