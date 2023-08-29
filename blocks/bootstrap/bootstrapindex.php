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



<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-uppercase color1 mb-5">Цели уроков</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="itd-circle"><i class="icon-list-numbered"></i></div>
                <h5 class="text-center">Зачем все это надо</h5>
                <div class="line"></div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="itd-circle"><i class="icon-rouble"></i></div>
                <h5 class="text-center">РУБАС</h5>
                <div class="line"></div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="itd-circle"><i class="icon-chart-bar"></i></div>
                <h5 class="text-center">ЧАРТ БАР</h5>
                <div class="line"></div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="itd-circle"><i class="icon-code"></i></div>
                <h5 class="text-center">КОДЕ</h5>
                <div class="line"></div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="itd-circle"><i class="icon-file-video"></i></div>
                <h5 class="text-center">Видос какой то</h5>
                <div class="line"></div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="itd-circle"><i class="icon-help"></i></div>
                <h5 class="text-center">Зачем все это надо</h5>
                <div class="line"></div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="itd-circle"><i class="icon-up-open"></i></div>
                <h5 class="text-center">Зачем все это надо</h5>
                <div class="line"></div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="itd-circle"><i class="icon-thumbs-up"></i></div>
                <h5 class="text-center">Зачем все это надо</h5>
                <div class="line"></div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="itd-circle"><i class="icon-right-open"></i></div>
                <h5 class="text-center">Зачем все это надо</h5>
                <div class="line"></div>
            </div>
        </div>
    </div>
</section>

<section class="forwhom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-uppercase color2 mb-5">О необходимости Бутстрапа</h2>
            </div>
        </div>
<div class="row mb-5">
    <div class="col-md-6 col-sm-12">
        <h5 class="text-center">Быстрая верстка сайтов</h5>
    </div>
    <div class="col-md-6 col-sm-12">
        <h5 class="text-center">Стандартизированая методика</h5>
    </div>
    <div class="col-md-6 col-sm-12">
        <h5 class="text-center">Адаптив под разные экраны</h5>
    </div>
    <div class="col-md-6 col-sm-12">
        <h5 class="text-center">Юлик говорил шо надо </h5>
    </div>
</div>
<div class="row col-12"><a href="#footer" class="text-center btn-lg text-uppercase btn-itd">Let's GO</a></div>
</div>
</section>



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
      </div>
    </div>
  </div>
</div>

<section class="shedule">
    <div class="container">
        <div class="row">
        <div class="col-12">
        <h2 class="text-center text-uppercase color1 mb-3">Этапы обучения Bootstrap</h2>
        </div>
    </div>
<div class="row">
    <!-- Внизу начало аккордиона  -->
    <div class="col-md-4 col-sm-12">
        <h4 class="text-center fw-bold mb-3 mt-3">Module 1<br> (HTML)</h4>
        <div class="accordion accordion-flush" id="accordion1">
            <!-- Вот тут начало заголовка и кнопка расскрытия аккордиона  -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne" background>
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" >
        Такой же аккордион как мой таск
      </button>
    </h2>
    <!-- Закрыли заголовок, закрыли кнопки и дальше уже тело аккордиона  -->
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordion1">
      <div class="accordion-body">По сути этот аккордион ничем не отличается от моего аккордиона в таск менеджере, но мне кажется код намного проще</div>
    </div>
  </div>
  <div class="accordion-item" >
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      Развёрнут по умолчанию
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="flush-headingTwo" data-bs-parent="#accordion1">
      <div class="accordion-body">В строке  <code> button class="accordion-button collapsed </code> убрал <i>Collapsed</i> а в самом <code>div id="flush-collapseTwo" class="accordion-collapse collapse show"</code> добавил show, Поэтому теперь он автоматом открыт. Так можно сделать для нескольких пунктов</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      Частичка аккордиона №3, с очень большим текстом, как он будет отображаться интересно
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordion1">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
      Как изменить фон или стрелку
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordion1">
      <div class="accordion-body">Через f12 найти нужный элемент, в стиле найти его класс, и потом задать другие параметры для этого класса в своём css, по сути переназначить, что бы не лезть в Bootstrap файлик, мы просто ставим в своём другие параметры, а так как мы свой вызываем позже то он не перекрывается бутстрапом.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
      Добавление нового элемента аккордиона
      </button>
    </h2>
    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordion1">
      <div class="accordion-body">Для того что бы добавить новый элемент, и что бы он работал нормально. Надо найти параметры : <code><br>flush-collapseFour<br>#flush-collapseFour<br>flush-headingFour<br></code> и в теле и в кнопке, и заменить Фор на Файв, как в этом случае, всего их 5 штук таких</div>
    </div>
  </div>
