<?php require 'views/Partials/head.views.php' ?>
    <main class="container-fluid">
        <header class="container-fluid text-dark p-5 ">
            <h2><?= $title ?></h2>
        </header>
        <ul>
            <?php if ( isset( $notes ) ): ?>
                <?php foreach ( $notes as $note ): ?>
                    <li><a href="/note?id=<?= $note[ 'id' ]?>"><?= $note[ 'body' ] ?></a></li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>

    </main>
<?php require 'views/Partials/fotter.views.php' ?>