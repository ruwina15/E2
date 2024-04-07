<?php 
$titulo='Recetas';
include('default.php');
include('funciones.php');
?>
<body>
  
    <div class="h1">
        <h1><?=$tituloR?> </h1>
    </div>

    <div class="card mb-3">
        <img class="flan"src="<?=$flan?>" class="card-img-top" alt="postre">
        <div class="card-body">
          <h5 class="card-title"><?=$subtitulo?></h5>
          <p class="card-text"><?=$contenido?></p>
          <p class="card-text"><small class="text-body-secondary"><?=$act?></small></p>
        </div>
      </div>
  

    <footer class="py-3"style="background-color: #EC691F;">
    
        <div class="container">
    
            <div class="row justify-content-center">
    
                <div class="col-12 col-md-6">
    
                    <small class="text-white"><?=$terminos?></small>
    
                </div>
    
            </div>
    
        </div>
    
    </footer>
    
</body>
</html>