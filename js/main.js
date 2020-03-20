//API REST

window.addEventListener("load", () => {
 
 let collectionBtnNouvelle = document.querySelectorAll('button');

    //console.log(collectionBtnNouvelle.length);


    if (collectionBtnNouvelle){
    for (let btn of collectionBtnNouvelle){
            console.log(btn.id)
            btn.addEventListener('click',Ajax)
    }
}
});

function Ajax(evt) {
    
    //  instructions ici
    let maRequete = new XMLHttpRequest();
    console.log(maRequete)
    //////////////////////////////////CHANGER SELON LE NOM DU DOSSIER DE TRAVAIL
    maRequete.open('GET', 'http://localhost/2020-veille/wp-json/wp/v2/posts'); // modifier ici
    maRequete.onload = function () {
        console.log(maRequete)
        if (maRequete.status >= 200 && maRequete.status < 400) {
            let data = JSON.parse(maRequete.responseText);
            console.log(evt.target.dataset.checked)
            // instructions ici
            creationHTML(data);  // paramètres à ajouter
        } else {
            console.log('La connexion est faite mais il y a une erreur')
        }
    }
    maRequete.onerror = function () {
        console.log("erreur de connexion");
    }
    maRequete.send()
    

    // instructions à ajouter

}
///////////////////////////////////////////////////////

function creationHTML(postsData){
    let monHtmlString = '';
    for (elm of postsData) {
        monHtmlString += '<h2>' + elm.title.rendered + '</h2>'
        monHtmlString += elm.content.rendered;
    }

    
let contenuNouvelle = document.getElementById('contenuNouv');

    contenuNouvelle.innerHTML = monHtmlString; 
}





//Burger menu
window.addEventListener("load", () => {

    let btnBurger = document.getElementById('burger');
    let btnBurgerChk = document.getElementById('containerBurger');
    
    btnBurger.addEventListener('click',function(){
         //console.log('a');
        //btnBurgerChk.checked = true;
        
        if(btnBurgerChk.classList.contains('open')){
            
            btnBurgerChk.classList.remove('open');

            document.getElementById('divNav').style.width = "0%";

            document.getElementById('btn1').style.background = "#404040";
            document.getElementById('btn2').style.background = "#404040";
            document.getElementById('btn3').style.background = "#404040";
        }
        
        else{        
            btnBurgerChk.classList.add('open');

            document.getElementById('divNav').style.width = "100%";

            document.getElementById('btn1').style.background = "white";
            document.getElementById('btn2').style.background = "white";
            document.getElementById('btn3').style.background = "white";
        }

    })        
        
        
   


});