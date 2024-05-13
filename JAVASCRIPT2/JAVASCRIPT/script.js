// function saluer(prenom) {
//     console.log("Bonjour" + prenom + "!")
// }

// saluer("Alice");

// // exercice multiplication 

// function multiplication(a, b) {
//     return a * b;
// }

// const resultat = multiplication(8*7);

// console.log(resultat);

// // exercice condition et boucles

// let age = 18;

// if (age >= 18 ) {
//     console.log("majeur");
// }
//  else if (age < 18) {
//     console.log("mineur");
// }

// // exercice for

// for (let p = 1; p <= 20; p++) {
//     if (p % 2 === 0){
//         console.log(p);
//     }
    
// }

// //exercice while
// // const randomNumber = Math.floor((Math.random() * 100) + 1)

// // let inputUser = prompt("Veuillez entrer une valeur entre 1 et 100")

// // while (isNaN(inputUser)){
// //     inputUser = prompt("Veuillez entrer un nombre entre 1 et 100")
// // }  

// // while (inputUser != randomNumber){
// //     if (inputUser > randomNumber){
// //         inputUser = prompt("Le nombre est trop haut")
// //     }
    
// //     if (inputUser < randomNumber){
// //         inputUser = prompt("le nombre est trop bas")
// //     }

// //     if (inputUser == randomNumber){
// //         console.log("c'est gagné");
// //     }

// // }

// // exercice



// function nombreDeJours(num){
//     let nombreDeJours;

// switch (num) {
//     case 1:
//         nombreDeJours = 31;
//         break;
//     case 2:
//         if (new Date().getFullYear()%4 ==0){
//             nombreDeJours=29
//         }
//         else {nombreDeJours=28 }

//         break;
//     case 3:
//         nombreDeJours = 31;
//         break;
//     case 4:
//         nombreDeJours = 30;
//         break;
//     case 5:
//         nombreDeJours = 31;
//         break;
//     case 6:
//         nombreDeJours = 30;
//         break;
//     case 7:
//         nombreDeJours = 31;
//         break;
//     case 8:
//         nombreDeJours = 31;
//         break;
//     case 9:
//         nombreDeJours = 30;
//         break;
//     case 10:
//         nombreDeJours = 31;
//         break;
//     case 11:
//         nombreDeJours = 30;
//         break;
//     case 12:
//         nombreDeJours = 31;
//         break;
//     default:
//         nombreDeJours = "mois invalide";
// }


// console.log("nombre de jour : " + nombreDeJours);
// }

// nombreDeJours(2);
// console.log(2024%4)

// console.log(new Date())

// let annee = new Date().getFullYear()

// // manipulation du dom 

// let button = document.getElementsByTagName("button");
// console.log(button);
// button[0].addEventListener("click", function() {
// let p = document.getElementsByTagName("p");
// p[0].textContent = "Hello World";
// });

// // Dom, ajouter une couleur 

// let button = document.getElementById("button");
// button.addEventListener("click", function() {
//     let p = document.getElementById("Paragraphe");
//     p.style.color = "red";
// });

// ajouter un élément 

// let btn3 = document.getElementById("btn3");
// let ul = document.getElementById("ul1");
// btn3.addEventListener("click", function() {
//     let newli = document.createElement("li");
//     newli.textContent = 'Nouvel élément';
//     ul.appendChild(newli)
//     console.log("Text ajouter");
// });

// supprimer un élément

// document.getElementById('suppBouton').addEventListener('click', function() {
//     let liste = document.getElementById('maListe');
//       liste.removeChild(liste.children[0]);
//     }
//   );

  // gestion d'évenement multiples

  let button = document.querySelectorAll("#bouton1, #bouton2, #bouton3")
  console.log(button)
  button.forEach((button) => {
    button.addEventListener("click", (event) => {
    console.log(event.target.id)
    })
  })
  
    
  