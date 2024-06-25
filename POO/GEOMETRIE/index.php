<?php
require_once "Rectangle.class.php";
require_once "TriangleRectangle.class.php";

$r1= new Rectangle(5,5);
$r2 = new Pave(5,5,5);
$r3 = new TriangleRectangle(5,7);
$r5 = new Pyramide(5,5);

$r1->AfficherRectangle();
$r2->AfficherPave();
$r3->AfficherTriangleRectangle();
$r5->AfficherPyramide();


