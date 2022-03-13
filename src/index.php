<?php
require_once ("config.php");

/* If the cookie is set, and we are not going to a category page then: */
if (isset($_COOKIE['username']) && !isset($_GET['cat'])) {
    header('Location: /index.php?cat=home');
}

/* If the ckie is not set and we are just also not going to a category page: */
if (!isset($_COOKIE['username']) && !isset($_GET['cat'])) {
    header("Location: /index.php?cat=name");
}

$pageTitle  = "";
$tabPageTitle = "";

switch ($_GET['cat']) {
    case 'name': $tabPageTitle = 'Name';
    break;
    case 'about': $tabPageTitle = 'About';
    break;
    case 'module_quiz': $tabPageTitle = 'Quiz';
    break;
    case 'leaderboard': $tabPageTitle = "Leaderboard";
    break;
    case 'study_categories': $tabPageTitle = "Study " . $_GET['plantCategoryType'];
    break;
    case 'study': $tabPageTitle = "Study";
    break;
    case 'home': $tabPageTitle = "Home";
    break;
    case 'matching-game': $tabPageTitle = 'Matching Game';
    break;
    default: $tabPageTitle = '-';
}
?>
<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>LittleBotanists - <?= $tabPageTitle ?></title>
    <link rel="icon" type="image/png" href="img/favicon.png" />


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Fontawesome -->
    <link href="css/all.min.css" rel="stylesheet">

    <!-- LightBox -->
    <link href="css/lightbox.min.css" rel="stylesheet">

    <!-- For Animations -->
    <link href="css/animate.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <!-- Favicons -->
<!--    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">-->

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/loadingoverlay.min.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/jquery-jvectormap-1.1.1.min.js"></script>
    <script src="js/jquery-jvectormap-au-merc.js"></script>
    <!-- For improved text to speed -->
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=nIDs4neg"></script>
    <!-- Our custom JS -->
    <script src="js/main.js?version=29"></script>

    <!-- Custom styles-->
    <link href="css/main.css?version=74" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
<?php include("header.php") ?>

<main class="flex-shrink-0">
    <div class="container">
    <?php if(isset($_GET['cat']) && $_GET['cat'] == 'name'): ?>
        <?php $pageTitle = "Name" ?>
       <?php include("name.php") ?>
    <?php endif; ?>
    <?php if(isset($_GET['cat']) && $_GET['cat'] == 'home'): ?>
        <?php $pageTitle = "Home" ?>
        <?php include("home.php") ?>
    <?php endif; ?>
    <?php if(isset($_GET['cat']) && $_GET['cat'] == 'study'): ?>
        <?php $pageTitle = "Study" ?>
        <?php include("study.php") ?>
    <?php endif; ?>
    <?php if(isset($_GET['cat']) && $_GET['cat'] == 'study_categories'): ?>
        <?php $pageTitle = "Study Categories" ?>
        <?php include("study_category.php") ?>
    <?php endif; ?>
    <?php if(isset($_GET['cat']) && $_GET['cat'] == 'module_quiz'): ?>
        <?php $pageTitle = "Quiz" ?>
        <?php include("module_quiz.php") ?>
    <?php endif; ?>
    <?php if(isset($_GET['cat']) && $_GET['cat'] == 'leaderboard'): ?>
        <?php $pageTitle = "Leaderboard" ?>
        <?php include("leaderboard.php") ?>
    <?php endif; ?>
    <?php if(isset($_GET['cat']) && $_GET['cat'] == 'matching-game'): ?>
        <?php $pageTitle = "Matching Game" ?>
        <?php include("matching-game.php") ?>
    <?php endif; ?>
    <?php if(isset($_GET['cat']) && $_GET['cat'] == 'about'): ?>
        <?php $pageTitle = "About LittleBotanists" ?>
        <?php include("about.php") ?>
    <?php endif; ?>
    </div>
</main>


<div class="modal" id="helpModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="help-button-icon fa fa-question-circle"></i> <?= $pageTitle?> Help</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div id="helpContent"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary float-end" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php") ?>



</body>
<script>
    $(document).ready(function() {
        init();

        $('#helpButton').click(function() {
           // $.LoadingOverlay("show");
            $.ajax({
                url: "help-docs/<?= $_GET['cat']?>.php",
                context: document.body
            }).done(function(response) {
                $('#helpContent').html(response);
             //   $.LoadingOverlay("hide");
                helpModal.show();
            });
        })

       initMenuCardHover();

        $('#toggleMenuOn').click(function() {
            $('#toggleMenuOff').toggleClass('d-none');
            $('#toggleMenuOff').toggleClass('active');
            $('#overlay').toggleClass('open');

        });

        $('#toggleMenuOff').click(function() {
            $('#toggleMenuOff').toggleClass('d-none');
            $('#toggleMenuOff').toggleClass('active');
            $('#overlay').toggleClass('open');
        })
    });
</script>
</html>