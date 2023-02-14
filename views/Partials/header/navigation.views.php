
<ul class="navigation d-lg-flex d-md-flex d-sm-none nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
    <li>
        <a href="/"
           class="<?php echo $_SERVER['REQUEST_URI'] === "/" ? 'btn btn-primary link-light' : ''?> nav-link px-2">
            Home
        </a>
    </li>
    <li>
        <a href="/notes"
           class="<?php echo $_SERVER['REQUEST_URI'] === "/notes" ? 'btn btn-primary bg-primary link-light' : ''?> nav-link px-2">
            Notes
        </a>
    </li>
    <li>
        <a href="/about"
           class="<?php echo $_SERVER['REQUEST_URI'] === "/about" ? 'btn btn-primary bg-primary link-light' : ''?> nav-link px-2">
            About
        </a>
    </li>
    <li>
        <a href="/contact"
           class="<?php echo $_SERVER['REQUEST_URI'] === "/contact" ? 'btn btn-primary link-light' : ''?> nav-link px-2">
            Contact
        </a>
    </li>
</ul>
