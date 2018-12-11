

$('subImageOne').click(function () {
    var getSubImage = this.attr('src');
    $('mainImage').attr('src',getSubImage);
});
// function createElement() {
//     var newHeadingElement = document.createElement('h1');
//     var newParagraphElement = document.createElement('p');
//     newHeadingElement.innerHTML = "This is a heading";
//     newParagraphElement.innerHTML = "This is a paragraph.";
//     document.getElementById('div').appendChild(newHeadingElement);
//     document.getElementById('div').appendChild(newParagraphElement);
// }
//
// document.getElementById('btn').onclick = function () {
//     createElement();
// };













// $('#firstName').keyup(function () {
//     var firstNameValue = $('#firstName').val();
//     $('#res1').text(firstNameValue);
// });
// $('#lastName').keyup(function () {
//     var lastNameValue = $('#lastName').val();
//     $('#res2').text(lastNameValue);
// });
//
// $('#lastName').blur(function () {
//     var firstNameValue = $('#firstName').val();
//     var lastNameValue = $('#lastName').val();
//     var fullNameValue = firstNameValue + ' ' + lastNameValue;
//     $('#res3').text(fullNameValue);
// });
