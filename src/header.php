<?php
if (isset($_GET['page'])) {
    $activePage = $_GET['page'];
} else {
    $activePage = "index";
}
?>

<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SocialSaver</a>
            <?php if ($activePage == 'posts'): ?>
                <button id="btnPost" class="btn btn-outline-primary float-end" data-bs-toggle="modal" data-bs-target="#postModal" >NEW POST</button>
            <?php endif; ?>
        </div>
    </nav>
</header>