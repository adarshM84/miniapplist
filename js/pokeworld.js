console.log("pokeomn");
let masterPokeData = masterPokemonData;
let pokemonNames = [];
let ansName = "";
let isOnline = true;
let life = 3;
let guessGameLevel = '';
let minIndex = 0;
let maxIndex = 354;
let introVoice = new Audio("music/pokeStart.mp3");



if (navigator.onLine) isOnline = true;
else {
    alert("Oops! You're offline. Please check your network connection...");
    isOnline = false;
}
// loadMasterData();

// function loadMasterData() {
//     if (isOnline == false) return;
//     let p = fetch("https://pokeapi.co/api/v2/pokemon/?limit=100");
//     p.then((value1) => {
//         return value1.json()
//     }).then((value2) => {
//         masterPokeData.push(value2);
//         // console.log(masterPokeData, 'masterPokeData')
//     });
// }
// console.log(masterPokeData,'masterPokeData');

function gameType(gameType) {
    if(navigator.onLine==false){
        alert("No internet connection.Please Check..");
        return;
    }
    if (masterPokeData.length <= 0) {
        alert("Network error.Check internet connection and reload page again.");
        return;
    }
    if (gameType == "guess") {
        setHidden("gameLevelDiv", false);
        setHidden("pokemonInfo", true);
        setHidden("oneOption", true);
        setHidden("pokemonInfoLevel",true);
    } else {
        setHidden("pokemonInfo", false);
        setHidden("gussGame", true);
        setHidden("gameLevelDiv", true);
        setHidden("twoOption", true);
        setHidden("pokemonInfoLevel",false);
        loaddPokemonInfo('EASY');
    }
    setHidden("backOption", false);
    document.getElementById("chooseTitle").hidden = true;
}

function showScore() {
    let levelSelect = document.getElementById("gameLevel");
    if (localStorage.getItem("guessEasyHighScore") == null) localStorage.setItem("guessEasyHighScore", 0);
    if (localStorage.getItem("guessMediumHighScore") == null) localStorage.setItem("guessMediumHighScore", 0);
    if (localStorage.getItem("guessHardHighScore") == null) localStorage.setItem("guessHardHighScore", 0);

    guessGameLevel = "";
    guessGameLevel = levelSelect.value.trim().toUpperCase();
    if (guessGameLevel == '') {
        setHidden("levelMessage", false);
        setBgRed("gameLevel", true);
        return;
    } else {
        setHidden("levelMessage", true);
        setBgRed("gameLevel", false);
    }

    if (guessGameLevel == "EASY") {
        document.getElementById("levelHighScore").value = localStorage.getItem("guessEasyHighScore");
        minIndex = 0;
        maxIndex = parseInt(masterPokeData.results.length / 3);
    }
    else if (guessGameLevel == "MEDIUM") {
        document.getElementById("levelHighScore").value = localStorage.getItem("guessMediumHighScore");
        minIndex = parseInt(masterPokeData.results.length / 3);
        maxIndex = parseInt(masterPokeData.results.length / 3) * 2;
    }
    else if (guessGameLevel == "HARD") {
        document.getElementById("levelHighScore").value = localStorage.getItem("guessHardHighScore");
        minIndex = parseInt(masterPokeData.results.length / 3) * 2;
        maxIndex = parseInt(masterPokeData.results.length / 3) * 3;
    }
    // console.log(guessGameLevel, 'guessGameLevel', minIndex, 'minIndex', maxIndex, 'maxIndex');

}
function startGuessGame() {
    let levelSelect = document.getElementById("gameLevel");
    guessGameLevel = levelSelect.value.trim().toUpperCase();
    if (guessGameLevel == '') {
        setHidden("levelMessage", false);
        setBgRed("gameLevel", true);
        return;
    } else {
        setHidden("levelMessage", true);
        setBgRed("gameLevel", false);
    }
    setHidden("gussGame", false);
    setHidden("gameLevelDiv", true);
    setHidden("pokemonInfo", true);
    playAgainGuess("Restart");
    setHidden("oneOption", true);
    introVoice.play();
}


function playAgainGuess(type) {
    if (type == 'Restart') {
        //reset Life
        for (let i = 0; i < 3; i++) {
            document.getElementsByClassName("heartIcon")[i].hidden = false;
        }
        life = 3;
        localStorage.setItem("guessEasyScore", 0);
        localStorage.setItem("guessMediumScore", 0);
        localStorage.setItem("guessHardScore", 0);
    }
    introVoice.play();
    playGuessGame();
}


function playGuessGame() {
    if (masterPokeData.length <= 0) alert("Network error.Check internet connection and reload page again.");
    if (isOnline == false) return;
    let guessHighScore = getGuessScore("HighScore");
    let currentScore = getGuessScore("Score");

    //if highscore not set then 
    if (localStorage.getItem("guessHighSore") == null) localStorage.setItem("guessHighSore", 0);
    document.getElementById("randomPokemon").setAttribute("src", "images/pokeloading.gif");
    document.getElementById("tryMessage").innerHTML = "Try Again";
    setHidden("pokeMessage", false);
    setHidden("tryMessage", true);
    setHidden("contentName", true);
    setHidden("winMessage", true);
    document.getElementById("highScore").innerHTML = "High Score : " + guessHighScore;
    document.getElementById("yourScore").innerHTML = "Score :" + currentScore;

    loadRandomPokemonImage(getRandomNumber(minIndex, maxIndex));
}

