$(".check").focus(function() {
    $(".check").keyup(function(event)
    {
        if (event.keyCode === 13) {
            $(".button-none").submit();
        }
    });
});
