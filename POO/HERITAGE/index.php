<?php
require_once "chien.class.php";

$chien = new Animal("Rex");
echo $chien->nom . "dit" . $chien->parler();
