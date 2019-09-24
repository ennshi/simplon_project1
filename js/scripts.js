$(function(){
    $(".nav-link").on("click", () => {
        $(".navbar-nav ").find(".active").removeClass("active");
        $(this).addClass("active");
        $('.navbar-collapse').collapse('hide');
    });

    $('#resBtn').click(() => {
        $('#sbmtBtn').addClass('clicked');
    });
    $('#comBtn').click(() => {
        if($('#sbmtBtn').hasClass('clicked')){
            $('#sbmtBtn').removeClass('clicked');
        }
    });

    $('#sbmtBtn, #sendBtn').click(() => {
        
        let formData = ($('#sbmtBtn').hasClass('clicked')) ? {
            'prenom' : $('input#prenom').val(),
            'nom' : $('input#nom').val(),
            'email' : $('input#mail').val(),
            'phone' : $('input#phone').val(),
            'adresse' : $('textarea[name=adresse]').val(),
        } : {
            'prenom' : $('input#prenom_com').val(),
            'email' : $('input#mail_com').val(),
            'comment' : $('textarea[name=comment]').val(),
        };

        let urlPhp = ($('#sbmtBtn').hasClass('clicked')) ? '../crepes/php/reserver.php' :
        '../crepes/php/comment.php';

        $.ajax({  
            type: 'POST',  
            url: urlPhp, 
            data: formData,
        })
        .done((data) => {
            const regex = /^Merci*/;
            if(data.match(regex)){
                if($('#sbmtBtn').hasClass('clicked')){
                    $('#sbmtBtn').removeClass('clicked');
                    $('#resModal').find('form').trigger('reset');
                    $('#resModal').modal('hide');
                }
                $('#comModal').find('form').trigger('reset');
                $('#comModal').modal('hide');
            }
            alert(data);
        });
    });
});