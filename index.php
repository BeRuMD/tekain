<?php
require 'vendor/autoload.php';
$app=new\atk4\ui\App('Meincraft');
$app->initLayout('Centered');
$button = $app->add ('Button');
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
