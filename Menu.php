<?php 
$titulo='Menu';
include('default.php');?>
<body>
  
    <script>
      // Selecciona el elemento del icono por su ID
      const icono = document.getElementById('icono');

      // Agrega un event listener para el evento 'mouseover'
      icono.addEventListener('mouseover', function() {
          // Agrega la clase para el color al pasar el mouse
          this.querySelector('i').classList.add('icono-hover');
      });

      // Agrega un event listener para el evento 'mouseout'
      icono.addEventListener('mouseout', function() {
          // Quita la clase para el color al pasar el mouse
          this.querySelector('i').classList.remove('icono-hover');
      });

      // Agrega un event listener para el evento 'click'
      icono.addEventListener('click', function() {
          // Agrega la clase para el color al hacer clic
          this.querySelector('i').classList.add('icono-active');
      });
    </script>
    
    <a href="receta.php">
      <img class="menu" src="imgE/Menu1.jpg" alt="Menu">
      <img class="menu1" src="imgE/Menu_2.jpg" alt="Menu">
      <img class="menu2" src="imgE/Menu3.jpg" alt="Menu">
      <img class="menu3" src="imgE/Menu4.jpg" alt="Menu">
      <img class="menu4" src="imgE/Menu5.jpg" alt="Menu">
      <img class="menu5" src="imgE/Menu6.jpg" alt="Menu">
   </a>
  
   <aside class="aside-derecho" id="aside">
    <i class="fa-solid fa-cart-shopping" id="cart-icon"></i>
  </aside>

  <script>
    const aside = document.getElementById('aside');
    const cartIcon = document.getElementById('cart-icon');

    cartIcon.addEventListener('click', function() {
        aside.classList.toggle('open');
    });

  </script>

    <footer class="py-3"style="background-color: #EC691F;">
    
        <div class="container">
    
            <div class="row justify-content-center">
    
                <div class="col-12 col-md-6">
    
                    <small class="text-white">TERMS    PRIVACY POLICY</small>
    
                </div>
    
            </div>
    
        </div>
    
    </footer>
    
    
</body>
</html>