function loadRandomPokemonImage(pokeIndex) {
    console.log(masterPokeData.results[pokeIndex].url)
    let url = masterPokeData.results[pokeIndex].url;
    let tempP = fetch(url)
    tempP.then((value1) => {
        return value1.json()
    }).then((value2) => {
        // console.log(value2, 'pokemondata');
        // console.log(value2.sprites.front_default, 'image url')
        document.getElementById("randomPokemon").setAttribute("src", value2.sprites.front_default);
        if (loadRandomName(pokeIndex) == 1) {
            setHidden("contentName", false);
            setHidden("pokeMessage", true);
        }
    });
    

}
function loadRandomName(pokeIndex) {
    ansName = "";
    ansName = masterPokeData.results[pokeIndex].name;
    let oneName = "";
    let twoName = "";
    pokemonNames = [];

    pokemonNames.push(ansName);
    // console.log(pokeIndex, "pokeIndex");
    if (pokeIndex >= 0 && pokeIndex < masterPokeData.results.length - 4) {
        oneName = masterPokeData.results[getRandomNumber(0, pokeIndex + 2)].name;
    } else if (pokeIndex >= masterPokeData.length - 4) {
        oneName = masterPokeData.results[getRandomNumber(0, (pokeIndex))].name;
    }
    if (pokeIndex >= 0 && pokeIndex < masterPokeData.results.length - 4) {
        twoName = masterPokeData.results[getRandomNumber(0, (pokeIndex + 1))].name;
    } else if (pokeIndex >= masterPokeData.length - 4) {
        twoName = masterPokeData.results[getRandomNumber(0, (pokeIndex - 5))].name;
    }

    pokemonNames.push(oneName);
    pokemonNames.push(twoName);

    pokemonNames = shuffleArray(pokemonNames);

    let divRef = document.getElementById("contentName");
    divRef.innerHTML = "";
    for (let i = 0; i < 3; i++) {
        let btn = document.createElement("button");
        btn.setAttribute("class", "col-3 m-2 btn btn-primary namebtn");
        btn.setAttribute("onclick", "checkAns(this.innerHTML)");
        btn.innerHTML = pokemonNames[i];
        divRef.appendChild(btn);
    }

    // console.log(ansName, oneName, twoName);
    return 1;
}
function checkAns(ans) {
    if (ans == ansName) {
        if (guessGameLevel == 'EASY') {
            localStorage.setItem("guessEasyScore", parseInt(localStorage.getItem("guessEasyScore")) + 10);
        }
        else if (guessGameLevel == 'MEDIUM') {
            localStorage.setItem("guessMediumScore", parseInt(localStorage.getItem("guessMediumScore")) + 10);
        }
        else if (guessGameLevel == 'HARD') {
            localStorage.setItem("guessHardScore", parseInt(localStorage.getItem("guessHardScore")) + 10);
        }
        setHidden("tryMessage", true);
        setHidden("winMessage", false);
        disableAllName();
    } else {
        setHidden("tryMessage", false);

        //Check user life
        life = life - 1;
        if (life < 1) {
            let currentScore = getGuessScore("Score");
            document.getElementsByClassName("heartIcon")[life].hidden = true;
            document.getElementById("randomPokemon").setAttribute("src", "images/guessLoss.gif")
            document.getElementById("tryMessage").innerHTML = "You Loss.Score " + currentScore + "  <a style='color:green !important;cursor:pointer;' onclick='playAgainGuess(this.innerHTML)'>Restart</a>";
            disableAllName();
            return;
        } else {
            document.getElementsByClassName("heartIcon")[life].hidden = true;
        }
    }
    let currentHighScore = getGuessScore("HighScore");
    let currentScore = getGuessScore("Score");
    document.getElementById("highScore").innerHTML = "High Score : " + currentHighScore;
    document.getElementById("yourScore").innerHTML = "Score :" + currentScore;

    if (parseInt(currentScore) > parseInt(currentHighScore)) {
        setGuessScore("HighScore", getGuessScore("Score"));
        document.getElementById("highScore").innerHTML = "High Score : " + currentHighScore;
    }
}
function getGuessScore(type) {
    if (type == "HighScore") {
        if (guessGameLevel == 'EASY') {
            return localStorage.getItem("guessEasyHighScore");
        }
        else if (guessGameLevel == 'MEDIUM') {
            return localStorage.getItem("guessMediumHighScore");
        }
        else if (guessGameLevel == 'HARD') {
            return localStorage.getItem("guessHardHighScore");
        }
    } else if (type == "Score") {
        if (guessGameLevel == 'EASY') {
            return localStorage.getItem("guessEasyScore");
        }
        else if (guessGameLevel == 'MEDIUM') {
            return localStorage.getItem("guessMediumScore");
        }
        else if (guessGameLevel == 'HARD') {
            return localStorage.getItem("guessHardScore");
        }
    }
}
function setGuessScore(type, scoreValue) {
    if (type == "HighScore") {
        if (guessGameLevel == 'EASY') {
            localStorage.setItem("guessEasyHighScore", scoreValue);
        }
        else if (guessGameLevel == 'MEDIUM') {
            localStorage.setItem("guessMediumHighScore", scoreValue);
        }
        else if (guessGameLevel == 'HARD') {
            localStorage.setItem("guessHardHighScore", scoreValue);
        }
    } else if (type == "Score") {
        if (guessGameLevel == 'EASY') {
            localStorage.setItem("guessEasyScore", scoreValue);
        }
        else if (guessGameLevel == 'MEDIUM') {
            localStorage.setItem("guessMediumScore", scoreValue);
        }
        else if (guessGameLevel == 'HARD') {
            localStorage.setItem("guessHardScore", scoreValue);
        }
    }
}
function disableAllName() {
    for (let i = 0; i < 3; i++) {
        document.getElementsByClassName("namebtn")[i].disabled = true;
    }
}
function loaddPokemonInfo(type){
    if (type == "EASY") {
        minIndex = 0;
        maxIndex = parseInt(masterPokeData.results.length / 3);
    }
    else if (type == "MEDIUM") {
        minIndex = parseInt(masterPokeData.results.length / 3);
        maxIndex = parseInt(masterPokeData.results.length / 3) * 2;
    }
    else if (type == "HARD") {
        minIndex = parseInt(masterPokeData.results.length / 3) * 2;
        maxIndex = parseInt(masterPokeData.results.length / 3) * 3;
    }
    loadAllPokeData();
}

