<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo;?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="cssE1/styles.css"> <!-- PInicio -->
    <link rel="stylesheet" href="cssE1/menu.css"> <!-- Menu -->
    <link rel="stylesheet" href="cssE1/contacto.css"> <!-- ContactUs -->
    <link rel="stylesheet" href="cssE1/styleA.css"> <!-- Aboutus -->
    <link rel="stylesheet" href="cssE1/desserts.css"> <!-- Desserts -->
    <link rel="stylesheet" href="cssE1/drinks.css"> <!-- Drinks -->
    <link rel="stylesheet" href="cssE1/receta.css"> <!-- receta -->
</head>

<body style="background-color: #B74200;"></body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-1 column1">
                <img class="img-fluid w-100 d-block d-lg-none"src="imgE/1920px.png" alt="figura1">
                   <img class="img-fluid w-100 d-none d-lg-block"src="imgE/+grande.png" alt="figura2">
    <!--            <img class="figuras"src="imgE/figura3.png" alt="figura3"> -->
    
            </div>
            <div class="col-12 column2">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="PInicio.php" id="icono"><i class="fa-solid fa-house-chimney"></i></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Menu.php">MENU</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Desserts.php">DESSERTS</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Drinks.php">DRINKS</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="ContactUs.php">CONTACT US</a>
                          </li>
                        </ul>
                        <form class="d-flex" role="search">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                      </div>
                    </div>
                </nav>
            </div>
        </div>


