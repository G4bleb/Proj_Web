$(document).ready(function(){

    var $prenom = $('#fname'),
        $nom = $('#lname'),
        $mail = $('#mail'),
        $phone = $('#phone'),
        $envoi = $('#envoi'),
        $message = $('#message'),
        $champ = $('.champ');


    $envoi.click(function(e){
        e.preventDefault(); // on annule la fonction par défaut du bouton d'envoi

        // puis on lance la fonction de vérification sur tous les champs :
        verifier($prenom);
        verifier($nom);
        verifier($mail);
        verifier($message);
    });

    function verifier(champ){
        if(champ.val() == ""){ // si le champ est vide
            champ.css({ // on rend le champ rouge
    	        borderColor : 'red',
    	        color : 'red'
    	    });
        }
    }

});
