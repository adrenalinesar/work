/**
 * Created by adrenaline on 17.06.16.
 */
$(document).ready(function() {

    $("#word").autocomplete({
        source: function(req, res){
            $.ajax({
                url: '/search',
                type: 'POST',
                data: {
                    "params": {
                        type: $('#search-type').val(),
                        word: $('#word').val()
                    }
                },
                success: function (data) {

                    res(
                        JSON.parse(data)
                    );
                }
            });
        },
        minLength: 2
    });


});