<footer id="footer-section" class="mt-5 py-5">
    <div class="row">
        <div class="col-lg-2 mb-2 text-center neonText">
            <a href="/"><img src="img/logo/davie-kava-logo-no-bg.png" alt="Davie Kava logo without background" width="100" height="100"></a>
        </div>
        <div class="col-lg-2 mb-2 text-center">
            <h5 class="neonText">Links</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 aliceblue-text">Home</a></li>
                <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 aliceblue-text">About</a></li>
                <li class="nav-item mb-2"><a href="menu.php" class="nav-link p-0 aliceblue-text">Menu</a></li>
                <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0 aliceblue-text">Contact</a></li>
            </ul>
        </div>

        <div class="col-lg-4 mb-2">
            <h5 class="text-center neonText">Contact</h5>
            <p>
                <i class="bi bi-telephone neonText"></i><a href="tel:+1-954-418-2085" class="text-decoration-none"><span class="ps-2 aliceblue-text">(954)418-2085</span></a>
            </p>
            <p>
                <i class="bi bi-geo-alt neonText"></i><a href="https://goo.gl/maps/E82K8q89bJZtW1Gp7" class="text-decoration-none" target="_blank"><span class="ps-2 aliceblue-text">8256 W State Rd 84, Davie, FL 33324</span></a>
            </p>
            <div div class="col-1 float-start">
                <p><i class="bi bi-clock neonText"></i></p>
            </div>
            <div div class="col-2 w-75 text-left float-end">
                <p>Mon. &#3; 12:00 p.m. - 1:00 a.m.</p>
                <p>Tue. &#3; 12:00 p.m. - 1:00 a.m.</p>
                <p>Wed. &#3; 12:00 p.m. - 1:00 a.m.</p>
                <p>Thu. &#3; 12:00 p.m. - 1:00 a.m.</p>
                <p>Fri. &#3; 12:00 p.m. - 3:00 a.m..</p>
                <p>Sat. &#3; 12:00 p.m. - 3:00 a.m.</p>
                <p>Sun. &#3; 12:00 p.m. - 1:00 a.m.</p>
            </div>
        </div>

        <div class="col-lg-4 mb-2 text-center">
            <form>
                <h5 class="neonText">Kava With A Bite!</h5>
                <p>
                    We are open 365 days a year, including holidays. On occasion, we are open 24 hours for special events and film festivals.
                </p>
            </form>
        </div>
    </div>

    <div class="d-flex justify-content-between py-4 my-4 border-top">
        <p class="neonText">&copy; 2022 Davie Kava, All rights reserved.</p>
        <ul class="list-unstyled d-flex">
            <li class="ms-3"><a class="link-dark neonFlickerText" href="https://www.facebook.com/daviekava/" target="_blank"><i class="bi bi-facebook"></i></a></li>
            <li class="ms-3"><a class="link-dark neonFlickerText" href="https://www.instagram.com/daviekava/" target="_blank"><i class="bi bi-instagram"></i></a></li>
            <li class="ms-3"><a class="link-dark neonFlickerText" href="https://twitter.com/daviekava" target="_blank"><i class="bi bi-twitter"></i></a></li>
            <li class="ms-3"><a class="link-dark neonFlickerText" href="https://www.youtube.com/channel/UCXzfc50DjEKCV3Sc-ZhYinA" target="_blank"><i class="bi bi-youtube"></i></a></li>
            <li class="ms-3"><a class="link-dark neonFlickerText" href="https://www.tiktok.com/@davie_kava" target="_blank"><i class="bi bi-tiktok"></i></a></li>
        </ul>
    </div>
</footer>

<!--Bootstrap Core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!--Custom JS-->
<script src="js/functions.js" crossorigin="anonymous"></script>

<!--Contact Form Validation-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
    function validateContactForm() {
        var valid = true;

        $(".info").html("");
        $(".input-field").css('border', '#e0dfdf 1px solid');
        var userName = $("#userName").val();
        var userEmail = $("#userEmail").val();
        var subject = $("#subject").val();
        var content = $("#content").val();

        if (userName == "") {
            $("#userName-info").html("Required.");
            $("#userName").css('border', '#e66262 1px solid');
            valid = false;
        }
        if (userEmail == "") {
            $("#userEmail-info").html("Required.");
            $("#userEmail").css('border', '#e66262 1px solid');
            valid = false;
        }
        if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
            $("#userEmail-info").html("Invalid Email Address.");
            $("#userEmail").css('border', '#e66262 1px solid');
            valid = false;
        }

        if (subject == "") {
            $("#subject-info").html("Required.");
            $("#subject").css('border', '#e66262 1px solid');
            valid = false;
        }
        if (content == "") {
            $("#userMessage-info").html("Required.");
            $("#content").css('border', '#e66262 1px solid');
            valid = false;
        }
        return valid;
    }
</script>

</body>

</html>