<?php
require 'vendor/autoload.php';
$app=new \atk4\ui\App('Maincraft 2');
$app->initLayout('Centered');
/*$button = $app->add ('Button');
$button->set ('report');
$button->icon = 'bug';
$button->link('https://www.steamcommunity.com');

$button1 = $app->add ('Button');
$button1->set ('watch');
$button1->link('https://www.youtube.com');

$button2 = $app->add ('Button');
$button2->set ('diiiimooooon');
$button2->icon = 'Heartbeat';
$button2->addClass ('massive blue');
$button2->link('https://www.e-klase.lv');
$button2 = $app->add(['Button','Kurvish','iconRight'=>'right arrow']);
$button3->addClass ('green');

$bar = $app->add(['ui'=>'vertical buttons']);
$bar->add(['Button', 'lok', 'icon'=>'lok']);
$bar->add(['Button','puk','icon'=>'puk']);
$bar->add(['Button','kol','icon'=>'kol');
$bar->add(['Button','kndr','icon'=>'kndr']);
*/
/*
$button = $app->add('Button');
$button->set ('bot');
$button -> link('borshcht.php');
*/
$text = $app -> add (['Text','lets try to win']);
$button = $app -> add ('Button');
$button -> set ('just try');
$button->icon = 'find';
$button -> addClass ('massive red');
$button -> link(['game','min'=>1,'max'=>100]);
