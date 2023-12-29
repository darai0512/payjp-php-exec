<?php
require_once 'vendor/autoload.php';
Payjp\Payjp::setApiKey('sk_test_b19f1ab7a8fb820d90fe05c0');
echo Payjp\Subscription::all()->data[0];
