<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App ('Gamer');
$app->initLayout('Centered');
$button = $app->add (['Button','gaish']);
$button -> icon = 'find';

$button -> addClass('big red');
