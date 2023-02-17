<?php require 'views/Partials/head.views.php' ?>
    <main class="container-fluid">
        <div class="container">
            <h1>Create A Note</h1>
            <form method="POST">
                <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="title" id="floatingInput" placeholder="Notes title">
                    <label for="floatingInput">title</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control h-50" name="body" id="floatingInput" rows="12" placeholder="Add Notes body..."></textarea>
                    <label for="floatingInput">body</label>
                </div>
                <input class="btn btn-success" type="submit" name="createNote" value="add note">
            </form>
        </div>

    </main>
<?php require 'views/Partials/fotter.views.php' ?>