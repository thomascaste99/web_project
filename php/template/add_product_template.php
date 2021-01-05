<main>
  <div class="row py-4">
    <div class="col-md-1"></div>
    <div class="col-12 col-md-4 col-lg-3">
      <div class="list-group px-5 px-md-0">
        <a href="./login.php?info=account" class="list-group-item list-group-item-action bg-dark text-white">Account</a>
        <a href="./login.php?info=account" class="list-group-item list-group-item-action">Info</a>
        <a href="./login.php?info=ordini" class="list-group-item list-group-item-action">History</a>
        <a href="add_product.php" class="list-group-item list-group-item-action bg-light-gray fw-bold">Add a product</a>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-7 p-5 py-md-1">
      <h3>Aggiungi un prodotto</h3>
      <div class="container px-0 py-3">
        <form method="post" action="add_product.php">
          <div class="form-group mb-3">
            <label for="name">Name</label>
            <input name="name" class="form-control" placeholder="Name">
          </div>
          <div class="form-group mb-3">
            <label for="brand">Brand</label>
            <input name="brand" class="form-control" placeholder="Brand">
          </div>
          <div class="form-group mb-3">
            <label for="type">Type</label>
            <select class="form-control" name="type">
              <option value="Guitar">Guitar</option>
              <option value="Bass">Bass</option>
              <option value="Amplifier">Amplifier</option>
              <option value="Accessories">Accessories</option>
            </select>
          </div>
          <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="3"></textarea>
          </div>
          <div class="form-group mb-3">
            <label for="price">Price</label>
            <input type="number" name="price" class="form-control" placeholder="Price">
          </div>
          <div class="form-group mb-3">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" class="form-control" placeholder="Quantity">
          </div>
          <div class="form-group mb-3">
            <label class="form-label" for="photoFront">Photo Front</label>
            <input type="file" name="photoFront" id="photoFront" class="form-control form-control-sm" enctype="multipart/form-data"/>
          </div>
          <div class="form-group mb-3">
            <label class="form-label" for="photoBack">Photo Back</label>
            <input type="file" name="photoBack" class="form-control form-control-sm" enctype="multipart/form-data"/>
          </div>
          <div class="form-group mb-3">
            <label class="form-label" for="photoZoom">Photo Zoom</label>
            <input type="file" name="photoZoom" class="form-control form-control-sm" enctype="multipart/form-data"/>
          </div>
          <div class="form-group mb-3">
            <label class="form-label" for="photoHead">Photo Head</label>
            <input type="file" name="photoHead" class="form-control form-control-sm" enctype="multipart/form-data"/>
          </div>
          <div class="form-group p4 float-end">
              <button class="btn btn-dark btn-lg" type="submit">Add</button>
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-12 container "></div>
    </div>
  </div>
</main>