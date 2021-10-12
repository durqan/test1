$(function () {

    $('form').on('submit', function (e) {
        e.preventDefault();

        let data = $(this).serialize();

        $.ajax({
            url: '/table',
            dataType: 'text',
            data: data,
            success: function (succes) {
                $('.table').html(succes);
            }
        });
    })
});
