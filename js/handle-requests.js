$(document).ready(function () {
    $("form").on("submit", formHandler);
});

    function formHandler(ev) {
        ev.preventDefault();
        reg = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
        
        if ($("#name").val() === "") {
            $(".feedback").html("<h3>Errors:</h3><ul><li>You have to enter a name!</li>");
        } else if ($("#email").val() === "") {
            $(".feedback").html("<h3>Errors:</h3><ul><li>You have not entered an email!</li>");
        } else if(!reg.test($("#email").val())){
            $(".feedback").html("<h3>Errors:</h3><ul><li>Invalid Email!</p>");
            $("#email").val("");   
        } else if ($("#message").val() === "") {
            $(".feedback").html("<h3>Errors:</h3><ul><li>You have to enter a message!</li>");
        } else {
            $(".feedback").html("<p>...Sending email to server.</p>");
            $.ajax({
                type: "post",
                url: "send-email.php",
                data: {
                    fn: $("#name").val(),
                    em: $("#email").val(),
                    msg: $('#message').val()
                }
            }).done(function(rsp){
                $(".feedback").html(rsp);
            }).fail(function (jqObject, b, c){
                $(".feedback").html(c);
            });
        }
    }