</div>
    </div>

    <div class="col-md-4 col-sm-12">
        <h4 class="text-center fw-bold mb-3 mt-3">Module 2<br> (CSS)</h4>
        <div class="accordion accordion-flush" id="accordion2">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading10" background>
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapse10" >
        Lorem, ipsum dolor.
      </button>
    </h2>
    <div id="flush-collapse10" class="accordion-collapse collapse" aria-labelledby="flush-heading10" data-bs-parent="#accordion2">
      <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, saepe!</div>
    </div>
  </div>
  <div class="accordion-item" >
    <h2 class="accordion-header collapsed" id="flush-heading11">
      <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collapse11">
      Lorem.
      </button>
    </h2>
    <div id="flush-collapse11" class="accordion-collapse collapse " aria-labelledby="flush-heading11" data-bs-parent="#accordion2">
      <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet debitis, amet temporibus eum beatae consequatur saepe laborum laboriosam est quas!</div>
    </div>
  </div>
  <div class="accordion-item" >
    <h2 class="accordion-header collapsed" id="flush-heading12">
      <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse12" aria-expanded="false" aria-controls="flush-collapse12">
      Link
      </button>
    </h2>
    <div id="flush-collapse12" class="accordion-collapse collapse " aria-labelledby="flush-heading12" data-bs-parent="#accordion2">
      <div class="accordion-body">А тут вообще ссылку сделал прикиииинь,  с кнопкой даже <a href="www.mail.ru"><button>КНОПКА</button></a></div>
    </div>
  </div>
</div>
    </div>
</div>
</div>
</section>

<section class="learning">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h2 class="text-center text-uppercase color2 mb-5">Новая Секция что то тут надо</h2>
        </div>
    </div>
    <div class="row align-items-center mb-5">
        <div class="col-lg-9 col-sm-12">
        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, maiores.</h5>
        <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis asperiores officiis quis enim exercitationem. Libero ducimus illum suscipit itaque?</h5>
        <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam quos suscipit ex corrupti harum.</h5>
        <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, magni modi in quo dicta molestias dolorem quibusdam eius.</h5>
        <h5>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In soluta itaque rerum earum qui sint, autem odio, deserunt, porro repellat voluptates aliquid.</h5>
    </div>
    <div class="col-lg-3 col-sm-12 mb-sm-5 mt-sm-5 text-center">
        <img src="img/mockup.png" class="img-fluid" alt="Альтернативный текст">
    </div>
    </div>
<div class="row">
    <div class="col-12">
    <a href="#footer" class="text-center btn-lg text-uppercase btn-itd">Let's GO</a> 
    </div>
</div>
    </div>
</section>

<section class="author">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center text-uppercase color1 mb-5">Обо мне</div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-9 col-lg-12">
                <h4>Оксентий Роман Сергеевич</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non excepturi labore explicabo nobis dicta. Odio.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non excepturi labore explicabo nobis dicta. Odio.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non excepturi labore explicabo nobis dicta. Odio.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non excepturi labore explicabo nobis dicta. Odio.</p>
            </div>
            <div class="col-xl-3 col-lg-12 text-center">
                <img src="img/author.png" class="img-fluid itd_img" alt="Avtor">
            </div>
        </div>
    </div>
</section>

<section class="buy">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-uppercase color1 mb-5">
ПОГНАЛИ
      </h2>
            </div>
        </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5 col-sm-12">
                    <img src="img/preview.png" alt="Prewiyha" class="img-fluid mx-auto d-block">
                    <iframe src="https://yoomoney.ru/quickpay/fundraise/widget?billNumber=zakHhAStcAQ.230829&" width="500" height="480" frameborder="0" allowtransparency="true" scrolling="no"></iframe>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, accusantium dolores tempore dolorem voluptatibus ea tempora neque a quae sed beatae numquam eveniet reiciendis minima itaque? Iste saepe adipisci, consequatur dicta provident ullam necessitatibus impedit similique excepturi itaque esse tempora voluptate sapiente voluptas veritatis? Laudantium accusamus alias facere numquam aut iure eaque ad eum obcaecati unde quos dolores quod eius tenetur corrupti voluptatum quaerat omnis vitae, neque beatae porro? Ducimus, inventore. Quam labore voluptatem corrupti corporis laudantium excepturi, tenetur est harum quidem distinctio veniam. Voluptates laboriosam ratione nesciunt voluptatum excepturi eaque magni. Earum dicta magnam, esse maiores nostrum iste provident adipisci est cumque beatae. Fugit nesciunt tempora quas, iusto nam quisquam quia quibusdam magnam aperiam fuga sit placeat nobis consectetur voluptas incidunt expedita iure harum debitis repudiandae, nisi dolorum officiis non voluptate! Quod, sit accusantium! Commodi, officiis eius quo vero consectetur delectus neque illum molestias magni quam earum, fuga totam voluptates? Adipisci voluptatibus laborum animi sapiente aliquam fugiat libero rerum at. Iure impedit officiis nihil odit consequuntur nam est, quasi, ut sequi, deleniti harum fugit quis! Distinctio sint accusamus voluptate nemo minus ea odio corporis perferendis, tempore reprehenderit optio quas in possimus commodi temporibus ut dicta magnam illo beatae delectus?</p>
                </div>
            </div>
        
    </div>
</section>


</body>
<footer  id="footer">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
<a href="" target="_blank" class="btn btn-outline-light"> <i class="icon-youtube-play"></i></a>
<a href="" target="_blank" class="btn btn-outline-light"> <i class="icon-phone"></i></a>
<a href="" target="_blank" class="btn btn-outline-light"> <i class="icon-heart"></i></a>
<a href="" target="_blank" class="btn btn-outline-light"> <i class="icon-github-circled"></i></a>
<a href="" target="_blank" class="btn btn-outline-light"> <i class="icon-mobile"></i></a>
<a href="" target="_blank" class="btn btn-outline-light"> <i class="icon-paper-plane"></i></a>
<a href="" target="_blank" class="btn btn-outline-light"> <i class="icon-vkontakte"></i></a>
      </div>
    </div>  </div>
</footer>
<script src="js/bootstrap.bundle.min.js"></script>

</html>