
$('#btn').click(function () {
    var firstNameValue = $('#firstName').val();
    var lastNameValue = $('#lastName').val();
    var fullNameValue = firstNameValue + ' ' + lastNameValue;
    $('#fullName').val(fullNameValue);
});











// alert($('#h1').text());







// var redBtnElement = document.getElementById("redBtn");
// redBtnElement.onclick = function () {
//     var divOneElement = document.getElementById('divOne');
//     // divOneElement.style.backgroundColor = 'red';
//     divOneElement.className = 'class-one';
// };
// var greenBtnElement = document.getElementById("greenBtn");
// greenBtnElement.onclick = function () {
//     var divOneElement = document.getElementById('divOne');
//     divOneElement.style.backgroundColor = 'green';
// };
// var blueBtnElement = document.getElementById("blueBtn");
// blueBtnElement.onclick = function () {
//     var divOneElement = document.getElementById('divOne');
//     divOneElement.style.backgroundColor = 'blue';
// };
// var defaultBtnElement = document.getElementById("defaultBtn");
// defaultBtnElement.onclick = function () {
//     var divOneElement = document.getElementById('divOne');
//     divOneElement.style.backgroundColor = 'gray';
// };












// var btnInput = document.getElementById('btn');
// btnInput.onclick = function () {
//   var startingNumberInput = document.getElementById('startingNumber').value;
//   var endingNumberInput = document.getElementById('endingNumber').value;
//   var res = ' ';
//   for (var x = startingNumberInput; x <= endingNumberInput;x++){
//       res += x;
//   }
//   document.getElementById('result').value = res;
// };