<?php





$cats = [
    [
        'id' => 1,
        'name' => 'Машка',
        'age' => 0.6,
        'passport' => true,
        'img' => 'mashka.jpg',
        'gallery' => ['m1.jpg', 'm2.jpg', 'm3.jpg']
    ],
    [
        'id' => 2,
        'name' => 'Шпунтик',
        'age' => 1.2,
        'passport' => true,
        'img' => 'shpyntik.jpg',
        'gallery' => ['s1.jpg', 's2.jpg', 's3.jpg']
    ],
    [
        'id' => 3,
        'name'=>'Боня',
        'age'=> 0.3,
        'passport' => false,
        'img'=> 'bonya.jpg',
        'gallery' => ['b1.jpg', 'b2.jpg', 'b3.jpg']
    ],
];

$get = $_GET;
$id_animal = $get['id'];
$animal = $cats[$id_animal - 1];

?>

<!doctype html>
<html lang="ru">
<head>
    <title><? echo $animal['name'] ?> </title>
</head>
<body>

<div>
    <h2>имя <? echo $animal['name'] ?>  </h2>
    <p>Возраст: <? echo $animal['age'] ?></p>
    <p>Документы: <?echo $animal['passport'] ? 'Есть документы' : 'Нет документов'?></p>
    <div>
        <img height="300" width="600" src="<? echo $animal['img'] ?>" alt="<? echo $animal['name'] ?>">
    </div>

    <div>
    <? foreach ($animal['gallery'] as $img):?>
    <img height="300" width="600" src="<?echo $img;?>" alt="<?echo $animal['name'];?>">
    <? endforeach; ?>
    </div>
</div>

</body>
</html>
