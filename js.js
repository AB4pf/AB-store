window.addEventListener("load" ,desButton);

function desButton(){
    document.getElementById("valider").disabled=true;
}

document.getElementById("MDP").addEventListener("keyup",verifMDP);
document.getElementById("MDP2").addEventListener("keyup",verifMDP);

function verifMDP(){
    let mdp1= document.getElementById("MDP").value;
    let mdp2= document.getElementById("MDP2").value;
    if (mdp1==mdp2){
        document.getElementById("valider").disabled=false;
    }else{
        document.getElementById("valider").disabled=true;
    }
}

