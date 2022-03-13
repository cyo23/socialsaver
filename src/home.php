<style>
    body {
        background: url(img/home1.png) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .cool-sun {
        margin-top: -4%;
        height: 120px;
        width: 120px;
        margin-left: 95%;
    }

    .transparent-panel {
        width: 45rem;
        padding: 2px;
        margin-left: 12rem;;
    }
    a:hover,
    a:visited,
    a:focus
    {text-decoration: none !important;}

</style>
<img class="cool-sun" src="/img/cool-sun.png?version=1">
<div>
    <div class="text-center" style="margin-top: 0%; margin-left: 29%">
       <!-- <img class="lblogo" src="img/Logo.png" alt="logo"/> -->
        <div class="transparent-panel fs-4">
            <p class="my-0 mx-0">Welcome to Little Botanists <?= $_COOKIE['username'] ?></p>
            <p class="my-0 mx-0">Here you can learn everything there is to know about Australia's amazing plants!</p>
            <p class="my-0 mx-0">Do you think you have what it takes to become a Little Botanist?</p>
            <p class="my-0 mx-0">Study and quiz your knowledge, competing against your friends and enemies</p>
            <a class="btn btn-outline-secondary text-decoration-none" href="index.php?cat=about">Learn about us...</a>
        </div>

    </div>

    <div  style="margin-top: 15rem">
        <div class="row">
            <div class="col">
                <a class="text-decoration-none" href="index.php?cat=study">
                    <div class="card home-menu-card opacity-75">
                        <div class="card-body text-center">
                            <h6>Study</h6>
                            <i class="fas fa-3x fa-graduation-cap"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="text-decoration-none" href="index.php?cat=module_quiz&module=Groundcovers&plantCategoryType=Groundcovers&shortcut=true">
                <div class="card home-menu-card opacity-75">
                    <div class="card-body text-center">
                        <h6>Quiz</h6>
                        <i class="far fa-3x fa-file-alt"></i>
                    </div>
                </div>
                </a>
            </div>
            <div class="col">
                <a class="text-decoration-none" href="index.php?cat=matching-game">
                    <div class="card home-menu-card opacity-75">
                        <div class="card-body text-center">
                            <h6>Matching Game</h6>
                            <i class="fas fa-3x fa-gamepad"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="text-decoration-none" href="index.php?cat=leaderboard">
                    <div class="card home-menu-card opacity-75">
                        <div class="card-body text-center">
                            <h6>Leadership Board</h6>
                            <i class="fas fa-3x fa-chart-line"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        // Animate Sun
        setInterval(function() {
            restartAnimation('.cool-sun', 'animate__animated animate__heartBeat animate__slow')
        }, 3000);

    });
</script>