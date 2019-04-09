<?php

require  '../vendor/autoload.php';

$hello = new App\Wcs\Hello();

echo $hello->parler();

echo '<br>';
echo '<br>';

$HelloWorld = new HelloWorld\SayHello();

echo $HelloWorld->world();


