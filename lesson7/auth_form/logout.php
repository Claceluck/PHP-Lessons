<?php
session_start();

// закрытие сессии / очситка массива $_SESSION
function log_out(){
    // session_destroy();
    $_SESSION = []; // полная очистка сессии, лучше и безопаснее
    header('Location: main.php');
}

log_out();