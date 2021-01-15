<?php

// controllers/Inicio.php

require '../fw/fw.php';
require '../views/Info.php';

$vi = new Info();
$vi->render();