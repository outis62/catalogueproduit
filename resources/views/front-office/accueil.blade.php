<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique</title>
    <link rel="stylesheet" href="dist/css/appli.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="header">
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-1">
                <a href="https://www.switch-maker.com" target="_blank">
                <img src="{{asset('dist/img/switchmaker.png')}}" alt="LogoSwitchMaker">
                </a>
            </div>
            <div class="col-md-4 offset-3">
                <select id="categorieFilter" name="libele_categorie" class="form-control" style="width: 190px;">
                    <option value="Tous">Toutes les Catégories</option>
                    @foreach ($categories as $categorie)
                        <option value="{{ $categorie->libele_categorie }}">{{ $categorie->libele_categorie }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <input type="text" id="searchProduct" class="form-control" placeholder="Rechercher un produit" style="width: 190px;">
            </div>
        </div>
    </div>
    </header>
    <div class="grid">
        <h3 class="text-center">Nos Produits</h3>
        <div id="noResultsMessage" class="alert alert-warning" style="display: none;">
            <p>Nous n'avons pas ce produit !</p>
        </div>
        <div class="product-grid">
        @foreach($produit as $produit)
            <div class="product {{ $produit->libele_categorie }} text-center">
                <img src="{{ asset('dist/img/' . $produit->image) }}" alt="{{ $produit->libele_produit }}" style="max-width: 100px;" />
                <h6>{{$produit->libele_produit}}</h6>
                <p>Prix: <span class="text-primary">{{$produit->prix}} FCFA</span></p>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#produit{{$produit->id}}">Détail</button>

                <div class="modal fade" id="produit{{$produit->id}}" tabindex="-1" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Détails du produit</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="col-md-8 text-center">
                    <img src="{{ asset('dist/img/' . $produit->image) }}" alt="{{ $produit->libele_produit }}" style="max-width: 100px;">
                    <p class=" text-primary">{{$produit->libele_produit}}</p>
                    <p>Prix: <span class=" text-primary">{{$produit->prix}} FCFA</span></p>
                    <p>Catégorie: <span class=" text-primary">{{$produit->libele_categorie}}</span></p>
                    <p>Description: <span class=" text-primary">{{$produit->description}}</span></p>
                </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                    </div>
                    </div>
                </div>
                </div>

            </div>
        @endforeach
    </div>
    <footer class="footer">
        <strong>Copyright &copy; 2023 <a href="https://www.switch-maker.com" class="text-decoration-none">Switch Maker</a>.</strong> Tous droits réservés.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const categorieFilter = document.getElementById('categorieFilter');
        const searchProduct = document.getElementById('searchProduct');
        const products = document.querySelectorAll('.product');
        const noResultsMessage = document.getElementById('noResultsMessage');

        categorieFilter.addEventListener('change', filterProducts);
        searchProduct.addEventListener('input', filterProducts);

        function filterProducts() {
        const selectedCategory = categorieFilter.value;
        const searchTerm = searchProduct.value.toLowerCase();
        let resultsFound = false;

        products.forEach((product) => {
            const productCategory = product.classList[1];
            const productName = product.querySelector('h6').textContent.toLowerCase();

            if (
                (selectedCategory === 'Tous' || productCategory === selectedCategory) &&
                (productName.includes(searchTerm) || searchTerm === '')
            ) {
                product.style.display = 'block';
                resultsFound = true;
            } else {
                product.style.display = 'none';
            }
        });


        if (!resultsFound) {
            noResultsMessage.style.display = 'block';
        } else {
            noResultsMessage.style.display = 'none';
        }
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
</body>
</html>
