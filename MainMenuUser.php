<!DOCTYPE html>
<html>
<head>
    <title>TindahanPH</title>
    <link rel="stylesheet" href="MainMenuStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

</head>
<body>

    <!-- Slide show Advertisement-->
    <div class="slideshow">

        <div class="swiper">
  
            <div class="swiper-wrapper">

                <div class="swiper-slide"><img src="PATOK(1).PNG" /></div>
                <div class="swiper-slide"><img src="PATOK(2).PNG" /></div>
                <div class="swiper-slide"><img src="PATOK(3).PNG" /></div>

            </div>

            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>


    </div>

    <!-- MAKABAYANG PRESYO-->
    <div id="makabayang_presyo_border">
        
        <p> </p>
        
    </div>

    <div id="makabayang_presyo">
        
        <p> </p>
        
    </div>

    <span id="title1">MAKABAYANG</span> <span id="title2">PRESYO!</span>

    <a id="duyan_href" href="">

        <img id="duyan_pic" src="duyan.png" />

    </a>

    <a id="bayong_href" href="">

        <img id="bayong_pic" src="bayong.png" />

    </a>

    <a id="kwintas_href" href="">

        <img id="kwintas" src="kwintas.png" />

    </a>

    <a id="salakot_href" href="">

        <img id="salakot" src="salakot.png" />

    </a>

    <div id="UserName">

    </div>

    <!-- Top Menu Bar-->
    <img id="hlp_logo" src="help_log.png" />

    <a id="help" href="">
        
        <span>Help</span>

    </a>

    <div id="UserName">

    <?php
        
        session_start();
        echo "Welcome Back ".$_SESSION['Username'];

	?>

    </div>
    
    <a id="logout" href="MainMenu.php">

        <span>Log</span> <span>Out</span>

    </a>

    <a href=""><img id="search_logo" src="search_logo.png" /></a>

    <input id="search" type="text" name="username">

    <a href=""><img id="twitter" src="twitter_log.png" /></a>

    <a href=""><img id="fb" src="fb_logo.png" /></a>

    <div id="social_media">

        <span>Follow</span> <span>Us</span> <span>On</span>

    </div>

    <p id="slash_border">|</p>
    <p id="slash_border2">|</p>
    <p id="slash_border4">|</p>

    <a id="about_us" href="">
        
        <span>About</span> <span>Us</span>

    </a>

    <a id="start_selling" href="SellSignUp.php">
        
        <span>Start</span> <span>Selling</span>

    </a>

    <img id="sun" src="sun.png" />

    <div id="MainMenu">

        <span id="tindahan">Tindahan</span><span id="PH">PH</span>

    </div>


<!--Javascript Slider-->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>

    const swiper = new Swiper('.swiper', {

    loop: true,

    pagination: {
        el: '.swiper-pagination',
        },


    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },

    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
        },

    });

</script>

</body>
</html>