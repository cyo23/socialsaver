<?php
if (isset($_GET['cat'])) {
    $activePage = $_GET['cat'];
} else {
    $activePage = "index";
}
?>
<?php if (!in_array($activePage, ["home", "name"])): ?>
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler d-block me-3" id="toggleMenuOn" type="button"  aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img class="navbar-brand" style="width: 10.5rem; height: 2rem;" src="img/Logo.png" />
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0 mx-auto">
                </ul>


                <div class="d-flex">
                    <a href="index.php?cat=home" class="btn rounded me-2 btn-md btn-outline-info float-right"><i class="fa fa-home"></i></a>
                    <?php if ($activePage != 'about'): ?>
                    <button id="helpButton" class="btn rounded btn-md btn-outline-info float-right"><i class="help-button-icon fa fa-question-circle"></i><span class="text-patrick-hand"> Help</span></button>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </nav>
    <div class="button_container d-none" id="toggleMenuOff"><span class="top"></span><span class="middle"></span><span class="bottom"></span></div>
    <div class="overlay" id="overlay">
        <nav class="overlay-menu d-flex justify-content-center">
            <ul class="text-start">
                <li><a href="index.php?cat=study"><i class="fas fa-graduation-cap"></i> Study</a></li>
                <li><a href="index.php?cat=module_quiz&module=Groundcovers&plantCategoryType=Groundcovers&shortcut=true"><i class="far fa-file-alt"></i> Quiz</a></li>
                <li><a href="index.php?cat=matching-game"><i class="fas fa-gamepad"></i> Matching Game</a></li>
                <li><a href="index.php?cat=leaderboard"><i class="fas fa-chart-line"></i> Leaderboard</a></li>
                <li><a href="index.php?cat=about"><i class="fas fa-info-circle"></i> About</a></li>
            </ul>
        </nav>
    </div>
</header>
<?php endif;?>