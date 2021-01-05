<main>
<div class="row py-4">
    <div class="col-md-1"></div>
    <div class="col-12 col-md-4 col-lg-3">
        <div class="list-group px-5 px-md-0">
        <a href="./login.php?info=account" class="list-group-item list-group-item-action bg-dark text-white">Account</a>
        <a href="./login.php?info=account" class="list-group-item list-group-item-action">Info</a>
        <a href="./login.php?info=ordini" class="list-group-item list-group-item-action bg-light-gray fw-bold">History</a>
        <a href="add_product.php" class="list-group-item list-group-item-action">Add a product</a>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-7 p-5 py-md-1">
        <h3>Cronologia Ordini</h3> 
        <div class="container px-2 px-md-0 py-3">
        <?php foreach($templateParams["Ordini"] as $ordine): ?>
            <div class="input-group mb-3">
                <span class="form-control" id="basic-addon1">Ordine n. <?php echo $ordine["IdCarrello"]; ?></span>
                <span class="input-group-text" id="basic-addon1">12/01/2020</span>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>
</main>