<?php
require 'vendor/autoload.php';
$app=new \atk4\ui\App('GerojamSlava');
$app->initLayout('Centered');

$label1 = $app->add(['Label', 'maidan',' massive blue','icon'=>'gerojam slava','detail'=>'poshli zech pokrishka na maidan']);
$img = 'https://evreimir.com/wp-content/uploads/2017/05/KNDR-702x336.jpg';
$icon = $app->add(['Image',$img]);
