const button_modif = document.getElementsByClassName("modif");
console.log("tutu");
let taille = button_modif.length;
for(let i = 0; i<taille; i++){
    console.log(button_modif[i]);
    button_modif[i].addEventListener("click", () =>{
        /**
         * 1. Recup le frere suivant du bouton cliqué
         * 2. Modifier la propriété display en block
         */
        let div_modif = button_modif[i].nextElementSibling;
        div_modif.style = ("display:block;");
    });

}

  