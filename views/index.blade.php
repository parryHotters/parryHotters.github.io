<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Feliz cumpleaños - Mi Pame</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="assets/img/pastelicon.jpeg" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="/assets/css/main.css" rel="stylesheet">

</head>

<body>
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="" class="logo d-flex align-items-center">
                <h1>LOGO<span>.</span></h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#" class="active">Inicio</a></li>
                    <li><a href="#felicitaciones">Feliz Cumpleaños</a></li>
                    <li><a href="#love">Love</a></li>
                    <li><a href="/felicitar">Felicitar</a></li>
                </ul>
            </nav>

        </div>
    </header>
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 data-aos="fade-down">Feliz Cumpleaños <span>Pamela Siboney Albino Medina</span></h2>
                        <p data-aos="fade-up">Para: Mi luna de Octubre. De: Tu Brissyla
                        </p>
                        <a data-aos="fade-up" data-aos-delay="200" href="#felicitaciones"
                            class="btn-get-started">Felicidades</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active"
                style="background-image: url(/assets/img/hero-carousel/payo.jpeg)">
            </div>
            <div class="carousel-item" style="background-image: url(/assets/img/hero-carousel/payo.jpeg)">
            </div>
            <div class="carousel-item" style="background-image: url(/assets/img/hero-carousel/payo.jpeg)">
            </div>
            <div class="carousel-item" style="background-image: url(/assets/img/hero-carousel/payo.jpeg)">
            </div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

        <main id="main">
            <section id="felicitaciones" class="testimonials section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h2>Felicitaciónes</h2>
                    </div>

                    <div class="slides-2 swiper">
                        <div class="swiper-wrapper">

                            @foreach ($congra as $c)
                                <div class="swiper-slide ">
                                    <div class="testimonial-wrap ">
                                        <div class="testimonial-item ">
                                            @if ($c->img == null)
                                                <img src="/assets/img/felicitaciones/no-img.jpeg"
                                                    class="testimonial-img" alt="">
                                            @else
                                                <img src="/assets/img/felicitaciones/{{ $c->img }}"
                                                    alt="" width ="200" >
                                            @endif

                                            <h3 class="mayus">{{ $c->name }}</h3>
                                            <h4>{{ $c->identificador }}</h4>
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                {{ $c->description }}
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </section>
            <section id="love" class="features section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h2>Love</h2>
                    </div>

                    <ul class="nav nav-tabs row  g-2 d-flex">

                        <li class="nav-item col-3">
                            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                                <h4><b>D</b>istraida</h4>
                            </a>
                        </li>

                        <li class="nav-item col-3">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                                <h4><b>S</b>oñadora</h4>
                            </a>

                        <li class="nav-item col-3">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                                <h4><b>F</b>uerte</h4>
                            </a>
                        </li>

                        <li class="nav-item col-3">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                                <h4><b>M</b>i amor</h4>
                            </a>
                        </li>

                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row">
                                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                                    data-aos="fade-up" data-aos-delay="100">
                                    <h3>Sos Distraida</h3>
                                    <p>
                                    Al decirte que te definas en pocas palabras, una de ellas fue 'distraída' y sí, a veces hasta se te olvida 
                                    lo preciosa que sos. Cuando estamos hablando y te distraes, te observo a detalle: cada gesto, cada movimiento,
                                    y no puedo creer que se te olvide lo bonita que sos. 
                                    No te preocupes, que yo siempre estaré para recordártelo en cada momento, me encanta cuando sentis mi mirada en vos 
                                    y fingis no darte cuenta para luego no aguantar y sonreir como me gusta que lo hagas, verte sonreir me da más vida mi Pame.
                                    </p>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up"
                                    data-aos-delay="200">
                                    <img src="/assets/img/foto.jpeg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-2">
                            <div class="row">
                                <div
                                    class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                    <h3>Sos soñadora</h3>
                                    <p>
                                        Tu segunda palabra fue soñadora, me gusta que seas una soñadora, porque eso significa que nunca te conformas con lo ordinario. Tu imaginación es tu mayor fortaleza, 
                                        y me siento afortunada de ser parte de tus sueños. Ya que el tiempo que llevamos juntas te e visto esforzarte por lo que queres sin importar nada más y lo que te propones
                                        lo conseguis y yo esteare apoyandote para que lo sigas haciendo mi amor.
                                    </p>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2 text-center">
                                    <img src="/assets/img/foto.jpeg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-3">
                            <div class="row">
                                <div
                                    class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                    <h3>Sos fuerte</h3>
                                    <p>
                                    Por problemas técnicos, ya no me dijiste más palabras, así que yo agregaré: fuerte. 
                                    No solo porque se te pueda definir en solo tres palabras, claro que no, sino que sos mucho más. 
                                    Agrego 'fuerte' porque, a pesar de lo que has pasado, no eres una mala persona y has sabido seguir 
                                    adelante a pesar de todo. 
                                    Yo te admiro por eso y estoy orgullosa de vos por lo que sos y lo que haces, mi Siboney.
                                    </p>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2 text-center">
                                    <img src="/assets/img/chiquita.jpeg" alt="" class="img-fluid" >
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-4">
                            <div class="row">
                                <div
                                    class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                    <h3>Mi amor</h3>
                                    <p>
                                    Por último, quiero agregar que sos mi amor, Pamela. Ya es el quinto cumpleaños que celebro a tu lado, y de esos cinco, cuatro han sido como tu novia. 
                                    Te doy gracias por todo lo que me has dado y por la felicidad que me brindas. Sos muchas cosas para mí, y hoy en tu cumpleaños celebro no solo el día que naciste, 
                                    sino cada momento que hemos compartido juntas. Sos el regalo más preciado que la vida me ha dado.Fue un gusto te amo, siempre sera un sí mi amor... hasta la otra vida
                                        
                                    </p>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2 text-center">
                                    <img src="/assets/img/payo.jpeg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <footer id="footer" class="footer">
            <div class="footer-content position-relative">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-6">
                            <div class="footer-info">
                                <h3>BGMB</h3>
                             
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-3 footer-links">

                        </div>

                        <div class="col-lg-2 col-md-3 footer-links">
                            <h4>Links</h4>
                            <ul>
                                <li><a href="#" class="active">Inicio</a></li>
                                <li><a href="#felicitaciones">Feliz Cumpleaños</a></li>
                                <li><a href="#love">Love</a></li>
                                <li><a href="/felicitar">Felicitar</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-2 col-md-3 footer-links">

                        </div>

                        <div class="col-lg-2 col-md-3 footer-links">

                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-legal text-center position-relative">
                <div class="container">
                    <div class="copyright">
                        &copy; Copyright <strong><span>YOLO</span></strong>. All Rights Reserved
                    </div>
                 
                </div>
            </div>

        </footer>

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <div id="preloader"></div>

        <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/vendor/aos/aos.js"></script>
        <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="/assets/vendor/php-email-form/validate.js"></script>

        <script src="/assets/js/main.js"></script>

</body>

</html>
