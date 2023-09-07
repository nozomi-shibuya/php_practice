<?php
echo 'hello php!' . "\n";
?>
<?php
$a = 3;
$b = 7;
echo $a+$b . "\n";
?>
<?php
$array_month = [
    "January" => "1月",
    "February" => "2月",
    "March" => "3月",
    "April" => "4月",
    "May" => "5月",
    "June" => "6月",
    "July" => "7月",
    "August" => "8月",
    "September" => "9月",
    "October" => "10月",
    "November" => "11月",
    "December" => "12月"
];
echo $array_month["August"] . "\n";
?>
<?php
$hello = "Hello," ;
$name = "Nozomi";
$world = "‘s World!";
echo $hello.$name.$world . "\n";
?>
<?php
$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost ."\n";
?>
<?php
$array_calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月",
];
echo $array_calendar["December"] ."\n";
?>
<?php
$name == "Nozomi";
if ($name == "Nozomi") {
  echo "私はのぞみです。";
}else {
  echo "私はのぞみではありません。" . "\n";
}
?>
<?php
for ($i = 1; $i <= 1000; $i++) {
$total += $i;
}
echo $total. "\n";
?>
<?php
$fruits = array ('いちご','オレンジ','メロン','ばなな','すいか');
foreach ($fruits as $fruit)
echo $fruit.'' ."\n";
?>
<?php
$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++) {
  if($i % 5 == 0){
  echo $i;
  }
}