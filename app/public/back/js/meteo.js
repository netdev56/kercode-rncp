import ordreDesJours from './meteosemaine.js';

const cleapi = '45b8929a34762150a8abca244d9b79ef';
let resultatApi;

const temps = document.querySelector('.temps');
const temperature = document.querySelector('.temperature');
const heurePrevision = document.querySelectorAll('.heure-prevision');
const heureValeur = document.querySelectorAll('.heure-valeur');
const joursPrevision = document.querySelectorAll('.jours-prevision');
const joursValeur = document.querySelectorAll('.jours-valeur');
const imageMeteo = document.querySelector('.imagemeteo');

// Coordonnées de Pluneret
let longitude = -2.951392;
let latitude = 47.685543;
apimeteo(longitude,latitude);

function apimeteo(longitude,latitude){
    
    fetch(`https://api.openweathermap.org/data/2.5/onecall?lat=${latitude}&lon=${longitude}&exclude=minutely&units=metric&lang=fr&appid=${cleapi}`)
    // Promesse 
    .then((reponse) => {
        return reponse.json();
    })
    .then((data) => {
        console.log(data);
        resultatApi = data;

        // Affichage de la température + description 
        temps.innerText = resultatApi.current.weather[0].description;
        temperature.innerText = `${Math.trunc(resultatApi.current.temp)}°`;


        // Affichage des heures + température
        let heureActuelle = new Date().getHours();

        // --Heures
        for(let i = 0; i < heurePrevision.length; i++){

            let heureIncremente = heureActuelle + i *3;

            // Condition pour changer de jour après 24h
            if(heureIncremente > 24){
                heurePrevision[i].innerText = `${heureIncremente - 24}h`;
            }else if(heureIncremente === 24){
                heurePrevision[i].innerText = `00h`;
            }else{
                heurePrevision[i].innerText = `${heureIncremente}h`;
            }
            

        }


        // --température
        for(let j = 0; j < heureValeur.length; j++){
            heureValeur[j].innerText = `${Math.trunc(resultatApi.hourly[j * 3].temp)}°`;
        }


        //Affiche les 3 première lettre des jours
        for(let k = 0; k < ordreDesJours.length; k++){
            joursPrevision[k].innerText = ordreDesJours[k].slice(0,3);
        }

        // Temprérateure pour chacun des jours
        for(let l = 0; l < 7; l++){
            joursValeur[l].innerText = `${Math.trunc(resultatApi.daily[l + 1].temp.day)}°`;
        }


        // Affichage de l'image
        imageMeteo.src = `./app/public/back/images/apimeteo/${resultatApi.current.weather[0].icon}.svg`;

    })

    
}