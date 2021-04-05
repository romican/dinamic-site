<?php

include("app/database/db.php");
$errMsg = '';


//функция заполнение сессии и распознования админ не админ
function userAuth($sessvar){
  $_SESSION['id'] = $sessvar['id'];
  $_SESSION['login'] = $sessvar['username'];
  $_SESSION['admin'] = $sessvar['admin'];

  if($_SESSION['admin']) {
    header('location:' . BASE_URL . 'admin/admin.php');
  }else{
    header('location:' . BASE_URL);
  }    
}


//код для формы регистрации
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])) {

      $admin = 0;
      $login = trim($_POST['login']);
      $email = trim($_POST['mail']);
      $passF = trim($_POST['pass-first']);
      $passS = trim($_POST['pass-second']);

if ($login === '' || $email === ''  || $passF === '' ) {
  $errMsg = 'Не все поля заполнены';
}elseif(mb_strlen($login,'UTF-8') < 2){
  $errMsg = 'Логин должен быть более 2-х символов';
}elseif($passF !== $passS){
  $errMsg = 'Пароли должны совпадать';
}else{
  $existance = selectOne('users',['email' => $email]);
  if($existance['email'] === $email){
    $errMsg = 'Пользователь с таким почтовым ящиком уже зарегистрирован';
  }else{
    $pass = password_hash($passF, PASSWORD_DEFAULT);
    $post = [
      'admin' => $admin,
      'username' => $login,
      'email' => $email,
      'password' => $pass
  ];
      $id = insert('users', $post);
      $user =selectOne('users',['id' => $id]);

      userAuth($user);
  }  
}
//подставляется логин и е-мейл если была ошибка
}else{
  $login = '';
  $email = '';
}

//код для формы регистрации
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])) {

      $email = trim($_POST['mail']);
      $pass = trim($_POST['password']);

      if ($email === '' || $pass === '' ) {
        $errMsg = 'Не все поля заполнены';
      }else{
      $existance = selectOne('users',['email' => $email]);
      if ($existance && password_verify($pass,$existance['password'])) {

        userAuth($existance);

      }else{
        $errMsg = 'Почта либо пароль введены неверно';
      }
    }
//подставляется логин если была ошибка
}else{
  $email = '';
}
?>