<?php if(!isset($isLoged)) {
            $isLoged = false;
}
?>
<ul class="nav nav-tabs">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profil</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Edit profil</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Log out</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/blog">Blog</a>
    </li>
    <?php if ($isLoged) {?>
    <li class="nav-item">
        <a class="nav-link" href="/snake">Snake</a>
    </li>
    <?php }?>
</ul>