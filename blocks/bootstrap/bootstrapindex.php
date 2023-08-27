<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

        <!-- Свои стили подлкючать после бутстрапа -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Свои стили подлкючать после бутстрапа -->
    <title>Bootstrap Leaening</title>
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-white">Страница изучения Bootstrap</h1>
                <div class="itd_play" data-bs-toggle="modal" data-bs-target="#start">
                    <div class="itd_triangle"></div>
                    </div>
                <a href="#footer" class="btn btn-itd btn-lg text-uppercase">Let's GO</a>
            </div>            
        </div>
    </div>
</header>

</body>

<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-uppercase color1 mb-5">Цели уроков</h2>
            </div>
        </div>
    </div>
</section>

<footer id="footer">THis IS FOOOOOOOOOOOOOOTER</footer>

<div class="modal fade" id="start" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">ITDOcktor На его канале изучаем Bootstrap</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class='embed-container'><iframe src='https://www.youtube.com/embed/Tq_ormB8bdA?si=GLSyg7pZFPj7GcyX' frameborder='0' allowfullscreen></iframe></div>



        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/Tq_ormB8bdA?si=GLSyg7pZFPj7GcyX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->





      </div>
    </div>
  </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>

</html>