<?php
require 'vendor/autoload.php';
$app=new\atk4\ui\App('Meincraft');
$app->initLayout('Centered');
$button = $app->add ('Button');
$button->set ('report');
$button->icon = 'plus';
$button->link('https://www.steamcommunity.com');
