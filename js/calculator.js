console.log("connected");
let number = "";
let temp = "null";
console.log(eval("2*3"));
function addIntoNumber(elemntValue) {
    number = number + elemntValue;
    document.getElementById('calculateAns').innerHTML = number;
}
function calculateAns() {
    // console.log(number,number.includes("2"), 'number');
    //if only number then return
    if(number.includes("+")==false && number.includes("-")==false && number.includes("*")==false && number.includes("/")==false && number.includes("%")==false) {
        console.log("reurn");
        return;
    }
    //if operation end with operator
    let tempOp=number.substring(number.length-1,number.length);
    if(tempOp.includes("+")==true || tempOp.includes("-")==true || tempOp.includes("*")==true || tempOp.includes("/")==true || tempOp.includes("%")==true) {
        console.log("end with operator");
        return;
    }

    let ans = eval(number);
    document.getElementById('calculateAns').innerHTML = ans;
    number = ans;
}
function reset() {
    number = "0";
    document.getElementById('calculateAns').innerHTML = number;
}
function backspace(){
    if(number.length>1) number=number.substring(0,number.length-1);
    else number=0;
    document.getElementById('calculateAns').innerHTML = number;   
}

function addInFrontOfNumber(){
    if(number.length<2) number="-"+number;
    else if(number.substring(0,1)=='-') number=number.substring(1,number.length);
    else number="-"+number;
    // else if()
    document.getElementById('calculateAns').innerHTML = number;   
}