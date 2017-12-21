$(document).ready(function () {
    $(".form-validate").submit(function () {
        // var psw = document.forms["my-form"]["psw"].value;
        var psw = $("[name='psw']").val();
        var psw_repeat = $("[name='psw-repeat']").val();
        var number = psw.length;
        if((psw != psw_repeat) || (number<=5)){
            $(".warming").show();
            return false;
        }
        return true;
    });
});