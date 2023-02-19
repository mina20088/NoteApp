<?php require base_path ('views/Partials/head.views.php'); ?>
    <main class="container-fluid">
        <div class="container">
            <h1>Create A Note</h1>
            <form method="POST">
                <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="title" id="floatingInput" placeholder="Notes title" value="<?= $_POST['title']??''?>">
                    <label for="floatingInput">title</label>
                </div>
                <?php if(isset($errors['title'])): ?>
                    <span class="text-danger">*<?= $errors['title'] ?></span>
                <?php endif; ?>
                <div class="form-floating mb-3">
                    <textarea class="form-control h-50" name="body" id="floatingInput" rows="12" placeholder="Add Notes body..."><?= $_POST['body']??''?></textarea>
                    <label for="floatingInput">body</label>
                </div>
                <?php if(isset($errors['body'])): ?>
                    <span class="text-danger">*<?= $errors['body'] ?></span>
                <?php endif; ?>
                <span class="text-danger"></span>
                <div>
                    <input class="btn btn-success" type="submit" name="createNote" value="add note">
                </div>
            </form>
        </div>

    </main>
<?php require base_path ('views/Partials/fotter.views.php'); ?>