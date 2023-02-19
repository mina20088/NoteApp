
<?php  require base_path ('views/Partials/head.views.php') ?>
<main class="container-fluid form-signin w-100 m-auto">

    <header class="container-fluid text-dark p-5 ">
        <h2><?= $title ?></h2>
    </header>

    <form method="post">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
        <div class="form-floating">
            <input type="text" class="form-control" name="email"  id="floatingInput" placeholder="Email" value="<?php echo $_POST['email'] ?? '' ?>">
            <label for="floatingInput">Email address</label>
        </div>
        <?php if(isset($errors['email'])): ?>
            <span class="text-danger">*<?= $errors['email'] ?></span>
        <?php endif; ?>
        <div class="form-floating">
            <input type="password" class="form-control"  name="password" id="floatingPassword" placeholder="Password" value="<?php echo $_POST['password'] ?? '' ?>" >
            <label for="floatingPassword">Password</label>
        </div>
        <?php if(isset($errors['password'])): ?>
            <span class="text-danger">*<?= $errors['password'] ?></span>
        <?php endif; ?>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" name="login" type="submit">Sign in</button>
    </form>
</main>
<?php require base_path ('views/Partials/fotter.views.php') ?>