<?php

$data = file_get_contents('backend-titanic-test.json');
$data = json_decode($data, true);

$name = [];
$nameGroup = [];
$age = [];

foreach ($data as $item) {
    $age[] = $item['age'];
}

$most = array_count_values($age);
arsort($most);
$groupMost = array_count_values($most);
arsort($groupMost);

$amountKeys = array_keys($most);
$amountValues = array_values($most);
$groupAmountKey = array_keys($groupMost)[0];
$groupKey = 0;

foreach ($amountKeys as $index => $item) {
    foreach ($data as $item2) {
        if ($index === 0 && $item === $item2['age']) {
            $name[] = $item2['name'];
        }

        if ($item === $item2['age'] && $amountValues[$index] === $groupAmountKey) {
            $nameGroup[$groupKey][] = $item2['name'];
        }
    }

    if ($amountValues[$index] === $groupAmountKey) {
        $groupKey++;
    }
}

$data = json_encode([
    0 => [
        'statment' => '1. Berdasarkan contoh data, usia yang paling banyak muncul adalah usia 22 tahun. Maka nama-nama yang muncul adalah sebagai berikut :',
        'output' => $name
    ],
    1 => [
        'statment' => '2. Berdasarkan contoh data, terdapat 5 kelompok usia yang paling banyak muncul yaitu 6 orang dengan kelompok usia : 14, 10, 11, 23, 29. Berikut kelompok usia tersebut :',
        'output' => $nameGroup
    ]
]);

echo $data;
file_put_contents('backend-titanic-output.json', $data);
