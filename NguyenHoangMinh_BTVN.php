<!-- 1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không. -->
<?php
echo "Câu 1: <br>";
function soChan($n){
    if (is_int($n)){
        if ($n % 2 == 0){
            echo "$n là số chẵn.";
        }
        else {
            echo "$n không là số chẵn.";
        }
    }
}
$n = 10;
soChan($n);
echo "<hr>";
?>

<!-- 2. Viết chương trình PHP để tính tổng của các số từ 1 đến n. -->
<?php
echo "Câu 2: <br>";
function tong($n){
    $tong = 0;
    for ($i = 1; $i <= $n; $i++){
        $tong += $i;
    }
    return $tong;
}
$n = 15;
tong($n);
echo "Tổng các số từ 1 đến $n là: " . tong($n);
echo "<hr>";
?>

<!-- 3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10. -->
<?php
echo "Câu 3: <br>";
function bangCuuChuong($n){
    for ($i = 1; $i <= $n; $i++) {
        $ketQua = $n * $i;
        echo " $n * $i = $ketQua <br>";
}
} 
bangCuuChuong(10);
echo"<hr>";
?>

<!-- 4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không. -->
<?php
echo "Câu 4: <br>";
function chuoi($a, $b){
    $viTri = strpos($a, $b);
  if ($viTri !== false) {
      echo "Chuỗi '$a' chứa từ '$b'.";
  } else {
      echo "Chuỗi '$a' không chứa từ '$b'.";
  }
}
chuoi("Hello world", "my darling");
echo "<hr>";
?>

<!-- 5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng. -->
<?php
echo "Câu 5: <br>";
function GTNN($array){
    $min = $array[0];
   foreach ($array as $value) {
       if ($value< $min) {
           $min = $value;
       }
   }
   return $min;
}
function GTLN($array) {
   $max = $array[0];
   foreach ($array as $value) {
       if ($value > $max) {
           $max = $value;
       }
   }
   return $max;
}
$array = [4, 2, 7, 1, 9, 10];
echo "Ta có mảng: " . implode(", ", $array) . "<br>";
echo "Giá trị nhỏ nhất của bảng là: " . GTNN($array);
echo "<br> Giá trị lớn nhất của mảng là: " . GTLN($array);
echo "<hr>";
?>

<!-- 6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần. -->
<?php
echo "Câu 6: <br>";
function sortArray($arr){
    sort($arr);
    return $arr;
}
$array = [4, 2, 7, 1, 9, 10]; 
$sortedArray = sortArray($array);
echo "Mảng trước khi sắp xếp: " . implode(', ', $array) . '<br>';
echo "Mảng sắp xếp theo thứ tự tăng dần: " . implode(', ', $sortedArray) . '<br>';
echo "<hr>";
?>

<!-- 7. Viết chương trình PHP để tính giai thừa của một số nguyên dương. -->
<?php
echo "Câu 7: <br>";
function giaiThua(int $n){
    $giaiThua = 1;
    for ($i = 1; $i <= $n; $i++) {
        $giaiThua *= $i;
    }
    return $giaiThua;
}
$n = 10; 
$giaiThua = giaiThua($n);
echo "Giai thừa của $n là: $giaiThua";
echo "<hr>";
?>

<!-- 8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước. -->
<?php
echo "Câu 8: <br>";
function ktSoNT($n){   
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
}
echo "Các số nguyên tố trong khoảng là: <br>";
function soNT($a, $b){
    for ($i = $a; $i <= $b; $i++){
        if(ktSoNT($i))
            echo $i, '<br>';
    }
}
soNT(5, 100);
echo "<hr>";
?>

<!-- 9. Viết chương trình PHP để tính tổng của các số trong một mảng. -->
<?php 
echo "Câu 9: <br>";
function sum($arr){
    $sum = 0;
    foreach ($arr as $n){
        $sum += $n;
    }
    return $sum;
}
$arr = [4, 7, 23, 5, 10];
echo "Ta có mảng: " . implode(", ", $arr) . "<br>";
$sum = sum($arr);
echo "Tổng của các số trong mảng là: " . $sum;
echo "<hr>";
?>

