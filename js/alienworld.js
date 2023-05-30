console.log("benten");
let masterAlienData = [
    {
        "id": 1,
        "name": "Arctiguana"
    },
    {
        "id": 2,
        "name": "Blitzwolfer"
    },
    {
        "id": 3,
        "name": "Cannonbolt"
    },
    {
        "id": 4,
        "name": "Clockwork"
    },
    {
        "id": 5,
        "name": "Diamondhead"
    },
    {
        "id": 6,
        "name": "Ditto"
    },
    {
        "id": 7,
        "name": "Eye Guy"
    },
    {
        "id": 8,
        "name": "Four Arms"
    },
    {
        "id": 9,
        "name": "Feedback"
    },
    {
        "id": 10,
        "name": "Frankenstrike"
    },
    {
        "id": 11,
        "name": "Ghostfreak"
    },
    {
        "id": 12,
        "name": "Grey Matter"
    },
    {
        "id": 13,
        "name": "Heatblast"
    },
    {
        "id": 14,
        "name": "Ripjaws"
    },
    {
        "id": 15,
        "name": "Snare-oh"
    },
    {
        "id": 16,
        "name": "Stinkfly"
    },
    {
        "id": 17,
        "name": "Upchuck"
    },
    {
        "id": 18,
        "name": "Upgrade"
    },
    {
        "id": 19,
        "name": "Way Big"
    },
    {
        "id": 20,
        "name": "Wildmutt"
    },
    {
        "id": 21,
        "name": "Wildvine"
    },
    {
        "id": 22,
        "name": "XLR8"
    }
];

let alienNames = [];
let ansName = "";
let isOnline = true;
let life = 3;
let introVoice = new Audio("music/ben1.mp3");

localStorage.setItem("guessSoreA", 0);


if (navigator.onLine) isOnline = true;
else {
    alert("Oops! You're offline. Please check your network connection...");
    isOnline = false;
}

function gameType(gameType) {
    if (!isOnline) {
        alert("Network error.Check internet connection and reload page again.");
        return;
    }
    if (gameType == "guess") {
        setHidden("gussGame", false);
        setHidden("alienInfo", true);
        playAgainGuess("Restart");
        setHidden("oneOption", true);
        introVoice.play();
    } else {
        setHidden("alienInfo", false);
        setHidden("gussGame", true);
        setHidden("twoOption", true);
        loadAllAlienData();
    }
    setHidden("backOption", false);
    document.getElementById("chooseTitle").hidden = true;
}

function playGuessGame() {
    if (!isOnline) alert("Network error.Check internet connection and reload page again.");
    if (isOnline == false) return;
    //if highscore not set then 
    if (localStorage.getItem("guessHighSoreA") == null) localStorage.setItem("guessHighSoreA", 0);
    document.getElementById("randomAlien").setAttribute("src", "images/benload.gif");
    document.getElementById("tryMessage").innerHTML = "Try Again";
    setHidden("alienMessage", false);
    setHidden("tryMessage", true);
    setHidden("contentName", true);
    setHidden("winMessage", true);
    document.getElementById("highScore").innerHTML = "High Score : " + localStorage.getItem("guessHighSoreA");
    document.getElementById("yourScore").innerHTML = "Score :" + localStorage.getItem("guessSoreA");
    loadrandomAlienImage(getRandomNumber(0, masterAlienData.length));
}

function playAgainGuess(type) {
    if (type == 'Restart') {
        //reset Life
        for (let i = 0; i < 3; i++) {
            document.getElementsByClassName("heartIcon")[i].hidden = false;
        }
        life = 3;
        localStorage.setItem("guessSoreA", 0);
    }
    introVoice.play();
    playGuessGame();
}

