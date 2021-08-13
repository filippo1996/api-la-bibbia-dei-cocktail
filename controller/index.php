<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- link boostrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <!-- link css -->
      <link rel="stylesheet" href="css/form-validation.css">
      <title>Cocktail form</title>
  </head>

  <body class="bg-light">
      
    <div class="container">
      <main>
        <div class="py-5 text-center">
          <h2>Cocktail form</h2>
        </div>
      
        <div class="row g-5">

          <!-- se volessimo fare riassunto cocktail -->
          <!-- <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-primary">Riassunto listino</span>
              <span class="badge bg-primary rounded-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Product name</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$12</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Second product</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$8</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Third item</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$5</span>
              </li>
              <li class="list-group-item d-flex justify-content-between bg-light">
                <div class="text-success">
                  <h6 class="my-0">Promo code</h6>
                  <small>EXAMPLECODE</small>
                </div>
                <span class="text-success">−$5</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Total (USD)</span>
                <strong>$20</strong>
              </li>
            </ul>
          
            <form class="card p-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Promo code">
                <button type="submit" class="btn btn-secondary">Redeem</button>
              </div>
            </form>
          </div> -->
          <!-- <div class="col-md-7 col-lg-8"> -->

          <div class="col-md-12 col-lg-12">
            <form class="needs-validation" novalidate="" action="request.php" method="get">
              <div class="row g-3">
                <div class="col-sm-12">
                  <label for="firstName" class="form-label">Nome locale</label>
                  <input type="text" name="pubName" class="form-control" id="firstName" placeholder="Inserire nome locale qui" value="" required >
                  <div class="invalid-feedback">
                    Nome locale richiesto.
                  </div>
                </div>

                <hr class="my-4">

                <div class="col-sm-6 cerca">
                  <label for="lastName" class="form-label">Cerca cocktail</label>
                  <input type="text" name="cocktailName" class="form-control" id="lastName" placeholder="Nome cocktail" value="" required="">
                  <button class="btn btn-primary btn-lg" type="submit">Cerca</button>
                </div>
              
                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Prezzo per ogni cocktail</label>
                  <input type="number" name="price" class="form-control" id="lastName" placeholder="€" value="" required="">
                </div>
              

            
              <hr class="my-4">
            
              <button class="w-100 btn btn-primary btn-lg" type="submit">Aggiungi cocktail al listino</button>
            </form>
          </div>
        </div>
      </main>
    
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">2021 Fil-Lu</p>
      </footer>
    </div>
  
    <script src="js/form-validation.js"></script>
  
  </body>

</html>


