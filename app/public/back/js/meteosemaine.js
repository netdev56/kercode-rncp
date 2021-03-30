const joursSemaine = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];

let dateDuJour = new Date();
// Met le jour en entier + en français
let options = {weekday: 'long'};
let jourActuel = dateDuJour.toLocaleDateString('fr-FR', options);

// Met la première lettre en majuscule
jourActuel = jourActuel.charAt(0).toUpperCase() + jourActuel.slice(1);

// Affiche les jours de la semaine en fonction du jour consulté
let ordreDesJours = joursSemaine.slice(joursSemaine.indexOf(jourActuel)).concat(joursSemaine.slice(0, joursSemaine.indexOf(jourActuel)));


export default ordreDesJours;