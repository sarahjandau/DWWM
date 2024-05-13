// let turnplayer = true
// const rectangle1 = document.querySelector(".rectangle1")
// const rectangle2 = document.querySelector(".rectangle2")
// const rectangle3 = document.querySelector(".rectangle3")
// const rectangle4 = document.querySelector(".rectangle4")
// const rectangle5 = document.querySelector(".rectangle5")
// const rectangle6 = document.querySelector(".rectangle6")
// const rectangle7 = document.querySelector(".rectangle7")
// const rectangle8 = document.querySelector(".rectangle8")


// rectangle1.addEventListener("click", () => {
//     if (turnplayer == true){
//         rectangle1.style.backgroundColor = "yellow";
//         rectangle2.style.backgroundColor = "red";
//         rectangle3.style.backgroundColor = "red";
//         rectangle4.style.backgroundColor = "red";
//         return turnplayer = false

//     }
    
// })
// rectangle2.addEventListener("click", () => {
//     if (turnplayer == true){
//         rectangle2.style.backgroundColor = "yellow";
//         rectangle1.style.backgroundColor = "red";
//         rectangle3.style.backgroundColor = "red";
//         rectangle4.style.backgroundColor = "red";
//         return turnplayer = false

//     }

// })

// rectangle3.addEventListener("click", () => {
//     if (turnplayer == true){
//         rectangle3.style.backgroundColor = "yellow";
//         rectangle2.style.backgroundColor = "red";
//         rectangle1.style.backgroundColor = "red";
//         rectangle4.style.backgroundColor = "red";
//         return turnplayer = false

//     }

// })

// rectangle4.addEventListener("click", () => {
//     if (turnplayer == true){
//         rectangle4.style.backgroundColor = "yellow";
//         rectangle2.style.backgroundColor = "red";
//         rectangle3.style.backgroundColor = "red";
//         rectangle1.style.backgroundColor = "red";
//         return turnplayer = false

//     }

// })


//     rectangle5.addEventListener("click", () => {
//         if (turnplayer == false){
//             rectangle5.style.backgroundColor = "yellow";
//             rectangle6.style.backgroundColor = "red";
//             rectangle7.style.backgroundColor = "red";
//             rectangle8.style.backgroundColor = "red";
//             return turnplayer = true

//         }
    
// })

// rectangle6.addEventListener("click", () => {
//     if (turnplayer == false){
//         rectangle5.style.backgroundColor = "red";
//         rectangle6.style.backgroundColor = "yellow";
//         rectangle7.style.backgroundColor = "red";
//         rectangle8.style.backgroundColor = "red";
//         return turnplayer = true

//     }

// })

// rectangle7.addEventListener("click", () => {
//     if (turnplayer == false){
//         rectangle5.style.backgroundColor = "red";
//         rectangle6.style.backgroundColor = "red";
//         rectangle7.style.backgroundColor = "yellow";
//         rectangle8.style.backgroundColor = "red";
//         return turnplayer = true

//     }
// })

// rectangle8.addEventListener("click", () => {
//     if (turnplayer == false){

//         rectangle5.style.backgroundColor = "red";
//         rectangle6.style.backgroundColor = "red";
//         rectangle7.style.backgroundColor = "red";
//         rectangle8.style.backgroundColor = "yellow";
//         return turnplayer = true
//     }

// })


// Selectionner un rectangle
// selectionner ce rectangle et ajouter un evenement click
// ajouter un background jaune 




// document.addEventListener("keydown", (event) => {
//     console.log("event");
// })


// Créer 4 rectangles et lorsqu'on clique dessus ça affiche l'evenement par id

// const rectangle1 = document.querySelector("#rectangle1")
// const rectangle2 = document.querySelector("#rectangle2")
// const rectangle3 = document.querySelector("#rectangle3")
// const rectangle4 = document.querySelector("#rectangle4")

// rectangle1.addEventListener("click", (event) =>{
//     console.log(event.target.id);
// })

// rectangle2.addEventListener("click", (event) =>{
//     console.log(event.target.id)
// })

// rectangle3.addEventListener("click", (event) =>{
//     console.log(event.target.id)
// })

// rectangle4.addEventListener("click", (event) =>{
//     console.log(event.target.id)
// })

// changer le background en jaune 

// const rectangle1 = document.getElementById("rectangle1")
// const rectangle2 = document.getElementById("rectangle2")
// const rectangle3 = document.getElementById("rectangle3")
// const rectangle4 = document.getElementById("rectangle4")

// rectangle1.addEventListener("click", (event) =>{
//     event.target.style.backgroundColor = "yellow"
//     console.log(event.target.id);
// })

// rectangle2.addEventListener("click", (event) =>{
//     event.target.style.backgroundColor = "yellow"
//     console.log(event.target.id)
// })

// rectangle3.addEventListener("click", (event) =>{
//     event.target.style.backgroundColor = "yellow"
//     console.log(event.target.id)
// })

// rectangle4.addEventListener("click", (event) =>{
//     event.target.style.backgroundColor = "yellow"
//     console.log(event.target.id)
// })


// Souris dans le rectangle qui affiche la position 

// const rectangle1 = document.getElementById("rectangle1")

// rectangle1.addEventListener("mousemove", (event) =>{
//     console.log(event.clientX, event.clientY)
// })

// Click bouton, créer une div qui va changer de style et suivre ma souris

// const bouton = document.getElementById("bouton")
// const rectangle1 = document.getElementById("rectangle1")
// let divStyle ;


