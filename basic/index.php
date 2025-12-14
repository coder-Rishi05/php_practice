<?php
echo "this is preactice page";

$arr = array(1, 2, 3, 4, 5, 6);

for ($i = 0; $i < count($arr); $i++) {
    echo  "<br><br>" . "val of $arr[$i] is : " . $i . "<br>";
}


$str = "                this is a string            ";

echo $str;
echo " <br> string after rtrim function <br>";

echo trim($str);

$newStr =  str_replace("this", "yeh", $str, $count);

echo " <br> string after str_replace function : " . $newStr;

echo " <br> total no. of count : " . $count;
