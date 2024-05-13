
function fetchCharacters(page) {
    fetch(`https://rickandmortyapi.com/api/character?page=${page}`)
        .then(response => response.json())
        .then(data => {

            data.results.forEach(character => {

                const card = document.createElement('div');
                card.classList.add('card');
                card.style.backgroundColor = "blue";
                card.style.color = "white"
                card.style.width = "300px"
                card.style.height = "350px"


                const characterName = document.createElement('h2');
                characterName.textContent = character.name;

                const characterImage = document.createElement('img');
                characterImage.src = character.image;
                characterImage.alt = character.name;

                card.appendChild(characterName);
                card.appendChild(characterImage);

                document.body.appendChild(card);
            });

        
            if (data.info.next !== null) {
                fetchCharacters(page + 1);
            }
        })
        .catch(error => {
            console.error("Une erreur s'est produite lors de la récupération des données :", error);
        });

        
}

fetchCharacters(1);



