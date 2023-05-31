<?php
if (!empty($_POST["send"])) {
    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $subject = $_POST["subject"];
    $content = $_POST["content"];

    $toEmail = "NEED TO PUT DAVIE KAVA EMAIL HERE";
    $mailHeaders = "From: " . $name . "<" . $email . ">\r\n";
    if (mail($toEmail, $subject, $content, $mailHeaders)) {
        $message = "Your contact information is received successfully.";
        $type = "success";
    }
}
?>

<?php $page_name = "Contact" ?>
<?php require("includes/header.php") ?>
<div class="container mt-5">
    <div class="py-5 text-center">>
        <h3 class="heading neonText">Contact Us</h3>
        <h4>Better yet, see us in person!</h4>

        <p>We love our customers, so feel free to visit during normal business hours located <a href="#footer-section" class="text-decoration-none link-dark neonFlickerText" role="button">below</a>.</p>
    </div>
    <div class="row">>
        <div class="col-lg-4">
            <form name="frmContact" id="" frmContact"" method="post" action="" enctype="multipart/form-data" onsubmit="return validateContactForm()">

                <div class="input-row">
                    <label style="padding-top: 20px;color:aliceblue;">Name</label> <span id="userName-info" class="info"></span><br /> <input type="text" class="input-field w-100" name="userName" id="userName" />
                </div>
                <div class="input-row">
                    <label style="color:aliceblue;">Email</label> <span id="userEmail-info" class="info"></span><br /> <input type="text" class="input-field w-100" name="userEmail" id="userEmail" />
                </div>
                <div class="input-row">
                    <label style="color:aliceblue;">Subject</label> <span id="subject-info" class="info"></span><br /> <input type="text" class="input-field w-100" name="subject" id="subject" />
                </div>
                <div class="input-row">
                    <label style="color:aliceblue;">Message</label> <span id="userMessage-info" class="info"></span><br />
                    <textarea name="content" id="content" class="input-field w-100" rows="10"></textarea>
                </div>
                <div>
                    <input type="submit" name="send" class="btn btn-lg neonFlickerText" value="Send" />

                    <div id="statusMessage">
                        <?php
                        if (!empty($message)) {
                        ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-4 ms-auto">
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="500" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=davie%20kava&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            width: 100%;
                            height: 100%;
                        }
                    </style>
                    <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            width: 100%;
                            height: 100%;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>
    <?php require("includes/footer.php") ?>

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
</div>