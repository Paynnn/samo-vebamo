let niz=[2,7,2,9,10,23];
let sum = 0;

for (element of niz)
{
    if(element%2==0)
    {
        sum +=element;
    }
}
console.log(sum);
fetch('putanja/do/tvojih/podataka.json')
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    // Ovdje možete manipulirati podacima i prikazati ih na stranici
    prikaziProizvode(data.proizvodi);
  })
  .catch(function(error) {
    console.log('Došlo je do greške pri dohvatu podataka:', error);
  });
function prikaziProizvode(proizvodi) {
  var container = document.getElementById('proizvodi-container');
  
  proizvodi.forEach(function(proizvod) {
    var proizvodElement = document.createElement('div');
    proizvodElement.textContent = proizvod.naziv + ' - ' + proizvod.cijena + ' kn';
    
    container.appendChild(proizvodElement);
  });
}



json


{
  "proizvodi": [
    {
      "id": 1,
      "naziv": "Majica",
      "cijena": 20,
      "dostupno": true
    },
    {
      "id": 2,
      "naziv": "Hlače",
      "cijena": 40,
      "dostupno": true
    },
    {
      "id": 3,
      "naziv": "Tenisice",
      "cijena": 60,
      "dostupno": false
    }
  ]
}
