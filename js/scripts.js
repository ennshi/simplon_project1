$(function(){
    $.ajax({
        url:"content.json",
        dataType: "json",
    })
    .done((data) => {
        
        let creperie = "";
        $(data.creperie).each((index, value) => {
            if(index == 0){
                creperie += "<p>" + value + "</p>";
            } else {
                creperie += "<p class='d-none d-sm-block'>" + value + "</p>";
            }
        });
        $(creperie).appendTo('#creperie_text');

        let chef = "";
        $(data.chef).each((index, value) => {
            if(index == 0){
                chef += "<p>" + value + "</p>";
            } else {
                chef += "<p class='d-none d-sm-block'>" + value + "</p>";
            }
        });
        $(chef).appendTo('#chef_text');

        let contacts = "<p>";
        $.each(data.contact, (key, value) => {
            contacts += value + "<br>";
        });
        contacts += "</p>";
        $(contacts).appendTo('#contacts');

    });

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

   
    const date= { 'date_plats' : $("#date_plats").val(), }; 
    const showPlats = (date) => {
        $.ajax({  
            type: 'POST',  
            url: '../crepes/php/content_plats.php', 
            data: date,
        })
        .done((data) => {
            $('#plats_date').html(data); 
        });
    };

    showPlats(date);

    $("#date_plats").change(() => { 
        let date= { 'date_plats' : $("#date_plats").val(), }; 
        showPlats(date);
    });

});