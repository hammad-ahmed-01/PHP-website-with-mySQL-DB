$(document).on('click', '#ShowINFO', function (e) {
    $.ajax({
        type: "GET",
        url: "info.php",
        dataType: "html",
        success: function (data) {
            $("#info-container").html(data);

        }
    });
});