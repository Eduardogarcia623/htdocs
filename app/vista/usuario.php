<?php
session_start();
echo "BIENVENIDO " . $_SESSION['datos_personales']['nombre_persona'];
