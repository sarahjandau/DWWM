//Modal pour afficher regles du jeu 

let boutonOuvrirModal = document.getElementById("ouvrirModal");

let modal = document.getElementById("modal");

let boutonFermerModal = document.getElementsByClassName("close")[0];

boutonOuvrirModal.addEventListener("click", function() {
    console.log(modal)
    modal.style.display = "block";
});

boutonFermerModal.addEventListener("click", function() {
    modal.style.display = "none";
});

window.addEventListener("click", function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
});

// Switch pour aller de page d'accueil a page personnage

let boutonJouer = document.getElementById("jouer")

let sectionAccueil = document.getElementById("accueil");
let sectionSelectCharacter = document.getElementById("selectCharacter");

boutonJouer.addEventListener("click", function() {
    sectionAccueil.style.display = "none";
    sectionSelectCharacter.style.display = "block"
    
});



// tableau personnages

let tab = [
    {
        nomClass : "Sarah",
        pv : 10,
        atk : 5,
        img : "./images/SARAH.jpg"
    },
    {
        nomClass : "Emy",
        pv : 20,
        atk : 3,
        img : "./images/EMY.jpg"
    },
    {
        nomClass : "Remy",
        pv : 8,
        atk : 8,
        img : "./images/REMY.jpg"
    },
    {
        nomClass : "Thomas",
        pv : 30,
        atk : 1,
        img : "./images/Thomas.jpg"
    },
    {
        nomClass : "Gaetan",
        pv : 30,
        atk : 1,
        img : "./images/Gaetan.jpg"
    }
];

const Jouer = document.querySelector('.Jouer')
let player1;
let player2;
let player1Name;
let player2Name;

let turnplayer = true
const player1Sarah = document.querySelector('.player1Sarah')
const player1Emy = document.querySelector('.player1Emy')
const player1Remy = document.querySelector('.player1Remy')
const player1Thomas = document.querySelector('.player1Thomas')
const player1Gaetan = document.querySelector('.player1Gaetan')
const player2Sarah = document.querySelector('.player2Sarah')
const player2Emy = document.querySelector('.player2Emy')
const player2Remy = document.querySelector('.player2Remy')
const player2Thomas = document.querySelector('.player2Thomas')
const player2Gaetan = document.querySelector('.player2Gaetan')

player1Sarah.addEventListener('click', () => {
    if (turnplayer == true){
    player1Sarah.style.borderColor = "Violet"
    player1Emy.style.borderColor = "white"
    player1Remy.style.borderColor = "white"
    player1Thomas.style.borderColor = "white"
    player1Gaetan.style.borderColor = "white"
    player1 = Object.assign({}, tab[0])

    return turnplayer = false

    }
})
player1Emy.addEventListener('click', () => {
    if (turnplayer == true){
    player1Sarah.style.borderColor = "White"
    player1Emy.style.borderColor = "Violet"
    player1Remy.style.borderColor = "white"
    player1Thomas.style.borderColor = "white"
    player1Gaetan.style.borderColor = "white"
    player1 = Object.assign({}, tab[1])
    return turnplayer = false

    }
})
player1Remy.addEventListener('click', () => {
    if (turnplayer == true){
    player1Sarah.style.borderColor = "White"
    player1Emy.style.borderColor = "white"
    player1Remy.style.borderColor = "Violet"
    player1Thomas.style.borderColor = "white"
    player1Gaetan.style.borderColor = "white"
    player1 = Object.assign({}, tab[2])
    return turnplayer = false

    }
})
player1Thomas.addEventListener('click', () => {
    if (turnplayer == true){
    player1Sarah.style.borderColor = "White"
    player1Emy.style.borderColor = "white"
    player1Remy.style.borderColor = "white"
    player1Thomas.style.borderColor = "Violet"
    player1Gaetan.style.borderColor = "white"
    player1 = Object.assign({}, tab[3])
    return turnplayer = false

    }
})
player1Gaetan.addEventListener('click', () => {
    if (turnplayer == true){
    player1Sarah.style.borderColor = "White"
    player1Emy.style.borderColor = "white"
    player1Remy.style.borderColor = "white"
    player1Thomas.style.borderColor = "White"
    player1Gaetan.style.borderColor = "Violet"
    player1 = Object.assign({}, tab[4])
    return turnplayer = false

    }
    
})


player2Sarah.addEventListener('click', () => {
    if (turnplayer == false){
    player2Sarah.style.borderColor = "Violet"
    player2Emy.style.borderColor = "white"
    player2Remy.style.borderColor = "white"
    player2Thomas.style.borderColor = "white"
    player2Gaetan.style.borderColor = "white"
    player2 = Object.assign({}, tab[0])
    return turnplayer = true

    }
})
player2Emy.addEventListener('click', () => {
    if (turnplayer == false){
    player2Sarah.style.borderColor = "White"
    player2Emy.style.borderColor = "Violet"
    player2Remy.style.borderColor = "white"
    player2Thomas.style.borderColor = "white"
    player2Gaetan.style.borderColor = "white"
    player2 = Object.assign({}, tab[1])
    return turnplayer = true

    }
})
player2Remy.addEventListener('click', () => {
    if (turnplayer == false){
    player2Sarah.style.borderColor = "White"
    player2Emy.style.borderColor = "white"
    player2Remy.style.borderColor = "Violet"
    player2Thomas.style.borderColor = "white"
    player2Gaetan.style.borderColor = "white"
    player2 = Object.assign({}, tab[2])
    return turnplayer = true

    }
})
player2Thomas.addEventListener('click', () => {
    if (turnplayer == false){
    player2Sarah.style.borderColor = "White"
    player2Emy.style.borderColor = "white"
    player2Remy.style.borderColor = "white"
    player2Thomas.style.borderColor = "Violet"
    player2Gaetan.style.borderColor = "white"
    player2 = Object.assign({}, tab[3])
    return turnplayer = true

    }
})
player2Gaetan.addEventListener('click', () => {
    if (turnplayer == false){
    player2Sarah.style.borderColor = "White"
    player2Emy.style.borderColor = "white"
    player2Remy.style.borderColor = "white"
    player2Thomas.style.borderColor = "White"
    player2Gaetan.style.borderColor = "Violet"
    player2 = Object.assign({}, tab[4])
    return turnplayer = true

    }
})

// Switch de page personnage à page combat

let sectionBattle = document.getElementById("Battle");
const img1 = document.querySelector(".imgPerso1")
const img2 = document.querySelector(".imgPerso2")
const nameplayer1 = document.querySelector(".namePersonnage1")
const nameplayer2 = document.querySelector(".namePersonnage2")
const viePlayer1 = document.querySelector("#viePlayer1")
const viePlayer2 = document.querySelector("#viePlayer2")

btnStartBattle.addEventListener("click", () => {
    sectionSelectCharacter.style.display = "none";
    sectionBattle.style.display = "block";
    img1.src = player1.img
    img2.src = player2.img
    nameplayer1.textContent = player1.nomClass
    nameplayer2.textContent = player2.nomClass
    viePlayer1.textContent = player1.pv
    viePlayer2.textContent = player2.pv
})

// Combat







