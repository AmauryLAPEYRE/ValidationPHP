<a href="./basket">Voir mon panier</a>
<h2>Liste des produits</h2>

    <div class="card-group">
        <div class="card">

            <div class="card-body">
            <h5 class="card-title">Animal 1</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Prix : 55e</small></p>
            <form action="./process.php" method="POST">
                <input type="hidden" name="id" value="1">
                <input type="hidden" name="animal" value="Animal 1">
                <input type="hidden" name="price" value="55">
                <input type="submit" value="Ajouter panier">
            </form>
            </div>
        </div>
        <div class="card">

            <h5 class="card-title">Animal 2</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Prix : 120e</small></p>
            <form action="./process.php" method="POST">
                <input type="hidden" name="id" value="2">
                <input type="hidden" name="animal" value="Animal 2">
                <input type="hidden" name="price" value="120">
                <input type="submit" value="Ajouter panier">
            </form>
            </div>
        </div>
        <div class="card">
            
            <div class="card-body">
            <h5 class="card-title">Animal 3</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Prix : 2000e</small></p>
            <form action="./process.php" method="POST">
                <input type="hidden" name="id" value="3">
                <input type="hidden" name="animal" value="Animal 3">
                <input type="hidden" name="price" value="2000">
                <input type="submit" value="Ajouter panier">
            </form>
            </div>
        </div>
    </div>
