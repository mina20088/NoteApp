<?php require 'views/Partials/head.views.php' ?>
<main class="container-fluid">

    <div class="alert alert-info"><?= $_SESSION['message']  ?></div>
    <h1>Welcome, <?= $_SESSION['first_name']?></h1>

</main>
<?php require 'views/Partials/fotter.views.php' ?>


