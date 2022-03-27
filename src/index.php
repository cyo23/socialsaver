<?php
require_once ("config.php");


$pageTitle  = "";
$tabPageTitle = "";

if (!isset($_GET['page'])) {
    // Redirect to the home
    header('Location: /index.php?page=home');
}

switch ($_GET['page']) {
    case 'home':
        $tabPageTitle = "Home";
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
    <title>SocialSaver - <?= $tabPageTitle ?></title>
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

    <!-- Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/loadingoverlay.min.js"></script>
    <script src="js/selectize.min.js?version=1"></script>
    <!-- Our custom JS -->
    <script src="js/main.js?version=29"></script>

    <!-- Custom styles-->
    <link href="css/main.css?version=75" rel="stylesheet">

    <!-- Selectize CSS -->
    <link href="css/selectize.css" rel="stylesheet" />

</head>
<body class="d-flex flex-column h-100">
<?php include("header.php") ?>

<main class="flex-shrink-0">
    <div class="container">
    <?php if(isset($_GET['page']) && $_GET['page'] == 'home'): ?>
        <?php $pageTitle = "Home" ?>
       <?php include("home.php") ?>
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
</html>