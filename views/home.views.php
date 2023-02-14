<?php require 'views/Partials/head.views.php' ?>
<main class="container-fluid">
    <header class="container-fluid text-dark p-5 ">
        <?php if(isset($_GET['message'])):?>
         <div class="alert alert-info"><?= $_GET['message']  ?>
        <?php endif;?>
        <h2><?= $title ?></h2>
    </header>
</main>
<?php require 'views/Partials/fotter.views.php' ?>