<?php
// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function doubleInt($int) {
    return $int * 2;
}
echo doubleInt(3). "\n";
?>
<?php
// 2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
function printSum($a,$b) {
    echo $a + $b;
}
printSum (3,4) . "\n";
?>

<?php
 $arr = array (1,3,5,7,9);
 function multi($arr) {
     $ret=1;
     foreach ($arr as $value) {
         $ret *=$value;
}
echo ("配列の計算結果：". $ret);
}
multi ($arr) . "\n";
?>

<?php
function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    if ($max_number < $a) {
     $max_number = $a;
   }
  }
  return $max_number;
}
echo max_array(array(1, 3, 5, 7, 9)) . "\n";
?>

<?php
$scores=array(30,40,50);
array_push ($scores,60,70);
print_r($scores) ."\n";
?>

<?php
$a = [3,4,8];
$b = [4,8,12];

$merged = array_merge($a,$b);
print_r($merged) ."\n";
?>

<?php

echo time () ."\n";

echo date('Y-m-d l',mktime(0,0,0,9,3,2023))."\n";
?>

<?php
$str = '<a href="https://komaricote.com">strip_tags()でHTMLタグ削除</a>';
$deleteHtml = strip_tags($str);
?>



