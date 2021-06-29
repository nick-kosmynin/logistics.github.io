const hamburger = document.querySelector('.hamburger'),
menu = document.querySelector('.tablemenu'),
btnClose =document.querySelector('.tablemenu__close');

hamburger.addEventListener('click', ()=>{
    menu.classList.add('active');
});

btnClose.addEventListener('click', ()=>{
    menu.classList.remove('active');
});

//          ОТПРАВКА ФОРМЫ

$(document).ready(function(){
    $('#form').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "mailer/smart.php",
            data: $(this).serialize()
        }).done(function() {
            $(this).find("input").val("");


            $("form").trigger('reset');
        });
        return false;
    });
});