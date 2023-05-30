
// let backmusic = new Audio("music/indexmusic.mp3");

var filename = window.location.pathname.split("/");
filename = window.location.pathname.split("/")[filename.length - 1];

//if color not set means white else apply color miniappBGCss contain hexcode::colorname
if (localStorage.getItem("miniappBGCss") == null) localStorage.setItem("miniappBGCss", "background-color:white !important;");
else document.getElementById("documntBody").setAttribute("style", "background-color:" + localStorage.getItem("miniappBGCss").split("::")[0] + " !important;");

function loadOperation() {
    changeHeadCoelor();
    if (filename == 'tictactoe.php') {
        document.getElementById("openModal").click();
        // document.getElementById("ticTable").hidden=false;
        setHidden("loadingMessage", true);
        setHidden("ticTable", false);
    }
    if (filename == 'commingsoon.php') {
        // document.getElementById("documntBody").setAttribute("class", "commingSoon");
    }
    if (filename == 'time.php') {
        loadCurrentTimeInfo();
    }
    loadSettingContent();
}
function getRandomNumber(min, max) {
    return parseInt(Math.random() * (max - min) + min);
}

function playBackMusic() {
    // console.log(filename,window.location);
    // if (filename == 'index.php') {
    //     backmusic.play();
    // }

}

function changeHeadCoelor() {

    let randomIndex = getRandomNumber(0, 140);
    let randomColor = colorArray[randomIndex].hex;
    // console.log(randomColor, randomIndex);
    let styleProperty = "box-shadow: 0px 0px 38px 10px " + randomColor + ";";
    document.getElementsByClassName('mainTitile')[0].setAttribute("style", styleProperty);

    //change owner name color
    let nameProperty = "box-shadow: 0px 0px 31px 4px " + randomColor + ";border-radius:7px !important;padding:4px;";
    document.getElementById('ownerName').setAttribute("style", nameProperty);
}

function setBgRed(elementId, flag) {
    if (flag) document.getElementById(elementId).style.backgroundColor = "#ff6666";
    else document.getElementById(elementId).style.backgroundColor = "white";
}
function setHidden(elementId, flag) {
    document.getElementById(elementId).hidden = flag;
}
setInterval(changeHeadCoelor, 2000);


function loadSettingContent() {
    // console.log(colorArray[0])
    let backGroundColorList = document.getElementById('backGroundColorList');
    let headingColorList = document.getElementById('headingColorList');
    backGroundColorList.innerHTML="";

    for (var i = 0; i < colorArray.length; i++) {
        let option1 = document.createElement('option');
        let option2 = document.createElement('option');;
        let colorName = colorArray[i].name.toUpperCase().trim();
        let hexCode = colorArray[i].hex;

        option2.innerHTML = option1.innerHTML = colorName;
        option2.value = option1.value = hexCode;
        // console.log(colorName,localStorage.getItem("miniappBGCss"),localStorage.getItem("miniappBGCss").split("::")[1] == colorName)

        headingColorList.appendChild(option1);
        if (localStorage.getItem("miniappBGCss") != null && localStorage.getItem("miniappBGCss").split("::")[1] == colorName) {
            option2.selected=true;
            console.log("Called")
        }else{
            if(colorName=="WHITE"){
                option2.selected=true;
            }
        }
        backGroundColorList.appendChild(option2);
    }
}

function changeBackColor() {
    let backGroundColorList = document.getElementById('backGroundColorList');
    let selectedOption=backGroundColorList.options[backGroundColorList.selectedIndex];
    // console.log(selectedOption,'selectedOption',selectedOption.value,selectedOption.innerHTML)
   
    let backColor = "background-color:" + selectedOption.value + " !important;";
    localStorage.setItem("miniappBGCss", selectedOption.value+"::"+selectedOption.innerHTML);
    document.getElementById('documntBody').setAttribute("style", backColor);
}
function changeHeadColor() {
    let headingColorList = document.getElementById('headingColorList');
    let backColor = "color:" + headingColorList.value + " !important;";
    document.getElementById('mainTitile').setAttribute("style", backColor);
}

function shuffleArray(array) {
    console.log("Calles")
    for (var i = array.length - 1; i > 0; i--) {

        // Generate random number
        var j = Math.floor(Math.random() * (i + 1));

        var temp = array[i];
        array[i] = array[j];
        array[j] = temp;
    }
    return array;
}

