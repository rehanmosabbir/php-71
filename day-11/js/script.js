

var btnElement = document.getElementById('btn');
btnElement.onclick = function () {
    var firstNameInput = document.getElementById('firstName').value;
    var lastNameInput = document.getElementById('lastName').value;
    var fullNameInput = firstNameInput + ' ' + lastNameInput;
    document.getElementById('fullName').value = fullNameInput;
    document.getElementById('firstName').value = " ";
    document.getElementById('lastName').value = " ";
};


var addElement = document.getElementById('addition');
addElement.onclick = function () {
    var firstNumberInput = Number(document.getElementById('firstNumber').value);
    var lastNumberInput = Number(document.getElementById('lastNumber').value);
    var resultInput = (firstNumberInput + lastNumberInput);
    document.getElementById('result').value = resultInput;
};
var subtractElement = document.getElementById('subtraction');
subtractElement.onclick = function () {
    var firstNumberInput = document.getElementById('firstNumber').value;
    var lastNumberInput = document.getElementById('lastNumber').value;
    var resultInput = (firstNumberInput - lastNumberInput);
    document.getElementById('result').value = resultInput;
};
var multiplyElement = document.getElementById('multiplication');
multiplyElement.onclick = function () {
    var firstNumberInput = document.getElementById('firstNumber').value;
    var lastNumberInput = document.getElementById('lastNumber').value;
    var resultInput = (firstNumberInput * lastNumberInput);
    document.getElementById('result').value = resultInput;
};
var divideElement = document.getElementById('division');
divideElement.onclick = function () {
    var firstNumberInput = document.getElementById('firstNumber').value;
    var lastNumberInput = document.getElementById('lastNumber').value;
    var resultInput = (firstNumberInput / lastNumberInput);
    document.getElementById('result').value = resultInput;
};
var remainderElement = document.getElementById('remainder');
remainderElement.onclick = function () {
    var firstNumberInput = document.getElementById('firstNumber').value;
    var lastNumberInput = document.getElementById('lastNumber').value;
    var resultInput = (firstNumberInput % lastNumberInput);
    document.getElementById('result').value = resultInput;
};

document.getElementById('reset').onclick = function () {
    document.getElementById('firstNumber').value = " ";
    document.getElementById('lastNumber').value = " ";
    document.getElementById('result').value = " ";
};