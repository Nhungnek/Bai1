<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$x = "Nhung ban banh";
// ex1
echo "Độ dài chuỗi: " . strlen($x) . '<br>';
// ex2
echo "Số từ: " . str_word_count($x) . '<br>';
// ex3
echo "Đảo ngược: " . strrev($x) . '<br>';
// ex4
$pos = strpos($x, "banh");
if ($pos !== false) {
    echo "Tìm thấy ở vị trí: $pos" . '<br>';
} else {
    echo "Không tìm thấy" . '<br>';
}
// ex5
$new_string = str_replace("banh", "kem", $x);
echo $new_string . '<br>';
// ex6
if (strncmp($x, "Nhung", 5) === 0) {
    echo "Chuỗi bắt đầu bằng 'Nhung'." . '<br>';
} else {
    echo "Chuỗi không bắt đầu bằng 'Nhung'." . '<br>';
}
// ex7
echo strtoupper($x) . '<br>'; 
// ex8
echo strtolower($x) . '<br>';
// ex9
echo ucwords($x) . '<br>';
// ex10
echo trim($x) . '<br>';
// ex11
echo ltrim($x, "N") . '<br>';
// ex12
echo rtrim($x, "h") . '<br>';
// ex13
$arr = explode(" ", $x);
print_r($arr);
echo '<br>';
// ex14
$arr = array("Nhung", "ban", "banh");
$x = implode(" ", $arr);
echo $x . '<br>';
// ex15
$padded = str_pad($x, 20, "*", STR_PAD_BOTH);
echo $padded . '<br>';
// ex16
if (strrchr($x, "banh")) {
    echo "Chuỗi kết thúc bằng: 'banh'." . '<br>'; 
} else {
    echo "Chuỗi không kết thúc bằng: 'banh'." . '<br>';
}
// ex17
if (strstr($x, "ban")) {
    echo "Chuỗi chứa 'ban'." . '<br>'; 
} else {
    echo "Chuỗi không chứa 'ban'." . '<br>';
}
// ex18
$new_string = preg_replace("/[^a-zA-Z0-9]/", "*", $x); //[^a-zA-Z0-9] nghĩa là "bất kỳ ký tự nào không phải là chữ cái (từ a đến z hoặc từ A đến Z) hoặc số (từ 0 đến 9)".
echo $new_string . '<br>'; 
// ex19
if (is_int($x)) {
    echo "Đây là một số nguyên." . '<br>';
} else {
    echo "Đây không phải là một số nguyên." . '<br>';
}
// ex20
$email = "nhung15bakery@gmail.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Đây là địa chỉ email hợp lệ." . '<br>'; 
} else {
    echo "Đây không phải là địa chỉ email hợp lệ." . '<br>';
}
?>
</body>
</html>






