$(document).on('click', '#ShowBOOK', function (e) {
    $.ajax({
        type: "GET",
        url: "book.php",
        dataType: "html",
        success: function (data) {
            $("#book-container").html(data);

        }
    });
});