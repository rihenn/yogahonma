<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

    <title>Yogahonma</title>
</head>

<body>
    <div id="searchCard">
        <div class="card1" style="display: none;" id="card">
            <div class="card-body ">
                <div class="d-flex col justify-content-center aling-items-center" style="height: 7rem">
                <input type="search" class="text-center aling-items-center m-4 bg-color1" style="width: 60%;outline: none;border:none;border-bottom: 3px #4FA095 solid; font-size: 32px;color:#BAD1C2;font-family: Arial, Helvetica, sans-serif" placeholder="Ara...">

                </div>
            </div>
        </div>
    </div>


    <header class="bg-transparent fixed-top header" id="header">
        <div class="d-flex col-12" name="logo">
            <div style="background: white;border-radius: 100%;padding: 0;">
            <a href="#">
                <img src="logo.png" class="logo-header" style="margin:0;">
            </a>
            </div>
            <div class="d-flex col-11 align-items-center mt-2">


                <div class="d-flex col-10 justify-content-start">

                    <div class="dropdown  text-start ms-4 me-3">
                        <a class=" dropdown-toggle text-decoration-none txt " name="limk1" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                          Yoga
                        </a>

                        <ul class="dropdown-menu bg-color4" aria-labelledby="dropdownMenuLink">
                          <li><a class="dropdown-item dropDownPlates" href="#">Yoga</a></li>
                          <li><a class="dropdown-item dropDownPlates" href="#">Hamak Yogası</a></li>
                          <li><a class="dropdown-item dropDownPlates" href="#">Hamile Yogası</a></li>
                          <li><a class="dropdown-item dropDownPlates" href="#">Çocuk Yogası</a></li>
                        </ul>
                      </div>

                    <a href="#" class="text-decoration-none txt  text-start me-3" name="limk2">Plates</a>
                    <a href="#" class="text-decoration-none txt  text-start me-3" name="limk3">Tedavi</a>
                    <a href="#" class="text-decoration-none txt  text-start me-3" name="limk4">Kadınlara Özel</a>

                </div>


                <div class="d-flex col-2 justify-content-end">
                    <a href="#"><img id="shop" src="shop-icon.png" width="32" height="32" class=" me-3"></a>
                    <a href="#" id="search"><img id="search1" src="search.png" width="32" height="32" class=" me-3"></a>

                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="user.png" id="user" alt="mdo" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small shadow">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </header>

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active resim-container" data-bs-interval="10000">

            <img src="plates1.jpg" class="d-block w-100 carousel-img" alt="...">

            <div class="carousel-caption d-none d-md-block">
              <h5 class="imgText" >First slide label</h5>
              <p class="imgText">Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item resim-container" data-bs-interval="2000">
            <img src="plates2.jpg" class="d-block w-100 carousel-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="imgText">Second slide label</h5>
              <p class="imgText">Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item resim-container">
            <img src="plates3.jpg" class="d-block w-100 carousel-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="imgText">Third slide label</h5>
              <p class="imgText">Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>

    </div>
    </div>
    <div class="row m-4 p-4">
        <div class="d-flex col justify-content-center m-4 p 4">
            <h1 class="text-center">YOGAHAMSA</h1>
        </div>
        <hr class="my-4">
        <p class="home-info">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga, ex fugiat, perspiciatis
            veniam quisquam deleniti voluptates id magni autem asperiores eaque repudiandae quibusdam error, nam
            explicabo sit nobis? Provident, vel. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Necessitatibus laudantium, impedit praesentium hic est libero. Nesciunt dicta exercitationem, blanditiis,
            provident rerum quod itaque necessitatibus magnam, odio porro nam. Saepe, fugiat? Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Eligendi, necessitatibus quo eius ab cumque optio perspiciatis. Accusamus
            pariatur veniam molestias odio esse, nesciunt doloribus optio quam obcaecati deleniti nemo voluptates?
            Voluptatem officiis quos cum vero, alias laborum deserunt incidunt nihil eligendi dolore quae suscipit eius
            quidem. Ex, eius? Veniam reprehenderit vero nisi. Earum, quaerat! Facere libero ab natus odit repudiandae.
            Cupiditate, obcaecati vero! Modi neque culpa quod voluptas officia earum delectus rem doloremque, voluptate
            ipsam illum repellendus, sequi repudiandae, error ullam vitae sapiente reprehenderit? Consectetur facere
            rerum provident quidem voluptate.
            Deleniti pariatur similique et ipsum iure, aperiam quibusdam eligendi beatae ullam quas cupiditate modi!
            Dolore incidunt similique rerum est natus, facilis totam sed nobis? Consequuntur obcaecati architecto
            perferendis cupiditate at?</p>
        <p class="home-info">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo eum et quam voluptatibus
            aut, molestias fugit, aspernatur voluptas, hic debitis distinctio mollitia ab quibusdam tempore. Eligendi
            consequuntur optio ex ab?Quis tenetur sint beatae illum tempora non doloremque nihil corrupti ea quos quo
            reprehenderit fuga, saepe dolorem rem voluptatum iste amet, blanditiis temporibus inventore neque
            laudantium? Aperiam aliquam in explicabo.</p>
        <p class="home-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis ratione soluta nobis quidem
            placeat saepe, quasi doloremque ullam similique atque porro dolore ut aliquid corrupti ducimus corporis odio
            perferendis molestiae!</p>
        <div class="d-flex col justify-content-center m-4 p 4">
            <a href="" class="btn bg-color1 color4 ">Atölyeyi Keşfet</a>
        </div>


    </div>
    <div class="row m-4 p-4 col justify-content-center">
        <div class="d-flex col justify-content-center m-4 p 4">
            <h1 class="text-center">Herkes Yoga Yapabilir</h1>
        </div>
        <hr class="my-4">
        <div class="card m-4" style="width: 18rem;">
            <img src="add.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title text-center color1">Card title</h4>
                <p class="card-text text-center color1">Some quick example text to build on the card title and make up
                    the bulk of the card's content.</p>
                <a href="#" class="btn bg-color3 color2 ms-5 card-btn">Go somewhere</a>
            </div>
        </div>


        <div class="card m-4" style="width: 18rem;">
            <img src="lotus.png" class="card-img-top" alt="...">
            <div class="card-body ">
                <h4 class="card-title text-center color1">Card title</h4>
                <p class="card-text text-center color1">Some quick example text to build on the card title and make up
                    the bulk of the card's content.</p>
                <a href="#" class="btn bg-color3 color2 ms-5 card-btn">Go somewhere</a>
            </div>
        </div>
    </div>
    </div>
    <div class="d-flex col justify-content-center" >
        <img src="plates4.jpg" style="width: 60%" alt="" >
    </div>

    <div class="foother login">
        <div class="row col  aling-item-start ms-4 ">
            <div class="row col-3">
                <img src="plates5.jpg" alt="" style=" border-radius: 10%;">
            </div>
            <div class="flex col-5 justify-content-start ">
                <h2>EN YENİ GELİŞMELER</h2>
                <h4>için kaydolun size haber verelim en yeni gelişmelerden haberdar olmak için...</h4>
            </div>

            <div class="flex col-4 justify-content-end ms-4">
                <div class="flex col justify-content-end ms-4">
                    <form action="#">
                        <input type="text" class="row text-center login-input" placeholder="your name">

                        <input type="text" class="row text-center login-input  mt-4" placeholder="your mail">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-4">

    <div class="row col foother-margin r" style="position: absolite;">
        <div class="row col-9 justify-content-center">
            <div class="flex col-3">
            <h3>KURUMSAL</h3>
                <ul>
                    <li> <a href="#" class="text-decoration-none color1" style="font-size: 22px">Neden Yogahamsa ?</a></li>
                    <li> <a href="#" class="text-decoration-none color1" style="font-size: 22px">Vizyon ve Misyon</a></li>
                    <li> <a href="#" class="text-decoration-none color1" style="font-size: 22px">Gizlilik ve Güvenlik Politikası</a></li>
                    <li> <a href="#" class="text-decoration-none color1" style="font-size: 22px">Çerez Yönetimi</a></li>
                    <li> <a href="#" class="text-decoration-none color1" style="font-size: 22px">Hakkımızda</a></li>
                </ul>
            </div>
            <div class="flex col-3 ms-3">
            <h3>ÜYRLİK VE SİPARİŞLER</h3>
                <ul>
                    <li> <a href="#" class="text-decoration-none color1" style="font-size: 22px">Üye Girişi</a></li>
                    <li> <a href="#" class="text-decoration-none color1" style="font-size: 22px">Yeni Üyelik</a></li>
                    <li> <a href="#" class="text-decoration-none color1" style="font-size: 22px">Siparişlerim</a></li>
                    <li> <a href="#" class="text-decoration-none color1" style="font-size: 22px">KVKK Kanunu Aydınlatma Metni</a></li>
                    <li> <a href="#" class="text-decoration-none color1" style="font-size: 22px">Mesafeli Satış Sözleşmesi</a></li>
                    <li> <a href="#" class="text-decoration-none color1" style="font-size: 22px">İade Şartları</a></li>
                    <li> <a href="#" class="text-decoration-none color1" style="font-size: 22px">İletişim</a></li>
                </ul>
            </div>
        </div>
        <div class="flex col-3 ms-4">
            <div class="d-flex ms-4 mt-4">
                <a href="" class="btn btn-foother"><img src="instagram.png" alt=""></a>
                <a href="" class="btn btn-foother"><img src="facebook-app-symbol.png" alt=""></a>
                <a href="" class="btn btn-foother"><img src="youtube.png" alt=""></a>
            </div>
            <div class="d-flex justify-conten-center">
                <img src="logo.png" style="width: 200px;height: auto;position: absolite;" alt="">
            </div>
        </div>
    </div>
    <div class="overlay" id="overlay"></div>

    <script>
         var user1 = "user1.png";
         var search1 = "search1.png";
         var shop1 = "shop-icon1.png";
         var user = "user.png";
         var search = "search.png";
         var shop = "shop-icon.png";

        $(document).ready(function() {
            var navbar = $("#header");

            $(window).scroll(function() {

                if ($(this).scrollTop() > 50) {
                    navbar.addClass("bg-color5");
                    $('#header a').addClass("color4");

                    document.getElementById("shop").setAttribute("src", shop1);
                    document.getElementById("search1").setAttribute("src", search1);
                    document.getElementById("user").setAttribute("src", user1);

                    navbar.removeClass("bg-transparent");
                    $('#header a').removeClass("color6");
                } else {
                    navbar.addClass("bg-transparent");
                    $('#header a').addClass("color6");
                    document.getElementById("shop").setAttribute("src", shop);
                    document.getElementById("search1").setAttribute("src", search);
                    document.getElementById("user").setAttribute("src", user);
                    navbar.removeClass("bg-color5");
                    $('#header a').removeClass("color4");
                }
            });


        });
        $(document).ready(function() {

            $(".card1").animate({
                top: 0
            }, 1000);
        });
        $(document).ready(function() {
            $("#search").click(function() {

                $("#overlay").show().addClass("blur");
                document.getElementById("card").setAttribute("style", "display: block;");
                $("#card").animate({
                    top: 0
                }, 1000);
            });

            $(document).on("click", function(event) {
    if (!$(event.target).closest("#card, #search").length) {
      $("#card").hide();
      $("#overlay").hide().removeClass("blur");
    }
  });

  // Kartın içindeki elemanlara tıklama olayını engellemek için
  $("#card").on("click", function(e) {
    e.stopPropagation();
  });
        });


    </script>

</body>

</html>
