$(document).on('click', '#ShowUSER', function (e) {
    $.ajax({
        type: "GET",
        url: "user.php",
        dataType: "html",
        success: function (data) {
            $("#user-container").html(data);

        }
    });
});