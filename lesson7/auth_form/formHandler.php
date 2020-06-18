<?php

session_start();

// qwerty : 123
const AUTH_SUCCESS = 'success'; // ответ сервера в случае успешной авторизации
const AUTH_ERROR = 'error'; // ответ сервера в случае ошибки

function auth($login, $password){
    // возвращает либо true либо false
    return trim($login) === 'qwerty' && trim($password) === '123';


}

function server_answer(){
    $post = $_POST;
    // получаем данные, которые пользователь ввёл в форму
    $login = $post['login']; // 'login'
    $pwd = $post['password']; // 'password'
    // вызываем функцию авторизации
    if(!auth($login, $pwd)){
        return AUTH_ERROR;
    }
    $_SESSION['login'] = $login;
    return AUTH_SUCCESS;
}

$server = $_SERVER;
if($server['REQUEST_METHOD'] === 'POST'){
    echo server_answer();
}
