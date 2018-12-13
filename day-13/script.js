

$('#subImageOne').click(function () {
    var getSubImageOne = $(this).attr('src');
    $('#mainImage').attr('src',getSubImageOne);
});
$('#subImageTwo').click(function () {
    var getSubImageTwo = $(this).attr('src');
    $('#mainImage').attr('src',getSubImageTwo);
});
$('#subImageThree').click(function () {
    var getSubImageThree = $(this).attr('src');
    $('#mainImage').attr('src',getSubImageThree);
});
$('#subImageFour').click(function () {
    var getSubImageFour = $(this).attr('src');
    $('#mainImage').attr('src',getSubImageFour);
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
