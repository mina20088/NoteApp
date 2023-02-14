<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="../../public/images/icons8-home-page-32.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="../../public/css/index.css" rel="stylesheet">
    <title><?php echo $title ?? "" ?></title>
</head>
<body>

<div class="container-fluid">
    <header class="d-sm-flex justify-content-sm-between flex-wrap align-items-center justify-content-sm-center justify-content-md-between py-3 mb-4 border-bottom header">

        <?php require "views/Partials/header/logo.views.php" ?>

        <?php require 'views/Partials/header/menu.views.php' ?>

        <?php require 'views/Partials/header/navigation.views.php' ?>

        <div class="canvas offcanvas offcanvas-start d-md-none" data-bs-backdrop="static" tabindex="-1"
             id="staticBackdrop" aria-labelledby="staticBackdropLabel">

            <div class="offcanvas-header p-4">

                <?php if (isset($_SESSION['user_id'])): ?>
                    <?php require 'views/Partials/header/user.views.php' ?>
                <?php endif;?>
                <?php if(!isset($_SESSION['user_id'])):?>
                    <?php require 'views/Partials/header/registerlogin.views.php' ?>
                <?php endif ?>

                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

            </div>

            <div class="offcanvas-body p-0">

                <?php require 'views/Partials/header/sidebar.views.php' ?>

            </div>
        </div>

        <div class="accountbuttons">
            <?php if (isset($_SESSION['user_id'])): ?>
                <?php require 'views/Partials/header/user.views.php' ?>
            <?php elseif(!isset($_SESSION['user_id'])): ?>
                <?php require 'views/Partials/header/registerlogin.views.php' ?>
            <?php endif ?>
        </div>


    </header>
</div>