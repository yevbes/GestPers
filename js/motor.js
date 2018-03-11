$( document ).ready(function() {
    var loginBtn = $('#login');
    var loginForm = $('#login-form');

    // Show and hide box login
    loginBxDisplay(loginBtn,loginForm);
});


function loginBxDisplay (login,loginForm){
    login.click(function () {
        if (loginForm.is(":visible")){
            //loginForm.toggle('slide', 1000);
            loginForm.hide("slide", { direction: "right"}, 500);
        }else {
            loginForm.show("slide", { direction: "right"}, 500);
        }
        /*if (loginForm.hasClass('container-show')){
            loginForm.removeClass('container-show').addClass('container-hide');
        } else {
            loginForm.removeClass('container-hide').addClass('container-show');
        }*/
    });
}

