<?php
mb_internal_encoding("UTF-8"); // Définit l'encodage interne par défaut pour toutes les fonctions mb_*, évite de le répéter à chaque appel (ex: mb_strlen($str), au lieu de mb_strlen($str, "UTF-8"))

$str01 = "abcd";
$str02 = "aBcd";
$str03 = "éèêàù";
$str04 = " ";
$str05 = "";
$lengthStr01 = strlen($str01);
$lengthStr02 = strlen($str02);
$lengthStr03 = strlen($str03);
$lengthStr04 = strlen($str04);
$lengthStr05 = strlen($str05);

echo "String 01 : " . $str01 . "\n <br />";
echo "The length of this String is : " . $lengthStr01. ". \n <br />";
echo "\n <br />";
echo "String 02 : " . $str02 . "\n <br />";
echo "The length of this String is : " . $lengthStr02. ". \n <br />";
echo "\n <br />";
echo "String 03 : " . $str03 . "\n <br />";
echo "The length of this String is : " . $lengthStr03. ". \n <br />";
echo "\n <br />";
echo "String 04 : " . $str04 . "\n <br />";
echo "The length of this String is : " . $lengthStr04. ". \n <br />";
echo "\n <br />";
echo "String 05 : " . $str05 . "\n <br />";
echo "The length of this String is : " . $lengthStr05. ". \n <br />";

echo "The answers for Strings 1, 2, 4 and 5 are correct, but the answer for number 3 is incorrect. \n <br />";
echo "\n <br />";
echo "Why ? :\n <br />";
echo "Because the strlen() function returns the number of bytes rather than the number of characters in a string. \n <br />";
echo "\n <br />";
echo "Exemple : \n <br />";
echo "The character 'e' in binary is : 01100101 \n <br />";
echo "The character 'é' in binary is : 11000011 10101001 \n <br />";
echo "\n <br />";
echo "We must therefore use the mb_strlen function, which returns the number of characters in the string, using the encoding. A multibyte character is then counted as 1. \n <br />";
echo "\n <br />";
$lengthStr03 = mb_strlen($str03);
echo "String 03 : " . $str03 . "\n <br />";
echo "The length of this String with mb_strlen() is : " . $lengthStr03. ". \n <br />";
echo "\n <br />";
?>
