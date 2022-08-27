<?php

include_once 'Geometry/GeometryFigure.php';
include_once 'Geometry/Triangle.php';
include_once 'Geometry/Sphere.php';

$params = [
    'figure' => $GET['figure']
    // 'action' => $GET['action']
];

/**@var GeometryFigure $figure */
$figure = new  $params['figure']();

echo  $figure;
