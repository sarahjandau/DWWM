function fetchLocations(page) {
    const table = document.getElementById('locationTable');

    fetch(`https://rickandmortyapi.com/api/location?page=${page}`)
        .then(response => response.json())
        .then(data => {

            data.results.forEach(character => {
                data.results.forEach(location => {
                    const table = document.createElement('tr');
    
                    const table = document.createElement('td');
                    nameCell.textContent = location.name;
    
                    const table = document.createElement('td');
                    typeCell.textContent = location.type;
    
                    row.appendChild(nameCell);
                    row.appendChild(typeCell);
    
                    table.appendChild(row);
                });
    
                if (page < 7) { 
                    fetchLocations(page + 1);
                }
            })
            .catch(error => {
                console.error("Une erreur s'est produite lors de la récupération des données de localisation :", error);
            });
            });
        }

    }