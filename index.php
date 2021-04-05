<?php include("path.php");
      include("/Ampps/www/dinamic-site/app/database/db.php")
?>
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
<?php include("app/include/header.php");?>
    <!-- Блок карусели старт -->
    <div class="container">
      <div class="row">
        <h2 class="slider-title">Топ публикаций</h2>
      </div>
      <div
        id="carouselExampleCaptions"
        class="carousel slide"
        data-bs-ride="carousel"
      >

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/dinamic-site/assets/images/lol2.jpg" class="d-block w-100" alt="..." />
            <div
              class="carousel-caption carousel-caption-hack d-none d-md-block"
            >
              <h5><a href="">First slide label</a></h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/dinamic-site/assets/images/slide-2.jpg" class="d-block w-100" alt="..." />
            <div
              class="carousel-caption carousel-caption-hack d-none d-md-block"
            >
              <h5><a href="">Second slide label</a></h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/dinamic-site/assets/images/img-1.jpg" class="d-block w-100" alt="..." />
            <div
              class="carousel-caption carousel-caption-hack d-none d-md-block"
            >
              <h5><a href="">Third slide label</a></h5>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- Блок карусели конец -->
    <!-- Блок MAIN СТАРТ -->
    <div class="container">
      <div class="content row">
        <!-- main content -->
        <div class="main-content col-md-9 col-12">
          <h2>Последние публикации</h2>

          <div class="post row">
            <div class="img col-12 col-md-4">
              <img
                src="/dinamic-site/assets/images/news_06_09_19_st_lit_malvere_1.jpg"
                alt=""
                class="img-thumbnail"
              />
            </div>
            <div class="post_text col-12 col-md-8">
              <h3>
                <a href="single.php">Прикольная статья потеме динамического сайта...</a>
              </h3>
              <i class="far fa-user"> Имя автора</i>
              <i class="far fa-calendar"> Mar 24, 2021</i>
              <p class="preview-text">
                Давно выяснено, что при оценке дизайна и композиции читаемый
                текст мешает сосредоточиться.Давно выяснено, что при оценке
              </p>
            </div>
          </div>

          <div class="post row">
            <div class="img col-12 col-md-4">
              <img
                src="/dinamic-site/assets/images/news_06_09_19_st_lit_malvere_1.jpg"
                alt=""
                class="img-thumbnail"
              />
            </div>
            <div class="post_text col-12 col-md-8">
              <h3>
                <a href="single.html">Прикольная статья потеме динамического сайта...</a>
              </h3>
              <i class="far fa-user"> Имя автора</i>
              <i class="far fa-calendar"> Mar 24, 2021</i>
              <p class="preview-text">
                Давно выяснено, что при оценке дизайна и композиции читаемый
                текст мешает сосредоточиться.
              </p>
            </div>
          </div>
        </div>
        <!-- sidebar content -->
      <div class="sidebar col-md-3 col-12">
      <div class="section search">
          <h3>Поиск</h3>
          <form action="/" method="POST">
          <input
              type="text"
              name="search-term"
              class="text-input"
              placeholder="Введите что искать..."
          />
          </form>
          </div>
              <div class="section topics">
                <h3>Категории</h3>
                <ul>
                  <li><a href="/">Программирование</a></li>
                  <li><a href="/">Дизайн</a></li>
                  <li><a href="/">Визуализация</a></li>
                  <li><a href="/">Кейсы</a></li>
                  <li><a href="/">Мотивация</a></li>
                </ul>
              </div>
            </form>
          
        </div>
      </div>
    </div>
    <!-- Блок MAIN КОНЕЦ -->
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
