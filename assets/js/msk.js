/**
 * Created by adrenaline on 16.06.16.
 */
$(document).ready(function() {
    document.getElementById("book-type").addEventListener("change", function () {
        
        var title = document.getElementById("len-title");

        if (this.value == "e") {
            title.innerHTML = "Продолжительность";
            $("#len-input").inputmask({
                mask: '9{1,3}ч. 9{1,2}м. 9{1,2}с.'
            });
        } else {
            title.innerHTML = "Кол-во страниц";
            $("#len-input").inputmask("remove");
        }

    });
});