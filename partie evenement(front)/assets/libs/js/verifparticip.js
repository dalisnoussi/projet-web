


function ValidateEmail_mdp(){

 

   var email=document.getElementById("email").value;
   if (email.includes('@nadhfni.tn')) {} else {alert("verifier que votre mail est de type @nadhfni.tn ");
     return ;}
   


 

   var motdepasse=document.getElementById("password").value;
    if (motdepasse.length!=8)
          {alert ("mot de passe doit avoir 8 caracteres");
             return;}

       alert("adresse validée");

}