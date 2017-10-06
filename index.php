<?php
require 'vendor/autoload.php';
$app=new\atk4\ui\App('Meincraft');
$app->initLayout('Centered');
$button = $app->add ('Button');
$button->set ('report');
$button->icon = 'bug';
$button->link('https://www.steamcommunity.com');
$button = $app->add ('Button');
$button->set ('watch');
$button->link('https://www.youtube.com');
