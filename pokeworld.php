<?php
require_once 'header.php';
?>
<!-- Note that by  we are present inside body with div class container since we include header and footer -->
<div class="mt-5">
    <h3 id="gameTitle">Pokeworld</h3>
    <p>Fore more feature visit <a href="https://mypokeworld.netlify.app/" target="_blank">here</a></p>
    <div class="row justify-content-center mt-4">
        <h2 class="text-center mb-3 mt-3" id="chooseTitle"><u><i>Choose Game</i></u></h1>
            <div class="col-md-3 mt-3 text-center" id="backOption" hidden>
                <button class="backButton" onclick="goBack()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-square-fill" viewBox="0 0 16 16">
                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm10.5 10V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4A.5.5 0 0 0 10.5 12z" />
                    </svg>Back
                </button>
            </div>
            <div class="col-md-4 mt-3 text-center" id="oneOption"><button class="first" onclick="gameType('info')">Pokemon Info</button></div>
            <div class="col-md-4 mt-3 text-center" id="twoOption"><button class="first" onclick="gameType('guess')">Guess The Pokemon</button></div>
    </div>
    <!-- guess level -->
    <div id="gameLevelDiv" hidden>
        <div class="row g-2 mt-5">
            <div class="col-md text-center">
                <h5 for="levelHighScore" class="mb-1">High Score</h5>
                <input type="text" class="form-control text-center" style="font-size:20px;font-family:monospace;" id="levelHighScore" placeholder="Level High Score" value="----" disabled>
            </div>
            <div class="col-md text-center">
                <h5 for="gameLevel" class="mb-1">Game Level</h5>
                <select class="form-select" id="gameLevel" style="font-size:20px;font-family:monospace;" onchange="showScore()">
                    <option value="" selected>Select Level</option>
                    <option value="Easy">Easy</option>
                    <option value="Medium">Medium</option>
                    <option value="Hard">Hard</option>
                </select>
            </div>
        </div>
        <div class="col-md-12 mt-2 text-center">
            <h5 class="text-center text-danger" style="font-family: monospace;" id="levelMessage" hidden>Select Game Level</h5>
        </div>
        <div class="col-md-12 text-center mt-4">
            <button class="startButton" onclick="startGuessGame()">Start ></button>
        </div>
    </div>

    <!-- guess level end -->
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
                <img src="images/pokeloading.gif" class="card-img-top" id="randomPokemon" alt="...">
                <!-- card body -->
                <div class="card-body">
                    <div id="contentName" class="row justify-content-center" hidden></div>
                    <h5 class="text-success text-center mt-3 text-nowrap" id="winMessage" hidden>You Guessed It !!!<span class="text-warning mx-4 next" onclick="playAgainGuess('continue')">Next >></span></h5>
                    <h5 class="text-danger text-center mt-3" id="tryMessage" hidden>Try again.</h5>
                    <h5 class="card-title" id="pokeMessage">Loading Please Wait...</h5>
                    <div id="learnMore" hidden>
                        <a href="commingsoon.php" class="btn btn-primary playButton">
                            <svg xmlns="images/file-play.svg" width="16" height="16" fill="currentColor" class="bi bi-file-play" viewBox="0 0 16 16">
                                <path d="M6 10.117V5.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43z" />
                                <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                            </svg>Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center" id="pokemonInfoLevel" hidden>
        <div class="col-md-4 mt-5 mb-5">
            <ul class="nav nav-pills mb-4 w-100" id="pillNav" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" type="button" role="tab" aria-selected="true" onclick="loaddPokemonInfo('EASY')">Easy</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" type="button" role="tab" aria-selected="false" tabindex="-1" onclick="loaddPokemonInfo('MEDIUM')">Medium</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" type="button" role="tab" aria-selected="false" tabindex="-1" onclick="loaddPokemonInfo('HARD')">Hard</button>
                </li>
            </ul>
        </div>
    </div>
    <div class="row mt-5" id="pokemonInfo" hidden>

    </div>
</div>
</div>

<script src="js/pokedata.js?v<?php echo rand(); ?>"></script>
<script src="js/pokeworld.js?v<?php echo rand(); ?>"></script>
<?php
require_once 'footer.php';
?>