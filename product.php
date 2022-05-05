<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boutique</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- JS only -->
        <script src="js/functions.js" defer></script>
        <script src="js/product.js" defer></script>
    </head>
    <body>

        <!-- Header -->
        <header class="bg-dark text-center text-white py-4">
            <h1 class="fs-3">Ma boutique en ligne</h1>
        </header>

        <main class="container pt-5">
            <h2 class="fs-4 mb-3 category-name"></h2>

            <!-- Chargement en cours... -->
            <div class="text-center spinner-article py-5">
                <div class="spinner-border text-warning" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>

            <!-- Error fetch() -->
            <div id="error" class="alert alert-danger d-none"></div>

            <!-- Détail d'un article -->
            <div class="row"></div>
        </main>
    </body>
</html>
