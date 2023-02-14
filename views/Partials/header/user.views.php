

<div class="dropdown">
    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong><?= $_SESSION[ 'first_name' ] ?? "" ?></strong>
    </a>
    <ul class="dropdown-menu text-small shadow">
        <li><a class="dropdown-item" href="/profile?id=<?= $_SESSION['user_id'] ?>">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li>
                <form action="/logout" method="post">
                    <input type="submit" name="submit" class="dropdown-item" value="Sign Out"/>
                  <!--  <button type="submit" name="submit" class="dropdown-item">Sign Out</button>-->
                </form>
        </li>
    </ul>
</div>
