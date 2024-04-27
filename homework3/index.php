<?php

// Задание 1.

$arr = [1, 2, 3, 4, 5, 6];
$res = 0;
for ($i = 0; $i < count($arr)/2; $i++) {
    $res += $arr[$i];
}
echo $res . "<br>" . "<br>";

// Задание 2.

$arr = [1, 2, 3, 4, 5, 6];
$res = 0;
$res2 = 0;
for ($i = 0; $i < count($arr)/2; $i++) {
    $res += $arr[$i];
}
for ($i = count($arr)/2; $i < count($arr); $i++) {
    $res2 += $arr[$i];
}
echo $res/$res2 . "<br>" . "<br>";

// Задание 3.

$arr = [[1, 2, 3],[4, 5, 6],[7, 8, 9],];
$search = 5;
foreach ($arr as $value) {
    foreach ($value as $elem) {
        if($search == $elem){
            $search = 'true';
        }
    }
}
if($search == 'true'){
    echo $search . "<br>" . "<br>";
}
else{
    echo 'false' . "<br>" . "<br>";
}

// Задание 4.

$arr = [[3, 7, 2],[9, 4, 6],[1, 8, 5],];
$search = $arr[0][0];
foreach ($arr as $value) {
    foreach ($value as $elem) {
        if($search > $elem){
            $search = $elem;
        }
    }
}
echo $search . "<br>" . "<br>";
?>