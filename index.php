<?php
require_once 'header.php';
?>

<!-- app carousal -->
<div id="carouselExampleDark" class="carousel carousel-dark slide mt40" data-bs-ride="carousel" style="border:2px solid !important;">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" aria-label="Slide 7"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="7" aria-label="Slide 8"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active text-center" data-bs-interval="1500">
            <img src="images/tiactac2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Tic Tac Toe</h5>
                <p>Tic-tac-toe is played on a three-by-three grid by two players, who alternately place the marks X and O in one of the nine spaces in the grid.</p>
            </div>
        </div>
        <div class="carousel-item text-center" data-bs-interval="2000">
            <img src="images/clock.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Clock</h5>
                <p>Using this you can see your current time in india.</p>
            </div>
        </div>
        <div class="carousel-item text-center" data-bs-interval="2500">
            <img src="images/calculate.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Calculater</h5>
                <p>Calculators can do only addition, subtraction, multiplication and division mathematical calculations.</p>
            </div>
        </div>
        <div class="carousel-item text-center" data-bs-interval="2500">
            <img src="images/bmi2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>BMI Calculater</h5>
                <p>With the help of that application we can check we are fit or not.</p>
            </div>
        </div>
        <div class="carousel-item text-center" data-bs-interval="2500">
            <img src="images/incal2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>EMI Calculater</h5>
                <p>With the help of that application we can check our loan intrest value and more detail.</p>
            </div>
        </div>
        <div class="carousel-item text-center" data-bs-interval="2500">
            <img src="images/pokeworld.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Pokeworld</h5>
                <p>In this game you have to guss pokemon name.</p>
            </div>
        </div>
        <div class="carousel-item text-center" data-bs-interval="2500">
            <img src="images/benstart.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Aliens World</h5>
                <p>In this game you have to guss aliens name.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- app carousal end -->
<!-- App List -->
<div class="appList mt-5">
    <!-- first row -->
    <div class="row">
        <div class="col-md-4 p-3">
            <div class="card height520">
                <img src="images/tiactac2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Tic Tac Toe</h5>
                    <p class="card-text">Tic-tac-toe is played on a three-by-three grid by two players, who alternately place the marks X and O in one of the nine spaces in the grid.</p>
                    <a href="tictactoe.php" class="btn btn-primary playButton">
                        <svg xmlns="images/file-play.svg" width="16" height="16" fill="currentColor" class="bi bi-file-play" viewBox="0 0 16 16">
                            <path d="M6 10.117V5.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43z" />
                            <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                        </svg>Get set go</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-3">
            <div class="card height520">
                <img src="images/clock.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Clock</h5>
                    <p class="card-text">Using this you can see your current time in india.</p>
                    <a href="time.php" class="btn btn-primary playButton">
                        <svg xmlns="images/file-play.svg" width="16" height="16" fill="currentColor" class="bi bi-file-play" viewBox="0 0 16 16">
                            <path d="M6 10.117V5.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43z" />
                            <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                        </svg>Get set go</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-3">
            <div class="card height520">
                <img src="images/calculate.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Calculator</h5>
                    <p class="card-text">Calculators can do only addition, subtraction, multiplication and division mathematical calculations.
                    </p>
                    <a href="calculator.php" class="btn btn-primary playButton">
                        <svg xmlns="images/file-play.svg" width="16" height="16" fill="currentColor" class="bi bi-file-play" viewBox="0 0 16 16">
                            <path d="M6 10.117V5.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43z" />
                            <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                        </svg>Get set go</a>
                </div>
            </div>
        </div>

    </div>
    <!-- first row end -->

    <!-- second row -->
    <div class="row">
        <div class="col-md-4 p-3">
            <div class="card height520">
                <img src="images/weather.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Weather</h5>
                    <p class="card-text">With the help of that you can see weather report
                    </p>
                    <a href="commingsoon.php" class="btn btn-primary playButton">
                        <svg xmlns="images/file-play.svg" width="16" height="16" fill="currentColor" class="bi bi-file-play" viewBox="0 0 16 16">
                            <path d="M6 10.117V5.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43z" />
                            <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                        </svg>Get set go</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-3">
            <div class="card height520">
                <img src="images/bmi2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">BMI Calculator</h5>
                    <p class="card-text">With the help of that application we can check we are fit or not.</p>
                    <a href="bmi.php" class="btn btn-primary playButton">
                        <svg xmlns="images/file-play.svg" width="16" height="16" fill="currentColor" class="bi bi-file-play" viewBox="0 0 16 16">
                            <path d="M6 10.117V5.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43z" />
                            <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                        </svg>Get set go</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-3">
            <div class="card height520">
                <img src="images/incal2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">EMI Calculator</h5>
                    <p class="card-text">With the help of that application we can check our loan intrest value and more detail.</p>
                    <a href="emicalculator.php" class="btn btn-primary playButton">
                        <svg xmlns="images/file-play.svg" width="16" height="16" fill="currentColor" class="bi bi-file-play" viewBox="0 0 16 16">
                            <path d="M6 10.117V5.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43z" />
                            <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                        </svg>Get set go</a>
                </div>
            </div>
        </div>
    </div>
    <!-- second row end -->

    <!-- third row -->
    <div class="row">
        <div class="col-md-4 p-3">
            <div class="card height520">
                <img src="images/pokeworld.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Pokeworld</h5>
                    <p class="card-text">In this game you are going to guss pokemon name.
                    </p>
                    <a href="pokeworld.php" class="btn btn-primary playButton">
                        <svg xmlns="images/file-play.svg" width="16" height="16" fill="currentColor" class="bi bi-file-play" viewBox="0 0 16 16">
                            <path d="M6 10.117V5.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43z" />
                            <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                        </svg>Get set go</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-3">
        <div class="card height520">
                <img src="images/benstart.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Aliens World</h5>
                    <p class="card-text">In this game you are going to guss aliens name.</p>
                    <a href="alienworld.php" class="btn btn-primary playButton">
                        <svg xmlns="images/file-play.svg" width="16" height="16" fill="currentColor" class="bi bi-file-play" viewBox="0 0 16 16">
                            <path d="M6 10.117V5.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43z" />
                            <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                        </svg>Get set go</a>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-4 p-3">
            <div class="card height520">
                <img src="images/incal2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">EMI Calculator</h5>
                    <p class="card-text">With the help of that application we can check our loan intrest value and more detail.</p>
                    <a href="emicalculator.php" class="btn btn-primary playButton">
                        <svg xmlns="images/file-play.svg" width="16" height="16" fill="currentColor" class="bi bi-file-play" viewBox="0 0 16 16">
                            <path d="M6 10.117V5.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43z" />
                            <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                        </svg>Get set go</a>
                </div>
            </div>
        </div> -->
    </div>
    <!-- third row end -->

</div>
<!-- App List Close -->
<?php
require_once 'footer.php';
?>