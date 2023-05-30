
<?php
require_once 'header.php';
?>
<!-- Note that by  we are present inside body with div class container since we include header and footer -->
<div class="mt-5">
    <h3 id="gameTitle">Alien World</h3>
    <div class="row justify-content-center mt-4">
        <h2 class="text-center mb-3 mt-3" id="chooseTitle"><u><i>Choose Game</i></u></h1>
            <div class="col-md-3 mt-3 text-center" id="backOption" hidden>
                <button class="backButton" onclick="goBack()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-square-fill" viewBox="0 0 16 16">
                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm10.5 10V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4A.5.5 0 0 0 10.5 12z" />
                    </svg>Back
                </button>
            </div>
            <div class="col-md-3 mt-3 text-center" id="oneOption"><button class="first" onclick="gameType('info')">Alien Info</button></div>
            <div class="col-md-3 mt-3 text-center" id="twoOption"><button class="first" onclick="gameType('guess')">Guess The Aliens</button></div>
    </div>
    <div class="row mb-5 justify-content-center" id="gussGame" hidden>

        <div class="row mb-2">
            <h1 class="text-center mb-3 mt40 text-nowrap highScore" id="highScore">High Score</h1>
            <div class="row">
                <div class="col-5 text-center">
                    <h1 class="mb-3 text-nowrap" id="yourScore" style="font-family: monospace !important;margin-right: 25px;">Score</h1>
                </div>
                <div class="col-1"></div>
                <div class="col-1"></div>
                <div class="col-1 mx-2">
                    <img src="images/hearLife.png" class="heartIcon" alt="">
                </div>
                <div class="col-1 mx-2">
                    <img src="images/hearLife.png" class="heartIcon" alt="">
                </div>
                <div class="col-1 mx-2">
                    <img src="images/hearLife.png" class="heartIcon" alt="">
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card height520 pokeCard">
                <img src="images/benload.gif" class="card-img-top" id="randomAlien" alt="...">
                <!-- card body -->
                <div class="card-body">
                    <div id="contentName" class="row justify-content-center" hidden></div>
                    <h2 class="text-success text-center mt-3 text-nowrap" id="winMessage" hidden>You Guessed It !!!<span class="text-warning mx-4 next" onclick="playAgainGuess('continue')">Next >></span></h2>
                    <h2 class="text-danger text-center mt-3" id="tryMessage" hidden>Try again.</h2>
                    <h5 class="card-title" id="alienMessage">Loading Please Wait...</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5" id="alienInfo" hidden>

    </div>
</div>
</div>

<script src="js/alienworld.js?v<?php echo rand(); ?>"></script>
<?php
require_once 'footer.php';
?>