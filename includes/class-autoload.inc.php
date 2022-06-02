<?php
spl_autoload_register(function ($className) {
    $file = 'classes/' . $className . '.class.php';
    if (file_exists($file)) {
        include $file;
    }
});