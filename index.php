<?php $page_name = "Home" ?>
<?php require("includes/header.php") ?>
<header class="mt-5 container-fluid">
    <div class="text-center row">
        <div class="masking main">
            <div id=" carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-interval="1000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/landing-carousel/kava-pour-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/landing-carousel/kava-pour-2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/landing-carousel/kava-pour-3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5 overlay">
            <h4 class="my-5 landing-heading neonText">WELCOME TO DAVIE KAVA!</h4>
            <img src="img/logo/davie-kava-logo-no-bg.png" alt="..." class="mb-5 w-25 h-25"><br>
            <a href="#bula">
                <button class="btn btn-lg btn-outline neonFlickerText" role="button">
                    <i class="bi bi-arrow-down-circle"></i> SHELLS UP!
                </button>
            </a>
        </div>
    </div>
</header>
<div class="container mt-5">

    <!--Shells Up/Bula-->
    <section id="bula" class="scroll-container text-center pt-5 w-100">
        <div class="scroll-element js-scroll fade-in-bottom">
            <h3 class="heading neonText">BULA!</h3>
            <div class="bg-image-bula" style="height:400px;">
                <div class="p-5" style="background-color: rgba(0, 0, 0, 0.6);height:400px;">
                    <div class="h-100 d-flex justify-content-center align-items-center">
                        <h4 class="heading">South Florida's #1 Kava Bar!</h4>
                    </div>
                </div>
            </div>
    </section>

    <!--Weekly Events-->
    <section class="scroll-container text-center mt-5 w-100">
        <h3 class="heading neonText">Weekly Events</h3>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="1000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/landing-carousel/kava-pour-1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.6);">
                        <h5>
                            TUESDAYS are LADIES NIGHTS, TRIVIA, & SOUND HEALING
                        </h5>
                        <p>
                            Ladies Night is Every Tuesday from 7 pm - Close.<br>

                            Every 1st & 3rd Tuesday is Trivia Night hosted by @eddie.trivia.<br>

                            Sound Healing by Austin and Vrish of @project.equilibrium is every Tuesday at 10 pm. Session is free, but tips are appreciated and encouraged.<br>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/landing-carousel/kava-pour-2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.6);">
                        <h5>
                            WEDNESDAYS are KARAOKE / OPEN MIC NIGHTS
                        </h5>
                        <p>
                            Karaoke is every 1st & 3rd Wednesday from 8 pm - 11 pm.<br>

                            Open Mic is every 2nd & 4th Wednesday from 8 pm - 11 pm.<br>

                            To sing karaoke - text 954-418-2085 - include your name, the artist, & song you would like to sing.<br>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/landing-carousel/kava-pour-3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.6);">
                        <h5>
                            THURSDAYS are VIDEO GAME TOURNAMENT NIGHTS
                        </h5>
                        <p>
                            Mario Kart Tournaments are every 1st & 3rd Wednesday from 8 pm - 11 pm.<br>

                            Smash Bros Tournaments are every 2nd & 4th Wednesday from 8 pm - 11 pm.<br>

                            TOURNAMENT WINNERS EARN THEIR NAME ON THE TROPHY FOR THE WEEK & A PITCHER OF HAPPY TEA.<br>

                            If a 5th Wednesday occurs, it is an open play night of Mario v. Sonic Olympics & Mario Party Superstars.<br>
                        </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!--Menu-->
    <section id="menu" class="mt-5">
        <div class="py-5 scroll-element js-scroll fade-in-bottom text-center">
            <h3 class="heading neonText">Our Menu</h3>
            <div class="bg-image-menu">
                <div class="p-5" style="background-color: rgba(0, 0, 0, 0.6)">
                    <div class="h-100">
                        <div class="row">
                            <img src="img/shells/kava-shell-no-bg.png" alt="" class="col-lg-4 img-fluid">
                            <img src="img/shells/kava-shell-no-bg.png" alt="" class="col-lg-4 img-fluid">
                            <img src="img/shells/kava-shell-no-bg.png" alt="" class="col-lg-4 img-fluid">
                        </div>
                        <div class="mt-5">
                            <h4 class="mb-3">Check Out Our Full Menu!</h4>
                            <a class="btn neonFlickerText" href="menu.php" role="button">Click Here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--About-->
    <section id="about" class="mt-5">
        <div class="py-5 text-center scroll-element js-scroll fade-in-bottom">
            <h3 class="heading neonText py-3">What is Kava?</h3>
            <h4 class="py-3">To Learn More About Us</h4>
            <a class="btn neonFlickerText py-3" href="about.php" role="button">Click Here</a>
        </div>
    </section>

    <!--Clover/Eventbrite-->
    <section id="promos&events" class="mt-5">
        <div class="py-5 text-center scroll-element js-scroll fade-in-bottom">
            <h3 class="heading neonText py-3">Promotions and Special Events</h3>
            <div class="row">
                <div class="col-lg-4">
                    <img src="img/logo/clover.jpg" alt="" class="rounded img-fluid">
                    <h4 class="neonTextGreen py-3">Clover</h4>
                    <p>
                        Download the Clover App and find our great deals and promotions there!
                    </p>
                    <a class="btn neonFlickerText py-3" href="https://apps.apple.com/us/app/clover/id428620381" target="_blank" role="button">IOS</a>
                    <a class="btn neonFlickerText py-3" href="https://play.google.com/store/apps/details?id=com.getperka.android&gl=US" target="_blank" role="button">Android</a>
                </div>
                <div class="col-lg-4 ms-auto">
                    <img src="img/logo/eventbrite.png" alt="" class="rounded img-fluid">
                    <h4 class="neonTextOrange py-3">Eventbrite</h4>
                    <p>
                        Download the Eventbrite App to see and sign up for all our upcoming events!
                    </p>
                    <a class="btn neonFlickerText py-3" href="https://apps.apple.com/us/app/eventbrite/id487922291" target="_blank" role="button">IOS</a>
                    <a class="btn neonFlickerText py-3" href="https://play.google.com/store/apps/details?id=com.eventbrite.organizer&gl=US" target="_blank" role="button">Android</a>
                </div>
            </div>

    </section>

    <?php require("includes/footer.php") ?>
</div>