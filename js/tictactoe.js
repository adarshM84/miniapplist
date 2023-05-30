let player = 1;
let tabledisable=false;
let clickMusic=new Audio("music/click.wav");
let win=new Audio("music/win1.wav");
let player1="Player 1";
let player2="Player 2";

function savePlayerName(){
    let p1=document.getElementById('p1').value.trim();
    let p2=document.getElementById('p2').value.trim();

    if(p1=='') {
        setBgRed('p1',true);
        return 0;
    }
    else setBgRed('p1',false);

    if(p2=='') {
        setBgRed('p2',true);
        return 0;
    }
    else setBgRed('p2',false);
    player1=p1;
    player2=p2;

    document.getElementById("player1").innerHTML=player1;
    document.getElementById("player2").innerHTML=player2;

    document.getElementById("gameMessage").innerHTML=player1+" [X] turns";

    document.getElementById('closeModal').click();
}
//player 1 x player 2 O
function markAt(trIndex, tdIndex) {
    playClickMusic();
    // console.log(trIndex, 'trIndex', tdIndex, 'tdIndex');
    let table = document.getElementById('tictactoeTable');
    let cellInstance = table.rows[trIndex].cells[tdIndex];
    if (cellInstance.innerHTML == '&nbsp;&nbsp;' && tabledisable==false) {
        if (player % 2 == 1) {
            cellInstance.innerHTML = "X";
            document.getElementById('player2').setAttribute('class', 'nav-link rounded-5 active playerText');
            document.getElementById('player1').setAttribute('class', 'nav-link rounded-5 playerText');
            cellInstance.classList.add("cLB");
            document.getElementById('gameMessage').innerHTML = player2+" [O] Turns";
        } else {
            cellInstance.innerHTML = "O";
            document.getElementById('player1').setAttribute('class', 'nav-link rounded-5 active playerText');
            document.getElementById('player2').setAttribute('class', 'nav-link rounded-5 playerText');
            document.getElementById('gameMessage').innerHTML = player1+" [X] Turns";
        }
        player++;
        // console.log(checkWin(), 'checkWin()');
        if (checkWin() == true) {
            if (player % 2 == 0) {
                document.getElementById('gameMessage').setAttribute('class', 'text-center mt-4 text-success');
                document.getElementById('gameMessage').innerHTML = "Congratulation !!! "+player1+" [X] .You win the game :)<br><a onclick='resetGame()' style='color: blue !important;cursor: pointer;'> Play Again</a>";
                console.log("Player 1 win");
            } else {
                document.getElementById('gameMessage').setAttribute('class', 'text-center mt-4 text-success');
                document.getElementById('gameMessage').innerHTML = "Congratulation !!! "+player2+" [O] .You win the game :)<br><a onclick='resetGame()' style='color: blue !important;cursor: pointer;'> Play Again</a>";
                console.log("Player 2 win");
            }
            tabledisable = true;
            celebrateWin();
        } else if (checkWin() == 'draw') {
            document.getElementById('gameMessage').setAttribute('class', 'text-center mt-4 text-warning');
            document.getElementById('gameMessage').innerHTML = "Game Draw.<a onclick='resetGame()' style='color: blue !important;cursor: pointer;'> Play Again</a>";
            console.log("draw");
            tabledisable = true;
            // draw();
        }
    }
    // console.log(table, cellInstance, cellInstance.innerHTML)
}

