$(document).ready(function(){

  var $nom = $('#lname'),
        $prenom = $('#fname'),
        $phone = $('#phone'),
        $mail = $('#mail'),
        $objet = $('#objet'),
        $valider=$('#valider')
        $message = $('#message');

  $valider.click(function(e){
    e.preventDefault(); // on annule la fonction par défaut du bouton d'envoi

    // puis on lance la fonction de vérification sur tous les champs :
    verifier($prenom);
    verifier($nom);
    verifier($message);
    isEmail($mail)


  });
});

function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(regex){
        mail.css({
    	    borderColor : 'red',
    	    color : 'red'
    	});
  return regex.test(email);
}

function verifier(champ){
    if(champ.val() == ""){ // si le champ est vide
        champ.css({ // on rend le champ rouge
    	    borderColor : 'red',
    	    color : 'red';
    }
  }
}
