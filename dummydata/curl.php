<?php
include("data.php");
$curl = curl_init();
$url = 'https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/informationBulk?ids=';
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

// makes calls equal to your request amount and send the data to $result one object at a time as $itemQuery
function populatedataVariable(){
$result = array();
for($i = 1;$i<{length of object};$i++){
    curl_setopt($curl,CURLOPT_URL,$url.$i);
    curl_setopt($curl,CURLOPT_HTTPHEADER, array('X-Mashape-Key:{INSERT YOUR KEY}'));
    curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, false);

    $itemQuery = curl_exec($curl);
    array_push($result,$itemQuery);
}
return $result;
}


//addDataToTables($result);

print_r($result);
//curl_close($curl);


$array ='';

// //$array = addslashes($array);
//     $array = str_replace("'", "\'", $array);
//     print($array);
//     $array = json_decode($array,true);
//     print_r($array);
//     print('<br>');
//     print('<br>');
//     print('<br>');
//     print('<br>');
//     // $variableGrab = json_decode($array, true);
//     // //$attempt = $variableGrab[0];
//     // var_dump($variableGrab);
//     // print_r($variableGrab);
?>

