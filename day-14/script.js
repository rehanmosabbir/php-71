
function checkFirstName(){
    var firstNameValue = $('#firstName').val().length;
    if(firstNameValue >= 6 && firstNameValue <= 15){
        $('#firstNameError').text(' ');
        return true;
    }else {
        $('#firstNameError').text('First name should be 6 to 15 characters.');
        return false;
    }
}

$('#firstName').click(function () {
    checkFirstName();
});

$('#firstName').blur(function () {
    checkFirstName();
});
$('#firstName').keyup(function () {
    checkFirstName();
});


function checkLastName(){
    var firstNameValue = $('#lastName').val().length;
    if(firstNameValue >= 6 && firstNameValue <= 15){
        $('#lastNameError').text(' ');
        return true;
    }else {
        $('#lastNameError').text('Last name should be 6 to 15 characters.');
        return false;
    }
}

$('#lastName').click(function () {
    checkLastName();
});

$('#lastName').blur(function () {
    checkLastName();
});
$('#lastName').keyup(function () {
    checkLastName();
});


function checkEmailAddress(){
    var pattern = new RegExp(/^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{3,4})$/);
    if(pattern.test($('#emailAddress').val())){
        $('#emailAddressError').text(' ');
        return true;
    }else {
        $('#emailAddressError').text('Email Address is invalid');
        return false;
    }
}
$('#emailAddress').click(function () {
    checkEmailAddress();
});

$('#emailAddress').blur(function () {
    checkEmailAddress();
});
$('#emailAddress').keyup(function () {
    checkEmailAddress();
});

function checkPassword(){
    var passwordLength = $('#password').val().length;
    if(passwordLength >= 6){
        $('#passwordError').text(' ');
        return true;
    }else {
        $('#passwordError').text('Password should be at least 6 characters long.');
        return false;
    }
}

$('#password').click(function () {
    checkPassword();
});

$('#password').blur(function () {
    checkPassword();
});
$('#password').keyup(function () {
    checkPassword();
});


function checkConfirmPassword(){
    var passwordValue = $('#password').val();
    var confirmPasswordValue = $('#confirmPassword').val();

    if(confirmPasswordValue === passwordValue ){
        $('#confirmPasswordError').text(' ');
        return true;
    }else {
        $('#confirmPasswordError').text('password does not match');
        return false;
    }
}

$('#confirmPassword').click(function () {
    checkConfirmPassword();
});

$('#confirmPassword').blur(function () {
    checkConfirmPassword();
});
$('#confirmPassword').keyup(function () {
    checkConfirmPassword();
});


$('#showHide').click(function () {
    var attrValue = $('#password').attr('type');
    if(attrValue == 'password'){
        $('#password').attr('type','text');
    } else {
        $('#password').attr('type', 'password')
    }
});


function checkGenderInfo() {
    var genderInfo = $('input[type="radio"]:checked').val();
    if(genderInfo === 'male' || genderInfo === 'female'){
        $('#genderError').text(' ');
        return true;
    }else {
        $('#genderError').text('please give your gender info');
        return false;
    }
}



function checkDistrictName(){
    var districtValue = $('#districtName').val();
    if(districtValue === ' '){
        $('#districtNameError').text('please give us your district info');
        return false;
    }else {
        $('#districtNameError').text(' ');
        return true;
    }
}

$('#districtName').change(function () {
    checkDistrictName();
});


$('#districtName').blur(function () {
    checkDistrictName();
});




$('#registrationForm').submit(function () {
    if(checkFirstName() === true && checkLastName() === true && checkEmailAddress() === true && checkPassword() === true && checkConfirmPassword() === true && checkDistrictName() === true && checkGenderInfo() === true){
        return true;
    } else {
        return false;
    }
});