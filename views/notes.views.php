<?php require 'views/Partials/head.views.php' ?>
<main class="container-fluid">
    <header class="d-flex justify-content-between align-items-center text-dark p-5 ">
        <h2><?= $title ?></h2>
        <?php if(isset($_SESSION['user_id'])):?>
        <a href="/note/create-note" class="btn btn-info">
            Create Note
        </a>
        <?php endif; ?>
    </header>
    <form class="px-5">
        <?php if (isset( $notes )): ?>
            <?php foreach ($notes as $note): ?>
                <div class="d-flex gap-5 justify-content-start">
                    <div class="list-group mx-0 w-auto">
                        <label class="list-group-item d-flex gap-2">
                            <input class="form-check-input flex-shrink-0" type="checkbox" value="">
                            <span>
                            <a href="/note?id=<?= $note['id'] ?>"><?= htmlspecialchars($note['body']) ?></a>
                        <small class="d-block text-muted">With support text underneath to add more detail</small>
                    </span>
                        </label>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </form>


</main>
<?php require 'views/Partials/fotter.views.php' ?>





