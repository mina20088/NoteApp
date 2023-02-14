<?php require 'views/Partials/head.views.php' ?>
    <main class="container-fluid">
        <header class="container-fluid text-dark p-5 ">
            <h2><?= $title ?></h2>
        </header>

        <ul>
            <?php if ( isset( $note ) ): ?>
                <li><?= $note['body']?></li>
            <?php endif;?>
        </ul>
        <a class="btn btn-primary" href="/">back</a>
    </main>
<?php require 'views/Partials/fotter.views.php' ?>