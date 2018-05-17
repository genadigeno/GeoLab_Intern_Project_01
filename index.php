<?php session_start(); ?>
<?php
 spl_autoload_register(function ($className){
     include "classes/".$className.".php";
 });
?>

<?php $guest = new Guest(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- =====style===== -->
    <link rel="stylesheet" href="style/scss/main.css">

    <!-- =====fontawesome===== -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">

    <!-- =====bootstrap===== -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

</head>
<body>
    
    <!-- =====header===== -->
    <header id="heder">
        <div class="main-container">
            <div class="logo-nav-container">
                <div class="logotype">
                    <h1 id="logotype">AU<span id="logotypeCircle"></span>TO</h1>
                </div>
                <div class="nav-menu">
                    <div class="nav-menu-btn">
                        <span id="line1" class="togglemenubtn colorwhite"></span>
                        <span id="line2" class="togglemenubtn colorwhite"></span>
                        <span id="line3" class="togglemenubtn colorwhite"></span>
                    </div>
                </div>
                <nav id="nav">
                    <div class="nav-container">
                        <ul>
                            <li><a href="#heder">HOME</a></li>
                            <li><a href="#sec1">SERVICES</a></li>
                            <li><a href="#sec2">CONTACT</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="main-slider">
                <div class="slider-container">
                    <span></span><span></span>
                    <span></span><span></span>
                    <span></span><span></span>
                    <span></span><span></span>
                    <span></span><span></span>
                    <div class="slider1">
                        <?php foreach ($guest->getSlider() as $slider) { ?>
                            <div class="my-slides fades">
                                <img src="images/<?=$slider['filename'];?>" alt="">
                                <div class="slide-text">
                                    <h1><?=$slider['date'];?></h1>
                                    <h2><?=$slider['name'];?></h2>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="btnPrev"  onclick="PlusSlides(-1)"><i class="fas fa-arrow-left"></i></div>
                        <div class="btnNext"  onclick="PlusSlides(1)"><i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- =====content===== -->
    <main>
        <section id="sec1">
            <div class="main-container">
                <h1>The corner garage for collector cars</h1>

                <div class="row">
<!--                                        Dynamic Part                                            -->
                    <?php foreach ($guest->getServices() as $service) { ?>
                    <div class="col-12 col-md-4">
                        <div class="main-icon-block">
                            <div class="main-icon">
                                <img src="images/<?=$service['filename'];?>" alt="" width="120">
                                <h4><?=$service['title'];?></h4>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

<!--                    <div class="col-12 col-md-4">-->
<!--                        <div class="main-icon-block">-->
<!--                            <div class="main-icon">-->
<!--                                <img src="images/icon1.png" alt="" width="120">-->
<!--                                <h4>modify</h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-12 col-md-4">-->
<!--                        <div class="main-icon-block">-->
<!--                            <div class="main-icon">-->
<!--                                <img src="images/icon2.png" alt="" width="120">-->
<!--                                <h4>buy</h4>-->
<!--                            </div>-->
<!--                        </div>  -->
<!--                    </div>-->
<!--                    <div class="col-12 col-md-4">-->
<!--                        <div class="main-icon-block">-->
<!--                            <div class="main-icon">-->
<!--                                <img src="images/icon3.png" alt="" width="120">-->
<!--                                <h4>repair</h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

                </div>
            </div>
            <div class="car-img">
                <img src="images/img2.png" class="f" alt="" width="100%">
                <img src="images/animation.png" alt="" class="animationCar" width="100%">
            </div>
        </section>

        <!-- =====contant===== -->
        <section id="sec2">
            <div class="container">
                <div class="main-container">
                    <div class="main-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2978.4797566897323!2d44.76872325618902!3d41.71016532641434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40447332f1e7c201%3A0xf8f410f66ae6f91f!2z4YOS4YOQ4YOj!5e0!3m2!1sen!2sge!4v1526232596062" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="main-contact">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-4 col-order">
                                <div class="main-social-block">
                                    <h1>contact information</h1>
                                    <h2>click to view</h2>
                                    <div class="main-social-icon">

<!--                                        Dynamic Part                                            -->
                                        <?php foreach ($guest->getSocial() as $social) { ?>
                                            <div class="ficons">
                                                <a href="<?=$social['url'] ?>"><i class="fab fa-<?=$social['className'] ?>"></i></a>
                                            </div>
                                        <?php } ?>
<!--                                        <div class="ficons">-->
<!--                                            <i class="fab fa-google-plus-g"></i>-->
<!--                                        </div>-->
<!--                                        <div class="ficons">-->
<!--                                            <i class="fab fa-facebook-f"></i>-->
<!--                                        </div>-->
<!--                                        <div class="ficons">-->
<!--                                            <i class="fab fa-twitter"></i>-->
<!--                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-8 col-color">
                                <div class="main-form">
                                    <h1>get in touch</h1>
                                    <form action="form" id="form">
                                        <div class="main-input">
                                            <input type="name" name="name" placeholder="name" required>
                                            <br><br>
                                            <input type="email" name="email" placeholder="email" required>
                                            <br><br>
                                            <input type="subject" name="subject" placeholder="subject" required>
                                            <br><br>
                                            <div class="textarea">
                                                <textarea name="text" id="" cols="30" rows="10" placeholder="text" required></textarea>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="main-checkox-radio">
                                            <div class="main-radio">
                                                <label class="male radiobutton">male
                                                    <input type="radio" name="f1" required>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="fmale radiobutton">fmale
                                                    <input type="radio" name="f1" required>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="main-checkox-block">
                                                <h4>sing up for newsletter</h4>
                                                <label class="main-checkbox">recive images
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="main-checkbox">recive promotions
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="main-checkbox">recive updates
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="main-checkbox">recive job offers
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <span class="message"></span>
                                        <button>send</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="main-footer">
        <div class="main-footer-container">
            <div class="container">
                <div class="main-created">
                    <span>© copyright 2018</span>
                    <span>created by: Levan Changelia & Geno Mumladze</span>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- =====jquery===== -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="js/jquery.validate.min.js"></script>

    <!-- =====mainJs===== -->
    <script src="js/main.js"></script>
</body>
</html>