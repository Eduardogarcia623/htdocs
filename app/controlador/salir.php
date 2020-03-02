<?php

session_start();
//cerrar sesion de usuario
session_destroy();
//enviar de nuevo al login
header("location: ../vista/login.php");
exit();