function checkWin() {

    let table = document.getElementById('tictactoeTable');
    //Horizonal condition
    if (table.rows[0].cells[0].innerHTML != '&nbsp;&nbsp;' && table.rows[0].cells[0].innerHTML == table.rows[0].cells[1].innerHTML && table.rows[0].cells[1].innerHTML == table.rows[0].cells[2].innerHTML) {
        table.rows[0].cells[0].classList.add("text-danger");
        table.rows[0].cells[1].classList.add("text-danger");
        table.rows[0].cells[2].classList.add("text-danger");
        return true;
    }
    else if (table.rows[1].cells[0].innerHTML != '&nbsp;&nbsp;' && table.rows[1].cells[0].innerHTML == table.rows[1].cells[1].innerHTML && table.rows[1].cells[1].innerHTML == table.rows[1].cells[2].innerHTML) {
        table.rows[1].cells[0].classList.add("text-danger");
        table.rows[1].cells[1].classList.add("text-danger");
        table.rows[1].cells[2].classList.add("text-danger");
        return true;
    }
    else if (table.rows[2].cells[0].innerHTML != '&nbsp;&nbsp;' && table.rows[2].cells[0].innerHTML == table.rows[2].cells[1].innerHTML && table.rows[2].cells[1].innerHTML == table.rows[2].cells[2].innerHTML) {
        table.rows[2].cells[0].classList.add("text-danger");
        table.rows[2].cells[1].classList.add("text-danger");
        table.rows[2].cells[2].classList.add("text-danger");
        return true;
    }

    //vertical condition
    else if (table.rows[0].cells[0].innerHTML != '&nbsp;&nbsp;' && table.rows[0].cells[0].innerHTML == table.rows[1].cells[0].innerHTML && table.rows[1].cells[0].innerHTML == table.rows[2].cells[0].innerHTML) {
        table.rows[0].cells[0].classList.add("text-danger");
        table.rows[1].cells[0].classList.add("text-danger");
        table.rows[2].cells[0].classList.add("text-danger");
        return true;
    }
    else if (table.rows[0].cells[1].innerHTML != '&nbsp;&nbsp;' && table.rows[0].cells[1].innerHTML == table.rows[1].cells[1].innerHTML && table.rows[1].cells[1].innerHTML == table.rows[2].cells[1].innerHTML) {
        table.rows[0].cells[1].classList.add("text-danger");
        table.rows[1].cells[1].classList.add("text-danger");
        table.rows[2].cells[1].classList.add("text-danger");
        return true;
    }
    else if (table.rows[0].cells[2].innerHTML != '&nbsp;&nbsp;' && table.rows[0].cells[2].innerHTML == table.rows[1].cells[2].innerHTML && table.rows[1].cells[2].innerHTML == table.rows[2].cells[2].innerHTML) {
        table.rows[0].cells[2].classList.add("text-danger");
        table.rows[1].cells[2].classList.add("text-danger");
        table.rows[2].cells[2].classList.add("text-danger");
        return true;
    }

    //diagonal condition
    else if (table.rows[0].cells[0].innerHTML != '&nbsp;&nbsp;' && table.rows[0].cells[0].innerHTML == table.rows[1].cells[1].innerHTML && table.rows[1].cells[1].innerHTML == table.rows[2].cells[2].innerHTML) {
        table.rows[0].cells[0].classList.add("text-danger");
        table.rows[1].cells[1].classList.add("text-danger");
        table.rows[2].cells[2].classList.add("text-danger");
        return true;
    }
    else if (table.rows[0].cells[2].innerHTML != '&nbsp;&nbsp;' && table.rows[0].cells[2].innerHTML == table.rows[1].cells[1].innerHTML && table.rows[1].cells[1].innerHTML == table.rows[2].cells[0].innerHTML) {
        table.rows[2].cells[0].classList.add("text-danger");
        table.rows[1].cells[1].classList.add("text-danger");
        table.rows[0].cells[2].classList.add("text-danger");
        return true;
    }

    //for draw
    else if (table.rows[0].cells[0].innerHTML != '&nbsp;&nbsp;' && table.rows[0].cells[1].innerHTML != '&nbsp;&nbsp;' && table.rows[0].cells[2].innerHTML != '&nbsp;&nbsp;' && table.rows[1].cells[0].innerHTML != '&nbsp;&nbsp;' && table.rows[1].cells[1].innerHTML != '&nbsp;&nbsp;' && table.rows[1].cells[2].innerHTML != '&nbsp;&nbsp;' && table.rows[2].cells[0].innerHTML != '&nbsp;&nbsp;' && table.rows[2].cells[1].innerHTML != '&nbsp;&nbsp;' && table.rows[2].cells[2].innerHTML != '&nbsp;&nbsp;') {
        return 'draw';
    }
    

    else return false;
}

function resetGame(){
    document.getElementById('winImage').hidden=true;

    let table = document.getElementById('tictactoeTable');
    for(let i=0;i<table.rows.length;i++){
        table.rows[i].cells[0].innerHTML="&nbsp;&nbsp;";
        table.rows[i].cells[1].innerHTML="&nbsp;&nbsp;";
        table.rows[i].cells[2].innerHTML="&nbsp;&nbsp;";

        table.rows[i].cells[0].classList.remove("text-danger");
        table.rows[i].cells[1].classList.remove("text-danger");
        table.rows[i].cells[2].classList.remove("text-danger");

        table.rows[i].cells[0].classList.remove("cLB");
        table.rows[i].cells[1].classList.remove("cLB");
        table.rows[i].cells[2].classList.remove("cLB");
    }
    tabledisable=false;

    document.getElementById('player1').setAttribute('class', 'nav-link rounded-5 active playerText');
    document.getElementById('player2').setAttribute('class', 'nav-link rounded-5 playerText');

    document.getElementById('gameMessage').innerHTML="Player 1 [X] Turns";
    document.getElementById('gameMessage').setAttribute("class","text-center mt-4 text-black");
    player=1;
  
}

function playClickMusic(){
    clickMusic.play();
}

function celebrateWin(){
    document.getElementById("drawImage").hidden=true;
    document.getElementById('winImage').hidden=false;
    win.play();
}

function draw(){
    document.getElementById('winImage').hidden=true;
    document.getElementById("drawImage").hidden=false;
}