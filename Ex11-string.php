<?php
$chaine="bonjour monsieur alin";
echo ucwords($chaine);
echo "<br>";

$chaine1="PHP5";
for($i=0;$i<strlen($chaine1);$i++){
    echo $chaine1[$i]."<br>";
}

$var1="PHP";
$var2="Hello";
$comp=strnatcmp($var1,$var2);
if($comp<0)
    echo $var1." ".$var2;
else
    echo $var2." ".$var1;

