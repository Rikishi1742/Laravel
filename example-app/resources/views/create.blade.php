<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Тестовое задание</title>

        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="../../style.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/Vendor">Я Продавец</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/User">Я Пользователь</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="">Я Курьер</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="page-section portfolio" id="portfolio" style="margin-top: 150px;">
            <div class="container">

                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0" >Я пользователь</h2>

                <div class="row justify-content-center" style="margin-top: 50px; height: auto; ">
                    
<form action="{{ route('user.create') }}" method="POST">
    @csrf
  <fieldset class="form-group row">
    <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Товар</label>
        <div class="col-sm-10">
                <select class="form-control" id="FormSelect" name="product_name">
                    <option>Товар 1</option>
                    <option>Товар 2</option>
                    <option>Товар 3</option>
                    <option>Товар 4</option>
                    <option>Товар 5</option>
                </select>
        </div>
  </fieldset>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Адрес доставки</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="delivery_address" id="FormAdress" placeholder="Адрес">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Оформить</button>
    </div>
  </div>
</form>

                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>