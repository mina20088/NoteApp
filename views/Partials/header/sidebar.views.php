<div class="d-flex flex-column flex-shrink-0  bg-light" style="width:100%;">
    <ul class="nav nav-pills flex-column mb-auto mx-3 mt-4">
        <li class="nav-item">
            <a href="/" class="nav-link <?= isUrl('/')?'active text-light':'link-dark'?>" aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                Home
            </a>
        </li>
        <li class="nav-item">
            <a href="/notes" class="nav-link <?= isUrl('/notes')?'active':'link-dark'?>">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#notes "/></svg>
                Notes
            </a>
        </li>
        <li class="nav-item">
            <a href="/about" class="nav-link <?= isUrl('/about')?'active':'link-dark'?>">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#about"/></svg>
                About
            </a>
        </li>
        <li class="nav-item">
            <a href="/contact" class="nav-link <?=isUrl('/contact')?'active':'text-dark'?>">
                <svg class="icons8-contact" width="16" height="16"><use xlink:href="#contact"/></svg>
                Contact
            </a>
        </li>
    </ul>
</div>
