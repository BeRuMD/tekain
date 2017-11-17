<?php
require 'vendor/autoload.php';
$app=new \atk4\ui\App('Maincraft 2');
$app->initLayout('Centered');
$min = $_GET['min'];
$max = $_GET['max'];
$mid =round( ($min+$max)/2);
$Label = $app->add(['Label','твоё число'.$mid.'?']);

if(($max-$min==1) and (ISSET($_GET['key']))) {
  $text = $app->add(['Text','Ошибка']);
$buttonerror = $app->add(['Button','Restart']);
$buttonerror -> link(['game','min'=>0,'max'=>100]);
}else{
$button1 = $app->add('Button');
$button1 -> set ('Нет, моё число больше');

$button2 = $app->add('Button');
$button2 -> set ('Нет, моё число меньше');

$button3 = $app->add('Button');
$button3 -> set ('Да, это моё число');

$button1 -> link(['game','min'=>$mid,'max'=>$max,'key'=>'key']);
$button2 -> link(['game','min'=>$min,'max'=>$mid,'key'=>'key']);
}