<!-- 10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước. -->
<?php
echo "Câu 10: <br>";
function taoFibonacci($n){
    $fibonacci = array();
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;
    for ($i = 2; $i < $n; $i++){
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}
function inFibonacci($a, $b){
    $n = 2;
    $fibonacci = taoFibonacci($b);
    echo "Các số Fibinacci trong khoảng [$a, $b] là: <br>";
    while ($fibonacci[$n] <= $b){
        if ($fibonacci[$n] >= $a){
            echo $fibonacci[$n] . "<br>";
        }
        $n++;
    }
}
$a = 5;
$b = 200;
inFibonacci($a, $b);
echo "<hr>";
?>

<!-- 11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không. -->
<?php
echo "Câu 11: <br>";
function Amstrong($number){
    $numStr = (string)$number;
    $length = strlen($numStr);
    $sum = 0;
    for ($i = 0; $i < $length; $i++){
        $digit = (int)$numStr[$i];
        $sum += pow($digit, $length);
    }
    return $sum === $number;
}
$n = 370;
if (Amstrong($n)){
    echo "$n là số Amstrong.";
}
else {
    echo "$n không là số Amstrong.";
}
echo "<hr>";
?>

<!-- 12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ. -->
<?php
echo "Câu 12: <br>";
function chenPhanTu($arr, $viTri, $phanTu){
    if ($viTri < 0 || $viTri > count($arr)){
        echo "Vị trí không hợp lệ!";
        return $arr;
    }
    $arrTruoc = array_slice ($arr, 0, $viTri);
    $arrSau = array_slice ($arr, $viTri);
    $arrMoi = array_merge ($arrTruoc, array($phanTu), $arrSau);
    return $arrMoi;
}
$arr = [1, 5, 7, 14, 12];
echo "Mảng ban đầu là: " . implode(", ", $arr) . "<br>";
$viTriChen = 4;
$phanTuChen = 34;
$arrMoi = chenPhanTu($arr, $viTriChen, $phanTuChen);
echo "Mảng sau khi chèn phần tử là: " . implode(", ", $arrMoi) . "<br>";
echo "<hr>";
?>

<!-- 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng. -->
<?php 
echo "Câu 13: <br>";
function remove($array){
    $result = array_unique($array);
    $result = array_values($result);
    return $result; 
}
$array = [1, 2, 4, 5, 3, 5, 4, 1];
echo "Mảng ban đầu là: " . implode(", ", $array) . "<br>";
$newArray = remove($array);
echo "Mảng sau khi loại bỏ các phần tử trùng lặp là: " . implode(", ", $newArray) . "<br>";
echo "<hr>";
?>

<!-- 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng. -->
<?php 
echo "Câu 14: <br>";
function timViTri($arr, $phantu){
    $vitri = array_search($phantu, $arr);
    if ($vitri !== false){
        echo "Phần tử $phantu được tìm thấy tại vị trí $vitri trong mảng.";
    }
    else {
        echo "Phần tử $phantu không được tìm thấy trong mảng.";
    }
}
$arr = [3, 1, 5, 8, 14, 22, 16];
echo "Ta có mảng: " . implode(", ", $arr) . "<br>";
$phanTuCanTim = 5;
timViTri($arr, $phanTuCanTim);
echo "<hr>";
?>

<!-- 15. Viết chương trình PHP để đảo ngược một chuỗi. -->
<?php
echo "Câu 15: <br>";
function reverse($string){
    $reversed = strrev($string);
    return $reversed;
}
$string = "Nguyen Hoang Minh";
$reversed = reverse($string);
echo "Chuỗi ban đầu là: " . $string . "<br>";
echo "Chuỗi sau khi đảo ngược là: " . $reversed . "<br>";
echo "<hr>";
?>

<!-- 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng. -->
<?php 
echo "Câu 16: <br>";
function soLuong($arr){
    $soluong = count($arr);
    echo "Số lượng phần tử trong mảng là: $soluong";
}
$arr = [3, 1, 5, 8, 14, 22, 16];
echo "Ta có mảng: " . implode(", ", $arr) . "<br>";
soLuong($arr);
echo "<hr>";
?>

<!-- 17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không. -->
<?php 
echo "Câu 17: <br>";
function Palindrome($chuoi){
    $chuoi = strtolower(str_replace('', '', $chuoi));
    $chuoiDaoNguoc = strrev($chuoi);
    if ($chuoi == $chuoiDaoNguoc){
        echo "Chuỗi '$chuoi' là chuỗi Palindrom.";
    }
    else {
        echo "Chuỗi '$chuoi' không là chuỗi Palindrom.";
    }
}
$chuoi = "Hello World";
Palindrome($chuoi);
echo "<hr>";
?>

<!-- 18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng. -->
<?php 
echo "Câu 18: <br>";
function soLanXuatHien($arr, $phanTuCanDem){
    $dem = 0;
    foreach ($arr as $PhanTu){
        if ($PhanTu == $phanTuCanDem){
            $dem++;
        }
    }
    return $dem;
}
$arr = [1, 2, 4, 5, 3, 5, 4, 1, 5];
echo "Ta có mảng: " . implode(", ", $arr) . "<br>";
$phanTuCanDem = 5;
$soLanXuatHien = soLanXuatHien($arr, $phanTuCanDem);
echo "Số lần xuất hiện của $phanTuCanDem trong mảng là: $soLanXuatHien";
echo "<hr>";
?>

<!-- 19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần. -->
<?php
echo "Câu 19: <br>";
function rsortArray($arr){
    rsort($arr);
    return $arr;
}
$array = [4, 2, 7, 1, 9, 10]; 
$rsortedArray = rsortArray($array);
echo "Mảng ban đầu là: " . implode(', ', $array) . '<br>';
echo "Mảng sắp xếp theo thứ tự giảm dần: " . implode(', ', $rsortedArray) . '<br>';
echo "<hr>";
?>

<!-- 20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng. -->
<?php
echo "Câu 20: <br>";
function themVaoDau($arr, $phanTu){
    array_unshift($arr, $phanTu);
    return $arr;
}
function themVaoCuoi($arr, $phanTu){
    array_push($arr, $phanTu);
    return $arr;
}
$arr = [4, 2, 7, 1, 9, 10];
$phanTuThem = 20;
$themVaoDau = themVaoDau($arr, $phanTuThem);
echo "Mảng sau khi thêm phần tử $phanTuThem vào đầu là: " . implode(', ', $themVaoDau);
$themVaoCuoi = themVaoCuoi($arr, $phanTuThem);
echo "<br> Mảng sau khi thêm phần tử $phanTuThem vào cuối là: " . implode(', ', $themVaoCuoi);
echo "<hr>";
?>

<!-- 21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng. -->
<?php
echo "Câu 21: <br>";
function soLonThuHai($arr){
    $n = count($arr);
    if ($n < 2){
        echo "Mảng quá nhỏ để tìm số lớn thứ hai.";
        return;
    }
    rsort($arr);
    echo "Số lớn thứ hai trong mảng là: " . $arr[1];
}
$arr = [4, 2, 7, 1, 9, 10];
echo "Ta có mảng: " . implode(", ", $arr) . "<br>";
soLonThuHai($arr);
echo "<hr>";
?>

<!-- 22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương. -->
<?php
echo "Câu 22: <br>";
function UCLN($a, $b){
    while ($b != 0){
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
function BCNN($a, $b){
    return ($a * $b)/UCLN($a, $b);
}
$so1 = 20;
$so2 = 10;
$UCLN = UCLN($so1, $so2);
$BCNN = BCNN($so1, $so2);
echo "Ước chung lớn nhất của $so1 và $so2 là: $UCLN <br>";
echo "Bội chung nhỏ nhất của $so1 và $so2 là: $BCNN";
echo "<hr>";
?>

<!-- 23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không. -->
<?php
echo "Câu 23: <br>";
function soHoanHao($n){
    if ($n <= 0){
        return false;
    }
    $sum = 0;
    for ($i = 1; $i <= $n/2; $i++){
        if ($n % $i == 0){
            $sum += $i;
        }
    }
    return $sum == $n;
}
$soCanKiemTra = 6;
if (soHoanHao($soCanKiemTra)){
    echo "$soCanKiemTra là số hoàn hảo.";
}
else {
    echo "$soCanKiemTra không là số hoàn hảo.";
}
echo "<hr>";
?>

<!-- 24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng. -->
<?php
echo "Câu 24: <br>";
function soLeLonNhat($arr){
    $soLeLonNhat = null;
    foreach ($arr as $so){
        if ($so % 2 != 0 && ($soLeLonNhat === null || $so > $soLeLonNhat)){
            $soLeLonNhat = $so;
        }
    }
    return $soLeLonNhat;
}
$arr = [4, 2, 7, 1, 9, 10];
echo "Ta có mảng: " . implode(", ", $arr) . "<br>";
$soAmLonNhat = soAmLonNhat($arr);
$soLeLonNhat = soLeLonNhat($arr);
if ($soLeLonNhat !== null){
    echo "Số lẻ lớn nhất trong mảng là: " . $soLeLonNhat;
}
else {
    echo "Không có số lẻ nào trong mảng.";
}
echo "<hr>";
?>

<!-- 25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không. -->
<?php
echo "Câu 25: <br>";
function prime($n){   
    if ($n <= 1) {
        return false;
    }
    for($i = 2; $i <= sqrt($n); $i++){
    if($n % $i == 0){
        return false;
    }
}
return true;
}
$a = 47;
if (prime($a)){
    echo "$a là số nguyên tố";
}
else {
    echo "$a không là số nguyên tố";
}
echo "<hr>";
?>

<!-- 26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng. -->
<?php
echo "Câu 26: <br>";
function soDuongLonNhat($arr){
    $soDuongLonNhat = null;
    foreach ($arr as $so){
        if ($so > 0 && ($soDuongLonNhat === null || $so > $soDuongLonNhat)){
            $soDuongLonNhat = $so;
        }
    }
    return $soDuongLonNhat;
}
$arr = [4, 2, 7, 1, 9, 10];
echo "Ta có mảng: " . implode(", ", $arr) . "<br>";
$soAmLonNhat = soAmLonNhat($arr);
$soDuongLonNhat = soDuongLonNhat($arr);
if ($soDuongLonNhat !== null){
    echo "Số dương lớn nhất trong mảng là: " . $soDuongLonNhat;
}
else {
    echo "Không có số dương nào trong mảng.";
}
echo "<hr>";
?>

<!-- 27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng. -->
<?php
echo "Câu 27: <br>";
function soAmLonNhat($arr){
    $soAmLonNhat = null;
    foreach ($arr as $so){
        if ($so < 0 && ($soAmLonNhat === null || $so > $soAmLonNhat)){
            $soAmLonNhat = $so;
        }
    }
    return $soAmLonNhat;
}
$arr = [-4, -2, 7, 1, -9, 10];
echo "Ta có mảng: " . implode(", ", $arr) . "<br>";
$soAmLonNhat = soAmLonNhat($arr);
if ($soAmLonNhat !== null){
    echo "Số âm lớn nhất trong mảng là: " . $soAmLonNhat;
}
else {
    echo "Không có số âm nào trong mảng.";
}
echo "<hr>";
?>

<!-- 28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n. -->
<?php
echo "Câu 28: <br>";
function tongSoLe($n){
    $tong = 0;
    for ($i = 1; $i <= $n; $i+=2){
        $tong += $i;
    }
    return $tong;
}
$n = 15;
$ketqua = tongSoLe($n);
echo "Tổng các số lẻ từ 1 đến $n là: " . $ketqua;
echo "<hr>";
?>

<!-- 29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước. -->
<?php
echo "Câu 29: <br>";
function soChinhPhuong($n){
    $sqrt = sqrt($n);
    return ($sqrt * $sqrt == $n);
}
function timSoChinhPhuong($batDau, $ketThuc){
    echo "Các số chính phương trong khoảng $batDau đến $ketThuc là: <br>";
    for ($i = $batDau; $i <= $ketThuc; $i++){
        if (soChinhPhuong($i)){
            echo "$i <br>";
        }
    }
}
$batDau = 1;
$ketThuc = 50;
timSoChinhPhuong($batDau, $ketThuc);
echo "<hr>";
?>

<!-- 30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không. -->
<?php
echo "Câu 30: <br>";
function chuoiCon($chuoi, $chuoiCon){
    $vitri = strpos($chuoi, $chuoiCon);
    if ($vitri === false){
        return false;
    }
    else {
        return true;
    }
}
$chuoi = "Hello World";
$chuoiCon = "Hello";
if (chuoiCon($chuoi, $chuoiCon)){
    echo "'$chuoiCon' là chuỗi con của '$chuoi'.";
}
else {
    echo "'$chuoiCon' không là chuỗi con của '$chuoi'.";
}
?>