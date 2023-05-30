<?php
require_once 'header.php';
?>
<!-- Note that by  we are present inside body with div class container since we include header and footer -->
<div class="mt-5">
    <h3>Tic Tac Toe</h3>


    <!-- for take player name -->
    <div class="container box" hidden>
        <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mod1" id="openModal" >Open Mod1</div>
    </div>
    <div class="modal fade" id="mod1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Players Name</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <h5>Enter Player 1 Name [X] :</h5> <input type="text" id="p1" value="Player 1" class="form-control"><br>
                    <h5>Enter Player 1 Name [O] :</h5> <input type="text" id="p2" value="Player 2" class="form-control"><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="savePlayerName()">OK</button>
                    <button type="button" class="btn btn-danger" id="closeModal" data-bs-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
    <!-- //for take player name -->

    <!--Active Player  -->
    <div class="row text-center">
        <!-- loading message -->
        <h2 id="loadingMessage" class="text-success mb-2">Loading please wait..</h2>
        <div class="col-2"></div>
        <div class="col-8">
            <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-white border rounded-5 shadow-sm" id="pillNav2" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link rounded-5 active playerText" id="player1" data-bs-toggle="tab" type="button" role="tab" aria-selected="false" tabindex="-1" disabled>Player 1 [X]</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link rounded-5 playerText" id="player2" data-bs-toggle="tab" type="button" role="tab" aria-selected="true" disabled>Player 2 [O]</button>
                </li>
            </ul>
        </div>
        <div class="col-2"></div>
    </div>
    <h2 id="gameMessage" class="mt-5 text-center">Player 1 [X] Turns</h2>
    <!-- User End -->


    <div class="gameContent mt-5">
        <div class="winImage mb-4 text-center" id="winImage" hidden>
            <img src="images/win.gif" alt="">
        </div>
        <div class="winImage mb-4 text-center" id="drawImage" hidden>
            <img src="images/lose.gif" alt="">
        </div>
        <table class="ticTable mb-4" id="ticTable" hidden>
            <tbody id="tictactoeTable">
                <tr class="ticTr borderB">
                    <td class="borderR" onclick="markAt(0,0)">&nbsp;&nbsp;</td>
                    <td class="borderR" onclick="markAt(0,1)">&nbsp;&nbsp;</td>
                    <td onclick="markAt(0,2)">&nbsp;&nbsp;</td>
                </tr>
                <tr class="ticTr">
                    <td class="borderR" onclick="markAt(1,0)">&nbsp;&nbsp;</td>
                    <td class="borderR" onclick="markAt(1,1)">&nbsp;&nbsp;</td>
                    <td onclick="markAt(1,2)">&nbsp;&nbsp;</td>
                </tr>
                <tr class="ticTr borderT">
                    <td class="borderR" onclick="markAt(2,0)">&nbsp;&nbsp;</td>
                    <td class="borderR" onclick="markAt(2,1)">&nbsp;&nbsp;</td>
                    <td onclick="markAt(2,2)">&nbsp;&nbsp;</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script src="js/tictactoe.js?v<?php echo rand(); ?>"></script>


<?php
require_once 'footer.php';
?>