function loadAllPokeData() {
    var pokemonInfoDiv = document.getElementById("pokemonInfo");
    // if (pokemonInfoDiv.innerHTML.length > 200) return;
    pokemonInfoDiv.innerHTML = "";
    if (masterPokeData.length <= 0) pokemonInfoDiv.innerHTML = "<h3 class='text-center'>Oops !!! Network Error. Reload Page Again.</h3>";
    else {
        pokemonInfoDiv.innerHTML = '<h1 class="text-center" id="loadingInfoMessage">Loading...</h1>';
        for (let i = minIndex; i < maxIndex; i++) {
            let currentPokemonData = masterPokeData.results[i];
            loadAndSetCurrentPokemonData(currentPokemonData, pokemonInfoDiv);
            if (i == maxIndex - 1) setHidden("loadingInfoMessage", true);
        }
    }
}
function loadAndSetCurrentPokemonData(currentPokemonData, pokemonInfoDiv) {
    let url = currentPokemonData.url;
    let tempP = fetch(url);
    tempP.then((value1) => {
        return value1.json();
    }).then((value2) => {
        console.log(value2, 'pokemoncurrentdata');
        // console.log(value2.sprites.front_default, 'current image url');
        let pokeType = "";
        let allAttacks = "";
        let allAbility = "";
        for (let i = 0; i < value2.types.length; i++) {
            pokeType = value2.types[i].type.name + "," + pokeType;
            // console.log(pokeType,value2.types[i].type.name)
        }
        let moveLength = 0;
        if (value2.moves.length > 10) {
            moveLength = 10;
        }
        for (let i = 0; i < moveLength; i++) {
            allAttacks = value2.moves[i].move.name + "," + allAttacks;
        }
        for (let i = 0; i < value2.abilities.length; i++) {
            allAbility = value2.abilities[i].ability.name + "," + allAbility;
        }
        // pokeType=pokeType.substring(1,pokeType.length);
        allAbility = allAbility.substring(0, allAbility.length - 1);
        pokeType = pokeType.substring(0, pokeType.length - 1);
        allAttacks = allAttacks.substring(0, allAttacks.length - 1) + "<b> etc.</b>";


        let divCol = document.createElement("div");
        divCol.setAttribute("class", "col-md-4 mt-3 mb-3");
        let divInner = '<div class="card pokeCard" style="height:680px !important"><img src="' + value2.sprites.front_default + '" loading="lazy" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">' + currentPokemonData.name.toUpperCase() + '</h5><h6 class="card-text"><b> Id</b> : ' + "#"+value2.id + '</h6>' +'<h6 class="card-text"><b> Pokemon Type</b> : ' + pokeType + '</h6>' + '<p><b>Attacks : </b> : ' + allAttacks + '</p><p><b>Abilities : </b> : ' + allAbility + '</p><p>'+'<b>Height : </b> : ' + value2.height + '</p><p>'+'<b>Weight : </b> : ' + value2.weight + '</p>'+'</div> </div>';
        divCol.innerHTML = divInner;
        pokemonInfoDiv.appendChild(divCol);
    });
}


function goBack() {
    setHidden("chooseTitle", false);
    setHidden("oneOption", false);
    setHidden("twoOption", false);
    setHidden("backOption", true);
    setHidden("gameLevelDiv", true);
    setHidden("gussGame", true);
    setHidden("pokemonInfo", true);
    setHidden("pokemonInfoLevel",true);
}

//   https://stackoverflow.com/questions/46946380/fetch-api-request-timeout