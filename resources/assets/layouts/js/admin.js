$(document).ready(function () {
    $(".form-validate").submit(function () {
        // var psw = document.forms["my-form"]["psw"].value;
        var psw = $("[name='password']").val();
        var psw_repeat = $("[name='Retype_password']").val();
        var number = psw.length;
        if((psw != psw_repeat) || (number<=5)){
            $(".warming").show();
            return false;
        }
        return true;
    });
});