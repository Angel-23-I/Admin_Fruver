<?php
// Valores por defecto para desarrollo local con XAMPP.
// Para otro entorno, copia Config/Config.local.example.php como Config/Config.local.php
// (ese archivo no se sube a Git) y cambia allí la URL y las credenciales.
if (file_exists(__DIR__ . '/Config.local.php')) {
    require_once __DIR__ . '/Config.local.php';
}
defined('base_url') || define('base_url', 'http://localhost/App_proyecto/');
defined('host')     || define('host', 'localhost');
defined('user')     || define('user', 'root');
defined('pass')     || define('pass', '');
defined('db')       || define('db', 'sistema');
defined('charset')  || define('charset', 'charset=utf8');
?>
