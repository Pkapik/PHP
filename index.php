<?php
error_reporting(E_ALL);

$name = readline(" Введите ваше имя? ");
$task_1  = readline(" Какая задача стоит перед вами сегодня? ");
$time_1  = readline(" Сколько примерно времени эта задача займет? ");
$task_2  = readline(" Что нужно будет следать потом? ");
$time_2  = readline(" Сколько это займёт времени? ");
$task_3  = readline(" Что необходимо сделать в последнюю очередь? ");
$time_3  = readline(" Как долго это будет? ");

$total_time = $time_1 + $time_1 + $time_1;

echo " $name, сегодня у Вас запланировано 3 задачи на день: 
1) $task_1 ($time_1 ч)
2) $task_2 ($time_2 ч)
3) $task_3 ($time_3 ч)
Примерное время выполнения плана = $total_time ч";