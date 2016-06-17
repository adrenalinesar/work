/**
 * Created by adrenaline on 16.06.16.
 */
$(document).ready(function(){
    $('body').on('click', '#add-btn', function(){
        //console.log($("#len-input").inputmask("unmaskedvalue"));
        
        var url = '/products/add';

        params = {
            "params": {
                name: $('#book-name').val(),
                author : $('#book-author').val(),
                type : $('#book-type').val(),
                length : $('#len-input').val()
            }
        };

        $.post(url, params, function(res){
            console.log(JSON.parse(res));
            console.log(res[status]);
            var result = JSON.parse(res);
            if(result.status === 'ok'){
               alert("все ок");
            } else {
                alert("все плохо");
            }
        });
    });


});