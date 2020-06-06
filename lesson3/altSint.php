<?php
$cities = [
    [
        'id'=>1,
        'title'=>'Париж',
        'price'=>1234,
        'img'=>'Tra.jpg'
    ],
    [
        'id'=>2,
        'title'=>'Нью-Йорк',
        'price'=>4526,
        'img'=>'Tra1.jpg'
    ],

    [
        'id'=>3,
        'title'=>'Лондон',
        'price'=>2345,
        'img'=>'tra3.jpg'
    ],

];

// foreach ($arr as $key => $value):
//     тело цикла;
// endforeach;

var_dump($cities[2]['title']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<section>
<?foreach($cities as $city): ?>
<div>
<!-- !Название города -->
<h3>Путешествие в <? echo $city['title']; ?> </h3> 
<img width="600" height="200" src="img/<? echo $city['img'];?> ">
<p>Стоимость <? echo $city['price'] ?> </p>
</div>
</section>
<? endforeach; ?>
</body>
</html>