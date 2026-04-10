<?php
echo "<h2>File Modes Demo</h2>";

$file = "mode.txt";

// r
fopen($file,"w"); // create first
echo "r: ".fread(fopen($file,"r"), filesize($file))."<br>";

// w
fwrite(fopen($file,"w"), "Write Mode<br>");

// a
fwrite(fopen($file,"a"), "Append Mode<br>");

// x
if(!file_exists("newfile.txt")) {
    fwrite(fopen("newfile.txt","x"), "Created using x<br>");
}

// r+
$fp = fopen($file,"r+");
fwrite($fp,"R+ Mode<br>");
fclose($fp);

// w+
$fp = fopen($file,"w+");
fwrite($fp,"W+ Mode<br>");
rewind($fp);
echo "w+: ".fread($fp, filesize($file))."<br>";
fclose($fp);

// a+
$fp = fopen($file,"a+");
fwrite($fp,"A+ Mode<br>");
rewind($fp);
echo "a+: ".fread($fp, filesize($file))."<br>";
fclose($fp);

// x+
if(!file_exists("xplus.txt")) {
    $fp = fopen("xplus.txt","x+");
    fwrite($fp,"X+ Mode<br>");
    rewind($fp);
    echo fread($fp, filesize("xplus.txt"));
    fclose($fp);
}

echo "<br>Modes executed!";
?>