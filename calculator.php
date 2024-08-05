<?php
require_once 'header.php';
?>
<!-- Note that by  we are present inside body with div class container since we include header and footer -->
<div class="mt-5">
    <h3>Calculator</h3>
    <div class="calculatearea mt-5 fFamilyFantacy">
        <table id="calculatorTable">
            <tbody id="calculatorTableBody" class="blackShadow">
                <!-- //for ans -->
                <h1 id="calculateAns" class="blackShadow">0</h1>
                <!-- for number -->
                <tr>
                    <td class="specialOperation" onclick="reset()">C</td>
                    <td class="specialOperation" onclick="addIntoNumber(this.innerHTML)">%</td>
                    <td class="specialOperation" onclick="backspace()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-caret-left-square-fill" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm10.5 10V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4A.5.5 0 0 0 10.5 12z" />
                        </svg>
                    </td>
                    <td class="specialOperation" onclick="addIntoNumber(this.innerHTML)">/</td>
                </tr>
                <tr>
                    <td class="calculatorNumber" onclick="addIntoNumber(this.innerHTML)">7</td>
                    <td class="calculatorNumber" onclick="addIntoNumber(this.innerHTML)">8</td>
                    <td class="calculatorNumber" onclick="addIntoNumber(this.innerHTML)">9</td>
                    <td class="specialOperation" onclick="addIntoNumber('*')">x</td>
                </tr>
                <tr>
                    <td class="calculatorNumber" onclick="addIntoNumber(this.innerHTML)">4</td>
                    <td class="calculatorNumber" onclick="addIntoNumber(this.innerHTML)">5</td>
                    <td class="calculatorNumber" onclick="addIntoNumber(this.innerHTML)">6</td>
                    <td class="specialOperation" onclick="addIntoNumber(this.innerHTML)">-</td>
                </tr>
                <tr>
                    <td class="calculatorNumber" onclick="addIntoNumber(this.innerHTML)">1</td>
                    <td class="calculatorNumber" onclick="addIntoNumber(this.innerHTML)">2</td>
                    <td class="calculatorNumber" onclick="addIntoNumber(this.innerHTML)">3</td>
                    <td class="specialOperation" onclick="addIntoNumber(this.innerHTML)">+</td>
                </tr>
                <tr>
                    <td class="calculatorNumber" onclick="addInFrontOfNumber()">+/-</td>
                    <td class="calculatorNumber" onclick="addIntoNumber(this.innerHTML)">0</td>
                    <td class="calculatorNumber" onclick="addIntoNumber(this.innerHTML)">.</td>
                    <td class="equalOperator" onclick="calculateAns()">=</td>
                </tr>

            </tbody>
        </table>

    </div>
</div>

<script src="js/calculator.js?v<?php echo rand(); ?>"></script>
<?php
require_once 'footer.php';
?>