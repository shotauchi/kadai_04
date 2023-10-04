<?php
// 1〜10 までを足した値を返す関数
function times($num){
return $num * 2;
}  


function sumab($a,$b){
    return $a + $b;
}


function product($arr){
    $result = $arr[0]; 
    for ($i = 1; $i < count($arr); $i++) {
            $result *= $arr[$i];
    }
    return $result;
}
echo product(array(1, 3, 5 ,7, 9));


function max_array($arr){
  
  $max_number = $arr[0];
  foreach($arr as $a){
    
  if($max_number < $a){
         $max_number = $a;
     }
  }

  return $max_number;
} 

echo max_array(array(0));


//strip_tags
$str = "<h1>apple</h1>"
  . "<p>orange</p>";
echo strip_tags($str) ."\n";


//array_push
$stack = array("hamburger", "steak");
array_push($stack, "rice ball", "bread");
print_r($stack);
  

//array_merge
$array1 = array("color" => "blue", 1, 3);
$array2 = array("a", "b", "color" => "white", "shape" => "square", 3);
$result = array_merge($array1, $array2);
print_r($result);


//time
echo '現在のUnixタイムスタンプ：'.time();

echo '<br>';

//mktime
echo date("M-d-Y", mktime(0, 0, 0, 12, 30, 2022));
echo date("M-d-Y", mktime(0, 0, 0, 12, 31, 2022));
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 2023));
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 23));

//date
print(date('Y m d').'<br>');
print(date('Y年m月d日').'<br>');
print(date('d day').'<br>');
print(date('d \d\a\y').'<br>');
print(date('c').'<br>');

