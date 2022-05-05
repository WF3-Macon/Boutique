/**
 * Fonctions
 */


/**
 * Affiche une erreur fetch()
 * 
 * @param String message
 * @param Element element
 * @return Void
 */
const errorAlert = (message, element) => {
    const el = document.querySelector(element);
    el.innerText = message;
    el.classList.remove('d-none');
}


/**
 * Création d'une carte de produit
 * 
 * @param Array product
 * @return String
 */
const cardProduct = (product) => {
    
}