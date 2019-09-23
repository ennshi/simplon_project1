$(function(){
    $(".nav-link").on("click", function(){
        $(".navbar-nav ").find(".active").removeClass("active");
        $(this).addClass("active");
        $('.navbar-collapse').collapse('hide');
    });


    $('#sbmtBtn').click(function() {
        let msg = confirm("envoyer?");
        		if(msg){
        let formData = {
            'prenom' : $('input#prenom').val(),
            'nom' : $('input#nom').val(),
            'email' : $('input#mail').val(),
            'phone' : $('input#phone').val(),
            'adresse' : $('textarea[name=adresse]').val(),
        };
        
        $.ajax({  
            type: 'POST',  
            url: '../crepes/php/reserver.php', 
            data: formData,
        })
        .done(function(data){
            alert(data);
        });
    }
    });
});