function loadrandomAlienImage(alienIndex) {
    document.getElementById("randomAlien").setAttribute("src","https://ben10-omnitrix-api.herokuapp.com/img/"+masterAlienData[alienIndex].name);
    if (loadRandomName(alienIndex) == 1) {
        setHidden("contentName", false);
        setHidden("alienMessage", true);
    }
}
function loadRandomName(alienIndex) {
    ansName = "";
    ansName = masterAlienData[alienIndex].name;
    let oneName = "";
    let twoName = "";
    alienNames = [];

    alienNames.push(ansName);
    // console.log(alienIndex, "alienIndex");
    if (alienIndex >= 0 && alienIndex < masterAlienData.length - 3) {
        oneName = masterAlienData[getRandomNumber(0, alienIndex + 2)].name;
    } else if (alienIndex >= masterAlienData.length - 4) {
        oneName = masterAlienData[getRandomNumber(0, (alienIndex))].name;
    }
    if (alienIndex >= 0 && alienIndex < masterAlienData.length - 4) {
        twoName = masterAlienData[getRandomNumber(0, (alienIndex + 1))].name;
    } else if (alienIndex >= masterAlienData.length - 4) {
        twoName = masterAlienData[getRandomNumber(0, (alienIndex - 5))].name;
    }

    alienNames.push(oneName);
    alienNames.push(twoName);

    alienNames = shuffleArray(alienNames);

    let divRef = document.getElementById("contentName");
    divRef.innerHTML = "";
    for (let i = 0; i < 3; i++) {
        let btn = document.createElement("button");
        btn.setAttribute("class", "col-3 m-2 btn btn-primary namebtn");
        btn.setAttribute("onclick", "checkAns(this.innerHTML)");
        btn.innerHTML = alienNames[i];
        divRef.appendChild(btn);
    }

    // console.log(ansName, oneName, twoName);
    return 1;
}
function checkAns(ans) {
    if (ans == ansName) {
        localStorage.setItem("guessSoreA", parseInt(localStorage.getItem("guessSoreA")) + 10);
        setHidden("tryMessage", true);
        setHidden("winMessage", false);
        disableAllName();
    } else {
        setHidden("tryMessage", false);
        //Check user life
        life = life - 1;
        if (life < 1) {
            document.getElementsByClassName("heartIcon")[life].hidden = true;
            document.getElementById("randomAlien").setAttribute("src", "images/benloss.png")
            document.getElementById("tryMessage").innerHTML = "You Loss.Score " + localStorage.getItem("guessSoreA") + "  <a style='color:green !important;cursor:pointer;' onclick='playAgainGuess(this.innerHTML)'>Restart</a>";
            localStorage.setItem("guessSoreA", 0);
            disableAllName();
            return;
        } else {
            document.getElementsByClassName("heartIcon")[life].hidden = true;
        }
    }
    document.getElementById("highScore").innerHTML = "High Score : " + localStorage.getItem("guessHighSoreA");
    document.getElementById("yourScore").innerHTML = "Score :" + localStorage.getItem("guessSoreA");

    if (parseInt(localStorage.getItem("guessSoreA")) > parseInt(localStorage.getItem("guessHighSoreA"))) {
        localStorage.setItem("guessHighSoreA", localStorage.getItem("guessSoreA"));
        document.getElementById("highScore").innerHTML = "High Score : " + localStorage.getItem("guessHighSoreA");
    }
}
function disableAllName() {
    for (let i = 0; i < 3; i++) {
        document.getElementsByClassName("namebtn")[i].disabled = true;
    }
}

function loadAllAlienData() {
    var alienInfoDiv = document.getElementById("alienInfo");
    if (alienInfoDiv.innerHTML.length > 200) return;
    alienInfoDiv.innerHTML = "";
    if (masterAlienData.length <= 0) alienInfoDiv.innerHTML = "<h3 class='text-center'>Oops !!! Network Error. Reload Page Again.</h3>";
    else {
        console.log("Not call");
        alienInfoDiv.innerHTML = '<h1 class="text-center" id="loadingInfoMessage">Loading...</h1>';
        for (let i = 0; i < masterAlienData.length; i++) {
            let currentAlienName = masterAlienData[i].name;
            console.log(currentAlienName,'currentAlienName',i)
            loadCurrentAlienData(currentAlienName,alienInfoDiv);
            if (i == masterAlienData.length - 1) setHidden("loadingInfoMessage", true);
        }
    }
}
function loadCurrentAlienData(currentAlienName,alienInfoDiv){
    let currentImage="https://ben10-omnitrix-api.herokuapp.com/img/"+currentAlienName;
    currentAlienName=currentAlienName.toUpperCase();
    let divCol = document.createElement("div");
    divCol.setAttribute("class", "col-md-4 mt-3 mb-3");
    let divInner = '<div class="card height520"><img style="height:88% !important;" src="' + currentImage + '" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">' + currentAlienName + '</h5></div> </div>';
    divCol.innerHTML = divInner;
    alienInfoDiv.appendChild(divCol);
}


function goBack() {
    setHidden("backOption", true);
    setHidden("oneOption", false);
    setHidden("twoOption", false);
    setHidden("chooseTitle", true);
    setHidden("gussGame", true);
    setHidden("alienInfo", true);
}
