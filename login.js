$(document).on('click', '#ShowLOGIN', function (e) {
    $.ajax({
        type: "GET",
        url: "login.php",
        dataType: "html",
        success: function (data) {
            $("#login-container").html(data);

        }
    });
});