<?php

//把单个字符串转换成单个数组

$str = "www.runoob.com";

$a=explode(".",$str);

print_r ($a);

echo  "<br>";

print_r (explode(".",$str));

//去掉.号"."


$str2 = "www+runoob+com";

$a2=explode("+",$str2);


print_r ($a2);


echo  "<br>";

//去掉+号"+"

print_r (explode("+",$str2));


echo  "<br>";


$str3 = "www";

$a3=explode("",$str3);

print_r ($a3);

echo  "<br>";

print_r (explode("",$str3));



?>



