<?php 
$titulo='Bebidas';
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

    <div class="h1">
      <h1>TAKE A BREAK AND TASTE THEM ALL, </h1>
      <h2>SELECT THEM</h2>
  </div>
  
    <a href="receta.php">
      <img class="drink" src="imgE/Drinks1.jpg" alt="Drink">
      <img class="drink1" src="imgE/Drinks2.jpg" alt="Drink">
      <img class="drink2" src="imgE/Drinks3.jpg" alt="Drink">
      <img class="drink3" src="imgE/Drinks4.jpg" alt="Drink">
      <img class="drink4" src="imgE/Drinks5.jpg" alt="Drink">
      <img class="drink5" src="imgE/Drinks6.jpg" alt="Drink">
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