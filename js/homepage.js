/**
 * Page d'accueil
 */

/**
 * Catégories
 */
fetch('https://fakestoreapi.com/products/categories')
    .then(res => res.json())
    .then(categories => {
        // Cacher le loader
        const loader = document.querySelector('.spinner-category');
        loader.classList.add('d-none');

        // Récupération du menu
        const nav = document.querySelector('.nav');

        // Boucle sur le tableau reçu
        categories.forEach(category => {
            // <a class="nav-link p-0" href="#">Link</a>
            const link = document.createElement('a');
            link.innerText = category;
            link.href = `category.php?name=${category}`;
            link.classList.add('nav-link', 'p-0');

            // Ajoute le lien au menu
            nav.appendChild(link);
        });
    })
    .catch(error => {
        errorAlert(error.message, '.alert-danger');
    });


/**
 * Articles
 */