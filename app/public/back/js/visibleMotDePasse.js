const boutonMotDePasse = document.getElementById('btn_password');
const inputMotDePasse = document.getElementById('pass');

boutonMotDePasse.addEventListener('click', () => {
    inputMotDePasse.type = inputMotDePasse.type === 'password' ? 'text' : 'password';

    // Permet de changer le bouton une fois cliqué
    boutonMotDePasse.innerHTML = inputMotDePasse.type === 'password' ? '<img src="app/public/back/images/icones/view.png">' : '<img src="app/public/back/images/icones/invisible.png">';

})