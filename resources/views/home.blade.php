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
            <a href="#">
                <img src="logo.png" class="logo-header" style="margin:0;">
            </a>
            <div class="d-flex col-11 align-items-center mt-2">


                <div class="d-flex col-10 justify-content-start">
                    <a href="#" class="text-decoration-none txt color4 text-start ms-4 me-3">Yoga</a>
                    <a href="#" class="text-decoration-none txt color4 text-start me-3">Plates</a>
                    <a href="#" class="text-decoration-none txt color4 text-start me-3">Tedavi</a>
                    <a href="#" class="text-decoration-none txt color4 text-start me-3">Atölye+Kurs</a>
                    <a href="#" class="text-decoration-none txt color4 text-start me-3">Öğretmenler</a>
                    <a href="#" class="text-decoration-none txt color4 text-start me-3">Atölye+Kurs</a>
                </div>


                <div class="d-flex col-2 justify-content-end">
                    <a href="#"><img src="shop-icon.png" width="32" height="32" class=" me-3"></a>
                    <a href="#" id="search"><img src="search.png" width="32" height="32" class=" me-3"></a>

                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="user.png" alt="mdo" width="32" height="32" class="rounded-circle">
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



    <div class="carousel-inner ">
        <div class="carousel-item active">
            <img src="plates1.jpg" class="d-block w-100 carousel-img" alt="...">

            <div class="carousel-caption d-none d-md-block">
                <h2>First slide label</h2>
                <h3>Some representative placeholder content for the third slide.</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img src="plates2.jpg" class="d-block w-100 carousel-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2>Second slide label</h2>
                <h3>Some representative placeholder content for the third slide.</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img src="plates3.jpg" class="d-block w-100 carousel-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2>Third slide label</h2>
                <h3>Some representative placeholder content for the third slide.</h3>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

    </div>
    </div>
    <div class="row m-4 p-4">
        <div class="d-flex col justify-content-center m-4 p 4">
            <h1 class="text-center">Londra Yoga</h1>
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
    <div class="d-flex col justify-content-center">
        <img src="plates4.jpg" style="width: 60%" alt="">
    </div>

    <div class="foother login">
        <div class="row col  aling-item-start ms-4 ">
            <div class="flex col-5 justify-content-start ">
                <h2>EN YENİ GELİŞMELER</h2>
                <h4>için kaydolun size haber verelim en yeni gelişmelerden haberdar olmak için...</h4>
            </div>

            <div class="flex col-6 justify-content-end ms-4">
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

    <div class="row col foother-margin">
        <div class="flex col-8">
            <h3>HAKKIMIZDA</h3>
            <H5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore, facilis maiores! Sed tempore
                corrupti sunt reprehenderit, odio aliquam similique obcaecati accusantium minima nam. Dolore, harum
                dolorum nobis voluptatem quae assumenda.
                Numquam nesciunt blanditiis dolores fuga, accusamus, laudantium at ab reprehenderit, est animi sapiente
                vel non modi tempore repellendus? Officia labore eius repellendus consequuntur recusandae perspiciatis
                numquam dicta hic libero nisi.
                Laboriosam nihil alias enim sed. Dolores ab temporibus delectus fuga in, dignissimos necessitatibus
                harum, ipsam nemo laboriosam maiores magni, aperiam commodi quasi iusto quo? Voluptatibus eos ut sed
                atque aliquid.
                Repudiandae architecto mollitia atque. Consectetur iste nesciunt ipsum, inventore delectus quidem minus
                excepturi ad quia, quisquam voluptatum velit enim a hic deserunt voluptatibus sed! Nostrum minus
                voluptatum iure vel qui.</H5>
        </div>
        <div class="flex col-3">
            <div class="d-flex ms-4 mt-4">
                <a href="" class="btn btn-foother"><img src="instagram.png" alt=""></a>
                <a href="" class="btn btn-foother"><img src="facebook-app-symbol.png" alt=""></a>
                <a href="" class="btn btn-foother"><img src="youtube.png" alt=""></a>
            </div>
            <div class="d-flex">
                <img src="logo.png" style="width: 400px;height: auto" alt="">
            </div>
        </div>
    </div>
    <div class="overlay" id="overlay"></div>

    <script>
        $(document).ready(function() {
            var navbar = $("#header");

            $(window).scroll(function() {

                if ($(this).scrollTop() > 50) {
                    navbar.addClass("bg-color1");
                    navbar.removeClass("bg-transparent");
                } else {
                    navbar.addClass("bg-transparent");
                    navbar.removeClass("bg-color1");
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
                console.log("merhaba dünya");
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
