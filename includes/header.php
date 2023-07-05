<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Davie Kava | <?php echo $page_name; ?></title>
    <link rel="icon" type="image/x-icon" href="/img/favicon/favicon.ico">

    <!-- Bootstrap Core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Bootstrap Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/65f139bdfc.js" crossorigin="anonymous"></script>

    <!-- Custom Styles -->
    <link type="text/css" rel="stylesheet" href="css/main.css">
</head>

<body class="bg-dark">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand neonFlickerText" href="/">Davie Kava</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                if ($page_name == "Home") {
                    echo ("
                        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link active\" aria-current=\"page\" href=\"/\">Home</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"about.php\">About</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"menu.php\">Menu</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"contact.php\">Contact</a>
                            </li>
                        </ul>"
                    );
                } elseif ($page_name == "About") {
                    echo ("
                        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" aria-current=\"page\" href=\"/\">Home</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link active\" href=\"about.php\">About</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"menu.php\">Menu</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"contact.php\">Contact</a>
                            </li>
                            </li>
                        </ul>"
                    );
                } elseif ($page_name == "Menu") {
                    echo ("
                        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" aria-current=\"page\" href=\"/\">Home</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"about.php\">About</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link active\" href=\"menu.php\">Menu</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"contact.php\">Contact</a>
                            </li>
                            </li>
                        </ul>"
                    );
                } elseif ($page_name == "Contact") {
                    echo ("
                        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" aria-current=\"page\" href=\"/\">Home</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"about.php\">About</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"menu.php\">Menu</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link active\" href=\"contact.php\">Contact</a>
                            </li>
                            </li>
                        </ul>"
                    );
                } else {
                    echo ("
                        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link active\" aria-current=\"page\" href=\"/\">Home</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"about.php\">About</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"menu.php\">Menu</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"contact.php\">Contact</a>
                            </li>
                        </ul>"
                    );
                }
                ?>
            </div>
        </div>
    </nav>