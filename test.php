<?php
require 'vendor/autoload.php';
//New app//
$app = new \atk4\ui\App('Money Lending App');
///////////
//Layout//
$layout = $app->initLayout('Centered');
//////////
$button = $app->add(['Button', 'Click me']);
$button->addClass('big red');
$button->link('http://google.com/');
