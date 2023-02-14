
<?php require 'views/Partials/head.views.php' ?>
<main class="container-fluid">

    <header class="container-fluid text-dark p-5 ">
        <h2><?= $title ?></h2>
    </header>
    <div class="container">
        <form action="/login" method="POST">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" >Email</label>
                <input type="text" class="form-control"  name="email" value="" id="formGroupExampleInput" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value="" id="formGroupExampleInput2" placeholder="password">
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-primary">login</button>
            </div>
        </form>
    </div>
</main>
<?php require 'views/Partials/fotter.views.php' ?>