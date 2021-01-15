<?php

session_start();
unset($_SESSION['admin']);
header('Location: home');

session_start();
unset($_SESSION['alumno']);
header('Location: home');

session_start();
unset($_SESSION['profesor']);
header('Location: home');


?>