// bouton.addEventListener("click", () =>{
//     divStyle = document.createElement ('div');
//     divStyle.id = 'divStyle'
//     rectangle1.appendChild(divStyle) 
    
// })

// rectangle1.addEventListener("mousemove", (event) =>{
//     if (divStyle){
//         const mouseX = event.clientX;
//         const mouseY = event.clientY;

        
//         const offsetX = divStyle.offsetWidth / 2 ;
//         const offsetY = divStyle.offsetHeight / 2 ;
        
//         divStyle.style.left = mouseX - offsetX + 'px';
//         divStyle.style.top = mouseY - offsetY + 'px';


//         divStyle.style.display = "block"
//     }
// console.log(event)

// })

// const bouton = document.getElementById("bouton");
// let rectangle1;

// bouton.addEventListener("click", () => {
//     rectangle1 = document.createElement('div');
//     rectangle1.id = 'rectangle1'; 
//     rectangle1.style.backgroundColor = "red";
//     rectangle1.style.width = "200px"
//     rectangle1.style.height = "100px"
//     document.body.appendChild(rectangle1);

//     setTimeout(() => {
//         rectangle2 = document.createElement('div');
//         rectangle2.id = 'rectangle2'; 
//         rectangle2.style.backgroundColor = "blue";
//         rectangle2.style.width = "200px"
//         rectangle2.style.height = "100px"
//         document.body.appendChild(rectangle2);
//         console.log("rectangle 2");
//       }, 5000);
// });


// let data = {
//     "id": "0001",
//     "type": "gateau",
//     "nom": "donuts",
//     "price": 0.55,
//     "nappages":
//     {
//         "nappage":
//             [
//                 { "id": "1001", "type": "Chocolat" },
//                 { "id": "1002", "type": "Fraise" },
//                 { "id": "1003", "type": "Framboise" },
//                 { "id": "1004", "type": "Vanille" }
//             ]
//     },
//     "topping":
//         [
//             { "id": "5001", "type": "Sans Topping" },
//             { "id": "5002", "type": "Perles de sucre" },
//             { "id": "5003", "type": "Copos de coco" },
//             { "id": "5004", "type": "Billes de chocolat" },
//             { "id": "5005", "type": "Vermisselles de chocolat" },
//         ]
//     }
    
//     const card = document.getElementById("card")
//     let card1 ;

//     card1 = document.createElement('div');
//         card1.id = 'card1'; 
//         card1.style.backgroundColor = "#F5F5DC";
//         card1.style.width = "300px"
//         card1.style.height = "500px"
//         document.body.appendChild(card1);

//         const h1Card = document.createElement('h1');
//         h1Card.textContent = data.type + "  " + data.nom;
//         card1.appendChild(h1Card);

//         const para = document.createElement('para');
//         para.id = 'para'; 
//         para.textContent = "Prix: " + data.price;
//         card1.appendChild(para);

//         data.nappages.nappage.forEach(element => {
//             const nappagePara = document.createElement('p')
//             nappagePara.textContent = element.type
//             card1.appendChild(nappagePara)
        
//         })

   
//     data.nappages.nappage.forEach(element => {
//     const nappagePara = document.createElement('p')
//     nappagePara.textContent = element.type
//     card.appendChild(nappagePara)

// })


// const form = document.createElement('form')
// body.appendChild(form)

// data.nappages.nappage.forEach(element => {
//     const inputRadio = document.createElement('input')
//     inputRadio.type = "radio"
//     inputRadio.id = element.type
//     inputRadio.name = "nappage"
//     inputRadio.value = element.type
//     form.appendChild(inputRadio)

//     const labelRadio = document.createElement('label')
//     labelRadio.htmlFor = element.type
//     labelRadio.textContent = element.type
//     form.appendChild(labelRadio)
// })

// const br = document.createElement('br')
// form.appendChild(br)

// data.topping.forEach(element => {
//     console.log(element.type);
//     const inputRadio = document.createElement('input')
//     inputRadio.type = "radio"
//     inputRadio.id = element.type
//     inputRadio.name = "topping"
//     inputRadio.value = element.type
//     form.appendChild(inputRadio)
    
//     const labelRadio = document.createElement('label')
//     labelRadio.htmlFor = element.type
//     labelRadio.textContent = element.type
//     form.appendChild(labelRadio)
// })

// const btn = document.createElement('button')
// btn.textContent = "Valider"
// btn.addEventListener("click", () => {
//     const h2 = document.createElement('h2')
// })
// const br2 = document.createElement('br')
// form.appendChild(br2)

// form.appendChild(btn)



// créer une div globale de la card
// Donner du style
// Rattacher la div au body 

// créer un element Type et nom
// dans cet element je lui change le texte, changer le textContent pour le type et le nom
//  rattacher cet element au body 

// créer un element Prix
// dans cet element je lui change le texte, changer le textContent pour le prix
//  rattacher cet element au body 

//  faire un for each avec le tableau ( pour l'étape des nappages)

// a linterieur du for each : creation d'élement,


form.addEventListener('submit', (event) => {
    event.preventDefault()
    let nom = document.getElementById('nom').value;
    let prenom = document.getElementById('prenom').value;
    let telephone = document.getElementById('telephone').value;
    let message = document.getElementById('message').value;
    let form = {
        nom, 
        prenom, 
        telephone,
        message,
     }

    console.log(form);
})











