<?php
$fruits = ['リンゴ', 'バナナ', 'ぶどう'];


$fruits[2] ='いちご';
$fruits[3] ='メロン';

unset($fruits[1]);
echo "<pre>";
var_dump($fruits);
echo "<pre>";

echo "<pre>";
print_r($fruits);
echo "<pre>";
// 果物の値段リストを作成
$arrayList = [
    'リンゴ' => 100,
    'バナナ' => 200,
    'ぶどう' => 300
];
    $arraylist['イチゴ']= 400;
    $arraylist['リンゴ']= 80;

    echo "<pre>";
    print_r($arraylist);
    echo "<pre>";
?>
