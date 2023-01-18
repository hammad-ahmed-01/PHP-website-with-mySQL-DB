$(document).on('click', '#ShowISSUE', function (e) {
    $.ajax({
        type: "GET",
        url: "issue.php",
        dataType: "html",
        success: function (data) {
            $("#issue-container").html(data);

        }
    });
});