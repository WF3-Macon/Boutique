<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boutique</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="js/functions.js" defer></script>
        <script src="js/homepage.js" defer></script>
    </head>
    <body>

        <!-- Header -->
        <header class="bg-dark text-center text-white py-4">
            <h1 class="fs-3">Ma boutique en ligne</h1>
        </header>

        <main class="container pt-5">
            <div class="row">

                <!-- Menu des catégories -->
                <div class="col-3">
                    <h2 class="fs-4 mb-3">Catégories</h2>
                    <nav class="nav flex-column gap-2">
                        <a class="nav-link p-0" href="#">Link</a>
                        <a class="nav-link p-0" href="#">Link</a>
                        <a class="nav-link p-0" href="#">Link</a>
                    </nav>
                </div>

                <!-- Articles -->
                <div class="col-9">
                    <h2 class="fs-4 mb-3">Articles</h2>

                    <!-- Error fetch() -->
                    <div id="error" class="alert alert-danger d-none"></div>

                    <!-- Listes des articles -->
                    <div class="row">
                        <div class="col-3 mb-5">
                            <img src="https://picsum.photos/300" alt="Photo" class="rounded img-fluid">
                            <p class="mt-2 mb-0 fw-bold">Titre de l'article</p>
                            <p>12 €</p>
                            <a href="product.php?id=" class="btn btn-warning">
                                Voir le produit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>