<?php
require_once 'header.php';
?>
<!-- Note that by  we are present inside body with div class container since we include header and footer -->
<div class="mt-5">
    <div class="mt40 emiCalculatorBody">
        <div class="row">
            <div class="col-md-6 mb-5">
                <h2 class="mb-5">EMI CALCULATOR</h2>

                <!-- Amount -->
                <div class="row">
                    <div class="col-6 emiLabel">AMOUNT</div>
                    <div class="col-6">
                        <div class="amountContainer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="25" class="m-0" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z" />
                            </svg><input type="text" id="lAmount" onchange="setRange(this.id)" placeholder="Enter Amount" class="emiinput form-control" value="1,00,000">
                        </div>
                    </div>
                    <input type="range" id="lAmountRange" min="100000" max="100000000" onchange="setValue(this.id)" value="100000">
                    <div class="range-value">
                        <span class="fLeft"> 1 Lac</span>
                        <span class="fRight"> 10 Cr</span>
                    </div>
                </div>
                <!-- Amount -->
                <div class="row mt-5">
                    <div class="col-6 emiLabel">TENURE(YEARS)</div>
                    <div class="col-6">
                        <input type="text" id="lYear" onchange="setRange(this.id)" placeholder="Enter Years" class="emiinput form-control" value="20">
                    </div>
                    <input type="range" id="lYearRange" min="1" max="30" onchange="setValue(this.id)" value="20">
                    <div class="range-value">
                        <span class="fLeft"> 1</span>
                        <span class="fRight"> 30</span>
                    </div>
                </div>
                <!-- Amount -->
                <div class="row mt-5">
                    <div class="col-6 emiLabel">INTEREST RATE (% P.A.)</div>
                    <div class="col-6">
                        <input type="text" id="lRate" onchange="setRange(this.id)" placeholder="Enter Interest Rate" class="emiinput form-control" value="8.40%">
                    </div>
                    <input type="range" id="lRateRange" min="0" max="15" onchange="setValue(this.id)" value="8.40">
                    <div class="range-value">
                        <span class="fLeft">0</span>
                        <span class="fRight">15</span>
                    </div>
                </div>
                <div class="row mt-5">
                    <h3 id="loadingMessage" class="text-success  mb-4" hidden>Loading please wait...</h3>
                    <!-- <button class="btn btn-primary" onclick="calculateEmi()">Calculate</button> -->
                </div>
            </div>
            <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
            <!-- Calculation result -->
            <div class="col-md-6">
                <h2 class="text-center">EMI DETAILS</h2>
                <div class="row mt-5">
                    <div class="col-6 text-center">
                        <h4 class="op08">EMI Amount</h4>
                        <div class="amountContainer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="m-0" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z" />
                            </svg>
                            <h2 id="emiAmount" style="color:orange;">862</h2>
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <h4 class="op08">Total Amount</h4>

                        <div class="amountContainer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="m-0" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z" />
                            </svg>
                            <h3 id="totalAmount">2,06,880</h3>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6 text-center">
                        <h4 class="op08">Principal Amount <span style="background-color:lightblue;">&nbsp;&nbsp;</span></h4>
                        <div class="amountContainer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="m-0" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z" />
                            </svg>
                            <h3 id="principalAmount">1,00,000</h3>
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <h4 class="op08">Interest Amount <span style="background-color:#ff6666;">&nbsp;&nbsp;</span></h4>

                        <div class="amountContainer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="m-0" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z" />
                            </svg>
                            <h3 id="interestAmount">1,06,880</h3>
                        </div>
                    </div>
                </div>
                <div class="emiResultContiner mt-5">
                    <div class="piechart" id="pieChart"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/emicalculator.js?v<?php echo rand(); ?>"></script>


<?php
require_once 'footer.php';
?>