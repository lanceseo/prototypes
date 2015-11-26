<?php
$pics = (glob('images/*.jpg'));
$outputData = ['success'=>true, 'error'=>'an error', 'images'=>$pics];
$output = json_encode($outputData);
print($output);