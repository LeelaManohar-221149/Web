




<?php 
echo "Php is working succesfully";
?>
"<br><br>"


<?php
$content = file_get_contents("file.txt");
echo $content;
""?"":"<br>";
?>

"<br><br>"

<?php
$a = fopen("file.txt", "r");
$b= fread($a, filesize("file.txt"));
fclose($a);

echo $content;
?>

"<br><br>"

<?php
$c = fopen("file.txt", "w");
fwrite($c, "this is new data print karo");
fclose($c);

echo "write is used to rewritten the data";
?>

"<br><br>"

<?php
$e = fopen("file.txt", "a");
fwrite($e, "This is the END END ENED !");
fclose($e);

echo "data append ayindi anukuntaa ";
?>

"<br><br>"

<?php
$hola = fopen("nafile.txt", "x");
fwrite($hola, "new file  add ayindi mari ,soory create ayindi");
fclose($hola);

echo "File created successfully";
?>

"<br><br>"

<?php
$hoo= fopen("file.txt", "r+");

$matter = fread($hoo, filesize("sample.txt"));
echo "Old  is gold Content:<br>" . $matter;

fwrite($hoo, "\nAdded using r+");

fclose($hoo);

?>


 
