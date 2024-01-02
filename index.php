<?php $page_name = "Home" ?>
<?php require("includes/header.php") ?>
<header class="mt-5 container-fluid">
    <div class="text-center row">
        <div class="masking main">
            <div id=" carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-interval="1000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/landing-carousel/kava-1.png" class="d-block w-100 h-100"  alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/landing-carousel/kava-2.png" class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/landing-carousel/kava-3.png" class="d-block w-100 h-100" alt="...">
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
    <section id="bula" class="text-center pt-5 w-100">
            <h3 class="heading neonText pt-5">BULA!</h3>
            <div class="bg-image-bula" style="height:400px;">
                <div class="p-5" style="background-color: rgba(0, 0, 0, 0.6);height:400px;">
                    <div class="h-100 d-flex justify-content-center align-items-center">
                        <h4 class="heading">South Florida's #1 Kava Bar!</h4>
                    </div>
                </div>
            </div>
    </section>

    <!--Weekly Events-->
    <section class=" text-center mt-5 w-100">
        <h3 class="heading neonText pt-5">Weekly Events</h3>
        <div class="py-5">
            <p><span class="neonText">MONDAY</span> - Bad Movie Night (Followed by Trivia) 8 p.m. - 10:30 p.m.</p>
            <p><span class="neonText">TUESDAY</span> - Ladies Night 7 p.m. - 1 a.m.</p>
            <p><span class="neonText">WEDNESDAY</span> - Open Mic Hosted by James 8 p.m. - 11 p.m.</p>
            <p><span class="neonText">THURSDAY</span> - Video Game Tournament Rotating (Every 1st & 3rd) Smash Bros. (Every 2nd & 4th) 8 p.m. - 11 p.m.</p>
            <p><span class="neonText">FRIDAY</span> - Film Fridays New Movies @ 8 p.m. Grindhouse Films @ 1 a.m.</p>
            <p><span class="neonText">SATURDAY</span> - Live Shows (Music, Comedy, DJs, Events, & More)</p>
            <p><span class="neonText">SUNDAY</span> - All Day Happy Hour (25% OFF Regular Kava & Happy Teass) College Night 7 p.m. - 1 a.m. Srudents w/ ID get 50% OFF</p>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="1000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/landing-carousel/trivia.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/landing-carousel/karaoke-open-mic.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/landing-carousel/switch.png" class="d-block w-100" alt="...">
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
        <div class="py-5 text-center">
            <h3 class="heading neonText">Our Menu</h3>
            <div class="bg-image-menu">
                <div class="p-5" style="background-color: rgba(0, 0, 0, 0.6)">
                    <div class="h-100">
                        <div class="row">
                            <img src="img/specialty-drinks/kava-shell.png" alt="" class="col-lg-4 img-fluid mb-3" width="100" height="125">
                            <img src="img/specialty-drinks/blue-happy-tea.png" alt="" class="col-lg-4 img-fluid mb-3" width="100" height="125">
                            <img src="img/specialty-drinks/cold-brew.png" alt="" class="col-lg-4 img-fluid mb-3" width="100" height="125">
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
        <div class="py-5 text-center">
            <h3 class="heading neonText py-3">What is Kava?</h3>
            <video src="videos/promo/davie-kava-promo-video.mp4" class="object-fit-contain" controls></video>
            <h4 class="py-3">To Learn More About Us</h4>
            <a class="btn neonFlickerText py-3" href="about.php" role="button">Click Here</a>
        </div>
    </section>

    <!--Clover/Eventbrite-->
    <section id="promos&events" class="mt-5">
        <div class="py-5 text-center">
            <h3 class="heading neonText py-3">Promotions and Special Events</h3>
            <div class="row">
                <div class="col-lg-4">
                    <img src="img/logo/clover.jpg" alt="" class="promo rounded img-fluid">
                    <h4 class="neonTextGreen py-3">Clover</h4>
                    <p>
                        Download the Clover App and find our great deals and promotions there!
                    </p>
                    <a class="btn neonFlickerText py-3" href="https://apps.apple.com/us/app/clover/id428620381" target="_blank" role="button">IOS</a>
                    <a class="btn neonFlickerText py-3" href="https://play.google.com/store/apps/details?id=com.getperka.android&gl=US" target="_blank" role="button">Android</a>
                </div>
                <div class="col-lg-4 ms-auto">
                    <img src="img/logo/eventbrite.png" alt="" class="promo rounded img-fluid">
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