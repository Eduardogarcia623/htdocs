<?php

session_start();
//cerrar sesion de usuario
session_destroy();
//enviar de nuevo al login
header("location: ../views/login.view.php");
exit();
