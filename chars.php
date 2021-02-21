<?php
$dir = './char';
$folders = scandir($dir);
$length = sizeof($folders);

for ($i = 2; $i < $length; $i++) {
	print"<a href='javaScript:void(0);'><img src='./char/".$folders[$i]."' id='".$folders[$i]."' class='charicon'></a>";
}

?>