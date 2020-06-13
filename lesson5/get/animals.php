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

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Кошки</title>
</head>
<body>

<section>
<?foreach($cats as $cat): ?>
    <h3>Название категории</h3>
<div>
    <h2>имя:<?echo $cat['name']?> </h2>
    <p>Возраст: <?echo $cat['age']?></p>
    <p>Документы<?echo ($cat['passport'] ? 'Есть документы' : 'Нет документов')?></p>
    <div>
    <img height="300" width="600" src="<?echo $cat['img'];?>" alt="<?echo $cat['name'];?>"> 
    </div>
    <a href="animal.php?id=<?echo $cat['id']?>"> Подробнее</a>
</div>
<? endforeach; ?>
</section>


</body>
</html>

