<?php 

$tasks = [
    [
        'title' => 'Задача 1',
        'date' => 'yesterday',
        'participants' => ['Артур', 'Полина'],
        'closed' => false
    ],
    [
        'title' => 'Задача 2',
        'date' => 'tomorrow',
        'participants' => [],
        'closed' => false
    ],
    [
        'title' => 'Задача 3',
        'date' => 'today',
        'participants' => ['Артур', 'Глеб'],
        'closed' => false
    ],
    [
        'title' => 'Задача 4',
        'date' => 'yesterday',
        'participants' => ['Павел', 'Полина'],
        'closed' => true
    ]
];

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
   <?foreach($tasks as $task): ?>
    <div>
    <h3><?echo $task['title']?> </h3>
    <span>Дата: <? echo $task['date'] ?></span>
    <p><?echo ($task['closed'] ? 'Завершена' : 'Не завершена')?></p>
    <?if($task['participants']):?>
    <p>Учасники:</p>
    <ul>
    <?foreach ($task['participants'] as $participant): ?>
    <li><?echo $participant?></li>
    <? endforeach;?>
    </ul>
    <? endif; ?>
    </div>
    <? endforeach; ?>
    </section>
    

</body>
</html>

