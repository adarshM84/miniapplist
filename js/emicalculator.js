let lAmount = '', lYear = '', lRate = '', totalInterestRate = '', emi = '', totalAmount = '';
function setRange(elementId) {
    let inputValue = document.getElementById(elementId).value;
    inputValue = removeCommaFromNumber(inputValue);
    let formatedNumber = addCommaInNumber(inputValue);

    switch (elementId) {
        case 'lAmount': document.getElementById('lAmountRange').value = parseFloat(inputValue);
            document.getElementById('lAmount').value = formatedNumber;
            console.log("Called1");
            break;
        case 'lYear': document.getElementById('lYearRange').value = parseFloat(inputValue);
            document.getElementById('lYear').value = formatedNumber;
            console.log("Called2");
            break;
        case 'lRate': document.getElementById('lRateRange').value = parseFloat(inputValue);
            //include use to check string containg that word or not
            if (inputValue.includes("%") == false) inputValue = inputValue + "%";
            document.getElementById('lRate').value = inputValue;
            console.log("Called3");
            break;
        default: console.log("default")
    }
    console.log(elementId, 'elementIdInput', inputValue);

    calculateEmi();
}
function setValue(elementId) {
    let rangeValue = document.getElementById(elementId).value;
    rangeValue = removeCommaFromNumber(rangeValue);
    let formatedNumber = addCommaInNumber(rangeValue);

    switch (elementId) {
        case 'lAmountRange': document.getElementById('lAmount').value = formatedNumber;
            console.log("CalledR1");
            break;
        case 'lYearRange': document.getElementById('lYear').value = formatedNumber;
            console.log("CalledR2");
            break;
        case 'lRateRange': document.getElementById('lRate').value = formatedNumber + "%";
            console.log("CalledR3");
            break;
        default: console.log("defaultR");
    }

    calculateEmi();
}
function addCommaInNumber(numberValue) {
    let tempAfterDecimal="";
    if (numberValue.length < 4) return numberValue;
    if(numberValue.includes(".")){
        tempAfterDecimal="."+numberValue.split(".")[1];
        numberValue=numberValue.split(".")[0];
    }
    let numberLangth = 0;
    let newNumber = "";
    for (let i = numberValue.length - 1; i >= 0; i--) {
        numberLangth++;
        if (numberLangth > 1 && numberLangth % 2 == 1) {
            newNumber = "," + numberValue.substring(i, i + 1) + newNumber;
        }
        else newNumber = numberValue.substring(i, i + 1) + newNumber;
    }
    //remove if , attach before number
    if (newNumber.substring(0, 1) == ',') newNumber = newNumber.substring(1, newNumber.length)
    // console.log(newNumber,'aftterFormat',newNumber.substring(0,1),newNumber.substring(1,newNumber.length))
    console.log(numberValue, "After format", newNumber)
    return newNumber+tempAfterDecimal;
}
function removeCommaFromNumber(numberValue) {
    return numberValue.replace(/\,/g, '');
}

function calculateEmi() {
    setHidden('loadingMessage', false);

    if (validateData() == 1) {

        // P x R x(1 + R) ^ N / [(1 + R) ^ N - 1] where -
        //         P = Principal loan amount
        //         N = Loan tenure in months
        //         R = Monthly interest rate
        let lMonth = lYear * 12;
        lRate = lRate / 12 / 100;
        emi = Math.round(parseFloat((lAmount * lRate * (Math.pow((1 + lRate), lMonth)) / (Math.pow((1 + lRate), lMonth) - 1))));
        // totalInterestRate = Math.round((emi * lMonth) - lAmount);
        totalAmount = Math.round(emi * lMonth);
        totalInterestRate=Math.round(totalAmount-lAmount);


        document.getElementById('emiAmount').innerHTML = addCommaInNumber(emi.toString());
        document.getElementById('totalAmount').innerHTML = addCommaInNumber(totalAmount.toString());
        document.getElementById('principalAmount').innerHTML = addCommaInNumber(lAmount.toString());
        document.getElementById('interestAmount').innerHTML = addCommaInNumber(totalInterestRate.toString());
        if (prpareChart()) setHidden('loadingMessage', true);
        // console.log(emi, 'emi', totalInterestRate, 'totalInterestRate');
    }

}
function validateData() {
    lAmount = removeCommaFromNumber(document.getElementById('lAmount').value.trim());
    lYear = removeCommaFromNumber(document.getElementById('lYear').value.trim());
    lRate = document.getElementById('lRate').value.trim();

    if (lAmount.length == 0 || parseFloat(lAmount) <= 0) {
        setBgRed('lAmount', true);
        return;
    } else setBgRed('lAmount', false);
    if (lYear.length == 0 || parseFloat(lYear) <= 0) {
        setBgRed('lYear', true);
        return;
    } else setBgRed('lYear', false);
    if (lRate.length == 0) {
        setBgRed('lRate', true);
        return;
    } else {
        lRate = lRate.substring(0, lRate.length - 1);
        setBgRed('lRate', false);
    }
    // console.log(lAmount, lYear, lRate, 'lAmount,lYear,lRate');
    return 1;
}

function prpareChart() {
    let circlePercent=Math.ceil((totalInterestRate/totalAmount)*100);
    let circleRadian=parseInt((circlePercent*360)/100);
    // console.log(circleRadian,'circleRadian')
    let chartStyle="width: 250px;height: 250px;border-radius: 50%;text-align: center;";
    let chartBg=" background-image: conic-gradient(#ff6666 "+0+"deg "+circleRadian+"deg ,lightblue "+(circleRadian+1)+"deg);";

    let chartCss=chartStyle+chartBg;
    document.getElementById('pieChart').setAttribute("style",chartCss);

    return 1;
}