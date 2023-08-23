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

                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0" >Информация о заказе</h2>

                <div class="row justify-content-center" style="margin-top: 50px; height: auto; ">
                    
                    <h4>id: {{$bid->id}}<h4>  
                    <h4>Название: {{$bid->product_name}}<h4>  
                    <h4>Стоимость доставки: {{$bid->cost}}<h4>  
                    <h4>Адрес отгрузки: {{$bid->shipping_address}}<h4>  
                    <h4>Адрес доставки: {{$bid->delivery_address}}<h4>  
                    <h4>Время доставки: {{$bid->delivery_time}}<h4>  
                    <h4>Время создания: {{$bid->created_at}}<h4>  
                    <h4>Статус: {{$bid->Status}}<h4>  

                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>