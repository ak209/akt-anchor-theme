<?php

$random = array (
    'img/misty-bg.jpg',
    'img/oz-park.jpg',
    'img/Snow.jpg',
    'img/andy-shore.jpg',
    'img/crab.jpg',
    'img/coffee.jpg',
    'img/my-dear.jpg',
    'img/pelicans.jpg',
    'img/sunshine.jpg',
    'img/the-shore.jpg',


);

$count = count($random) -1;

$number = rand(0, $count);

echo $random[$number]

?>