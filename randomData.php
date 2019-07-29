
    <?php
header('Content-Type: application/json');
header ('Access-Control-Allow-Origin: *');
// $newArray= array();
//     for ($i=0; $i<$_GET['numberX']; $i++){
//         $number = rand(0,20);
//         $formatJson = [$i,$number];
//         array_push($newArray,$formatJson);
//     }

$newArray= array();
    for ($i=0; $i<10; $i++){
        $number = rand(0,20);
        $formatJson = [$i,$number];
        array_push($newArray,$formatJson);
    }


echo json_encode ($newArray, JSON_PRETTY_PRINT);

    ?>
