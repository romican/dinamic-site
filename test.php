<?php
include('path.php');
include("app/database/db.php");

$arr = selectAll('users');
tt($_SESSION)
?>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <a href="index.php">На главную</a>
    <div class="container">
            <table class="table table-striped table-hover">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Админ</th>
        <th scope="col">Логин</th>
        <th scope="col">е-мейл</th>
        <th scope="col">Пароль</th>
        <th scope="col">Дата регистрации</th>
    </tr>    
        <?php foreach ($arr as $user):?>
            <tr>
        <?php foreach($user as $item): ?>
            <td><?=$item?></td>
        <?php endforeach;?>            
            </tr>
        <?php tt($value);?>
        <?php endforeach;?>   
            </table>

    </div>
