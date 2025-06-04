<footer>
 <div class="container">

    <div class="logo-footer">
     <img src="<?php bloginfo('template_url'); ?>/logos/logo-pharma1.png" alt="" />
    </div>

    <div class="menu-footer">
        <ul>Máquinas y Equipos
          <li><a href="<?php bloginfo('url'); ?>/maquinas-envasadoras/?_maquinas_envasadoras=envasadoras-flow-pack">Máquinas Envasadoras</a></li>
          <li><a href="<?php bloginfo('url'); ?>/maquinas-de-procesamiento/?_maquinas_de_procesamiento=sistemas-de-preparacion-de-salmuera">Máquinas de Procesamiento</a></li>
          <li><a href="<?php bloginfo('url'); ?>/filtros-sanitarios/?_filtros_sanitarios=control-de-acceso-y-lavado-de-manos">Filtros Sanitarios</a></li>
          <li><a href="<?php bloginfo('url'); ?>/filtros-sanitarios/?_filtros_sanitarios=control-de-acceso-y-lavado-de-manos">Sistemas de Inspección</a></li>
          <li><a href="<?php bloginfo('url'); ?>/higiene-e-inocuidad/?_higiene_e_inocuidad=transporte-y-carga-higienizable">Higiene e Inocuidad</a></li>
          <li><a href="<?php bloginfo('url'); ?>/maquinas-de-procesamiento/?_maquinas_de_procesamiento=sistemas-de-preparacion-de-salmuera">Miscelaneos</a></li>
        </ul>
        <ul>Servicios
          <li><a href="https://taglermaq.cl/">Ir a Taglermaq</a></li>
          <li><a href="<?php bloginfo('url');?>/representaciones">Representaciones</a></li>
          <li><a href="<?php bloginfo('url');?>/contacto">Contacto</a></li>
        </ul>

        <ul>Pharma
          <li>Av. Presidente Germán Riesco 8736-1 Renca. <br>Santiago de Chile.</li>
          <li>Código Postal: 8640000</li>
          <li>Teléfono: (+56) 22 478 1100</li>
          <ul class="ul-level-2"><strong>Horarios de Atención</strong>
            <li>Lunes a Jueves de 8:15 a 17:45 hrs.</li>
            <li>Viernes 8:15 a 17:00 hrs.</li>
          </ul>
          <ul class="ul-level-2"><strong>Ir a Taglermaq</strong>
            <li><a href="https://www.taglermaq.cl/">www.taglermaq.cl</a></li>
          </ul>
        </ul>
    </div>
    
 </div><!--container-->

 <div class="copyright">
  <p>Copyright© 2024 TAGLERMAQ. Todos los Derechos Reservados.</p>
 </div><!--container-->

</footer>

<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function() {
    // search-box open close js code
let navbar = document.querySelector(".navbar");
let searchBox = document.querySelector(".search-box .bx-search");
// let searchBoxCancel = document.querySelector(".search-box .bx-x");

searchBox.addEventListener("click", () => {
  navbar.classList.toggle("showInput");
  if(navbar.classList.contains("showInput")){
    searchBox.classList.replace("bx-search" ,"bx-x");
  }else {
    searchBox.classList.replace("bx-x" ,"bx-search");
  }


// sidebar open close js code
let navLinks = document.querySelector(".nav-links");
let menuOpenBtn = document.querySelector(".navbar .bx-menu");
let menuCloseBtn = document.querySelector(".nav-links .bx-x");
menuOpenBtn.onclick = function() {
navLinks.style.left = "0";
}
menuCloseBtn.onclick = function() {
navLinks.style.left = "-100%";
}


// sidebar submenu open close js code
let htmlcssArrow = document.querySelector(".htmlcss-arrow");
htmlcssArrow.onclick = function() {
 navLinks.classList.toggle("show1");
}
let moreArrow = document.querySelector(".more-arrow");
moreArrow.onclick = function() {
 navLinks.classList.toggle("show2");
}
let jsArrow = document.querySelector(".js-arrow");
jsArrow.onclick = function() {
 navLinks.classList.toggle("show3");
}
});

});
	
</script>

<?php wp_footer(); ?>
	
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/slick/slick.js" charset="utf-8"></script>
    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });

        $('.slider-nav').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            vertical: true,
            asNavFor: '.slider-for',
            dots: false,
            arrows: false,
            focusOnSelect: true,
            verticalSwiping: true,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        vertical: false,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        vertical: false,
                    }
                },
                {
                    breakpoint: 580,
                    settings: {
                        vertical: false,
                        slidesToShow: 5,
                    }
                },
                {
                    breakpoint: 380,
                    settings: {
                        vertical: false,
                        slidesToShow: 5,
                    }
                }
            ]
        });
    });

		

  $(document).ready(function() {
    $("#BtnLogin").click(function(){
      $(".mostrarElemento").toggleClass("mostrar");
    });

    $("#cerrarVentana").click(function(){
      $(".mostrarElemento").removeClass("mostrar");
    });
  });

  jQuery(document).ready(function($){
    $(".contacto-btn").on("click", function(){
      $(".contacto-popup").fadeIn("slow");
      return false;
    });

    $(".contacto-bg").on("click", function(){
      $(".contacto-popup").slideUp("slow");
      return false;
    });

    $(".close-btn").on("click", function(){
      $(".contacto-popup").fadeOut("slow");
      return false;
    });
  });



  window.onload = function() {
    const buttons = document.querySelectorAll('.tv-category-image');
    const currentUrl = window.location.href;

    buttons.forEach(button => {
        if (button.href === currentUrl) {
            button.classList.add('active-cat');
        }
    });

};



// Cargar animación preload al pinchar categoría
document.addEventListener('DOMContentLoaded', function() {
  // Selecciona todos los enlaces en tu menú
  const links = document.querySelectorAll('.tv-category-image');

  // Agrega el evento de clic a cada enlace
  links.forEach(link => {
    link.addEventListener('click', function(event) {
        // Muestra el overlay
        document.getElementById('loading-overlay').style.display = 'flex';
    });
  });
});



 </script>
 




</body>
</html>