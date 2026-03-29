<?php 
    
// $arr = [24,65,7,'Hello',23];
// echo '<pre>';
// print_r($arr);
// array_push($arr,243,53,'World');
// $arr[3] = 1;
// print_r($arr);


// $price = [1000,2300,4500,560,34,120];

// foreach ($price as $key => $value){
//     $price_20 = $value * 0.2;
//     echo '<h2>'.$price_20.'</h2>';

// }





// $info1 = ['Anun' => 'Aram', 'Azganun' => 'Adamyan', 'Hasce' => FALSE,'Tariq' => 15,'Dasaran' => "1 Kurs"];
// $info2 = ['Anun' => 'Aram', 'Azganun' => 'Xazaryan', 'Hasce' => FALSE,'Tariq' => 15,'Dasaran' => "1 Kurs"];
// $info3 = ['Anun' => 'Aram', 'Azganun' => 'Poxosyan', 'Hasce' => FALSE,'Tariq' => 15,'Dasaran' => "1 Kurs"];

// $user = [$info1,$info2,$info3];

// foreach ($user as $key => $value) {
//     echo '<h2>';
//     echo $user[$key]['Azganun'];
//     echo '</h2>';
// }

// echo '<pre> <h1>';
// print_r($info);
// echo '</pre> </h1>';

$a = [];

for($i = 0;$i <= 10;$i++){
    array_push($a,rand(1,100));
}
echo '<pre> <h1>';
print_r($a);
echo '</pre> </h1>';
?>