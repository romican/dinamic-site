<?php include("path.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <!-- Иконки Font Awesome -->
    <script
      src="https://kit.fontawesome.com/f803b49efc.js"
      crossorigin="anonymous"
    ></script>
    <!-- CSS Styles/style.css -->
    <link rel="stylesheet" href="/dinamic-site/assets/css/style.css" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <title>Hello, world!</title>
  </head>

  <body>
    <!-- Блок шапки и меню старт -->
    <?php include("app/include/header.php");?>
    <!-- Блок шапки и меню конец -->
    <!-- FORM start -->
    <div class="container reg_form">
      <form class="row justify-content-center" method="POST" action="reg.html">
        <h2>Форма регистрации</h2>
        <div class="mb-3 col-12 col-md-4">
          <label for="formGroupExampleInput" class="form-label"
            >Ваш логин</label
          >
          <input
            type="text"
            class="form-control"
            id="formGroupExampleInput"
            placeholder="Введите Ваш логин"
          />
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input
            type="email"
            class="form-control"
            id="exampleInputEmail1"
            aria-describedby="emailHelp"
          />
          <div id="emailHelp" class="form-text">
            Ваш е-мейл не будет использован для спама.
          </div>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
          <label for="exampleInputPassword1" class="form-label">Пароль</label>
          <input
            type="password"
            class="form-control"
            id="exampleInputPassword1"
          />
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
          <label for="exampleInputPassword2" class="form-label"
            >Подтвердите пароль</label
          >
          <input
            type="password"
            class="form-control"
            id="exampleInputPassword2"
          />
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
          <button type="button" class="btn btn-outline-secondary">
            Регистрация
          </button>
          <a href="log.php">Войти</a>
        </div>
      </form>
    </div>
    <!-- FORM end -->
    <!-- footer start -->
    <?php include("app/include/footer.php");?>
    <!-- footer end -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
