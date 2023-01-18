$(document).on('click', '#ShowFINE', function (e) {
    $.ajax({
        type: "GET",
        url: "fine.php",
        dataType: "html",
        success: function (data) {
            $("#fine-container").html(data);

        }
    });
});