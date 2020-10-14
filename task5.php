<?php

$cities = [];
$cars = [];

//заполняем массив "cities"
for ($j = 0; $j < 2; $j++) {
    $cities[] = [
        'center' => rand(0, 1000),
        'radius' => rand(0, 100),
    ];
}

//заполняем массив "cars"
for ($i = 0; $i < 10; $i++) {
    $cars[] = rand(0, 1000);
}

//добавляем начало и конец городов
foreach ($cities as $key => $city) {
    $cities[$key]['start'] = $city['center'] - $city['radius'];
    $cities[$key]['end'] = $city['center'] + $city['radius'];
}

//определяем где едет автомобиль и с какой скоростью 
foreach ($cars as $key => $car) {
    if (($car >= $cities[0]['start'] && $car <= $cities[0]['end']) || 
        ($car >= $cities[1]['start'] && $car <= $cities[1]['end'])) {
        var_dump("Машина " . ($key + 1) . " едет по городу на $car км со скоростью не более 70");
    } else {
        var_dump("Машина " . ($key + 1) . " едет по шоссе на $car км со скоростью не более 90");
    }
}
