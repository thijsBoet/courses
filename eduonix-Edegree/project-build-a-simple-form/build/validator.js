const alpha = document.getElementById("alpha");
const numeric = document.getElementById("numeric");

function checkChar(event){
    if (isFinite(event.key)||alpha.value.length>10){
        alert("Please enter no more than 10 Numeric Characters");
        return false;
    } else {
        console.log(numeric.value.length)
        return true;
    }
}

function checkNum(event){
    if (!isFinite(event.key)||numeric.value.length>10){
        alert("Please enter no more than 10 Alphanumeric Characters");
        return false;
    } else {
        console.log(typeof(numeric.value))
        return true;
    }
}

alpha.addEventListener("keydown", checkChar);
numeric.addEventListener("keydown", checkNum);
