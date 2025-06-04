<footer>
 <div class="container">

    <div class="logo-footer">
     <img src="<?php bloginfo('template_url'); ?>/logos/avimaq.png" alt="Avimaq" />
    </div>

    <div class="menu-footer">
      <ul>Máquinas y Equipos
        <li><a href="<?php bloginfo('url'); ?>/maquinas-de-procesamiento/?_maquinas_de_procesamiento=dosificadores-de-pastas-y-salsas">Máquinas de Procesamiento</a></li>
        <li><a href="<?php bloginfo('url'); ?>/maquinas-envasadoras/?_maquinas_envasadoras=envasadoras-termoformadoras">Máquinas Envasadoras</a></li>
        <li><a href="<?php bloginfo('url'); ?>/maquinas-cortadoras/?_maquinas_cortadoras=maquinas-cortadora-cubos-y-tiras">Máquinas Cortadoras</a></li>
        <li><a href="<?php bloginfo('url'); ?>/equipos-de-desposte/?_equipos_de_desposte=cuchillos-circulares-bettcher">Equipos de Desposte</a></li>
        <li><a href="<?php bloginfo('url'); ?>/hornos-y-marmitas/?_hornos_y_marmitas=hornos-de-coccion-y-ahumado-mediana-industria">Hornos y Marmitas</a></li>
        <li><a href="<?php bloginfo('url'); ?>/filtros-sanitarios/?_filtros_sanitarios=control-de-acceso-y-lavado-de-manos">Filtros Sanitarios</a></li>
        <li><a href="<?php bloginfo('url'); ?>/sistemas-de-inspeccion/?_sistemas_de_inspeccion=chequeadores-de-peso">Sistemas de Inspección</a></li>
        <li><a href="<?php bloginfo('url'); ?>/lavadoras-industriales/">Lavadoras Industriales</a></li>
        <li><a href="<?php bloginfo('url'); ?>/higiene-e-inocuidad/?_higiene_e_inocuidad=proteccion-e-higiene-personal">Higiene e Inocuidad</a></li>
        <li><a href="<?php bloginfo('url'); ?>/miscelaneos/?_miscelaneos=guantes-de-seguridad">Miscelaneos</a></li>
      </ul>

      <ul>Aplicaciones
        <li><a href="<?php bloginfo('url'); ?>/albondigas/?_albondigas=envasadoras-vertical">Albóndigas</a></li>
        <li><a href="<?php bloginfo('url'); ?>/carne-en-cubos/?_carne_en_cubos=envasadoras-vertical">Carne en Cubos</a></li>
        <li><a href="<?php bloginfo('url'); ?>/carne-molida/?_carne_molida=envasadoras-flow-pack">Carne Molida</a></li>
        <li><a href="<?php bloginfo('url'); ?>/hamburguesas/?_hamburguesas=envasadoras-flow-pack">Hamburguesas</a></li>
        <li><a href="<?php bloginfo('url'); ?>/jamones/?_jamones=envasadoras-termoformadoras">Jamones</a></li>
        <li><a href="<?php bloginfo('url'); ?>/laminadora-de-cecinas/?_laminadora_de_cecinas=envasadoras-termoformadoras">Laminado Cecinas</a></li>
        <li><a href="<?php bloginfo('url'); ?>/vienesas/?_vienesas=envasadoras-termoformadoras">Vienesas</a></li>
      </ul>

      <ul>Cárnico
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
        button.classList.add('active');
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
 

<style>
 .active{
  background-color: #f27e00 !important;
 }
 .active .cat-int img {
    opacity: 0;
 }
 .active .cat-int .icon-menu, .cat-int .icon-menu img {
    opacity: 100% !important;
 }
 .active:hover{
  display: none;
 }


 @media (max-width: 640px) {
  .active{
  background-color: transparent !important;
  box-shadow: 0 0 0 6px #a62532 !important;
 }
 .active .cat-int img {
    opacity: 100%;
 }
 .active .cat-int .icon-menu{
    opacity: 100% !important;
 }
 .cat-int .icon-menu img {
    opacity: 0 !important;
 }
 .active:hover{
  display: none;
  background: transparent !important;
 }
 .menu-categorias .tvcategory-name-image .tv-sub-category-wrapper .tv-category-image:hover{
  background: transparent !important;
 }

 #filter_click:hover{
  box-shadow: 0 0 0 6px #a62532 !important;
 }

 #filter_click:hover .cat-int img{
    opacity: 100% !important;
 }
 #filter_click:hover .icon-menu{
    opacity: 0% !important;
 }
}



 .single-post .categorias-int .container .container-ficha-producto .ficha-int .right .product-content p{
    margin: 0 !important;
    padding: 0 !important;
 }
 .single-post .contacto-single{
    height: 600px;
 }
 .single-post .contacto .wrapper-formulario .content-formulario .form input, .single-post .contacto .wrapper-formulario .content-formulario .form textarea{
  min-height: 30px;
 }

 .contacto .wrapper-formulario .content-img-formulario {
    height: auto;
 }

 .contacto .wrapper-formulario .content-img-formulario img{
  width: 100%;
  height: 100%;
  object-fit: cover;
 }

 .single-post .contacto .wrapper-formulario .content-formulario form{
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
 }

 .single-post .contacto .wrapper-formulario .content-formulario .form{
  width: 48%;
 }

 .single-post .contacto .wrapper-formulario .content-formulario .form-xl{
  width: 98%;
 }

 .single-post .close-btn {
  font-size: 1.5em;
    width: 30px;
    height: 30px;
    font-weight: 500;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #ffffff;
    border: 2px solid #ffffff;
    background-color: black;
    position: absolute;
    top: 5%;
    right: 4%;
    cursor: pointer;
}

@media (max-width: 880px) {
    .wrapper-video {
        margin: 0 0 2rem 0;
    }
    @media (max-width: 880px) {
    .contacto .wrapper-formulario {
       background: none;
    }
  }
}

@media screen and (max-width: 880px) {
  .popup-content-contact{
   top: 40%;
  }
  .single-post .contacto .wrapper-formulario .content-formulario .form {
    width: 85%;
 }
 .single-post .close-btn {
    top: -2%;
 }
 .single-post .contacto .wrapper-formulario .content-formulario form{
  gap: 0;
 }
}

</style>


</body>
</html>