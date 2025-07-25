<footer>
 <div class="container">

    <div class="logo-footer">
     <img src="<?php bloginfo('template_url'); ?>/logos/bakerymaq.png" alt="Bakery" />
    </div>

    <div class="menu-footer">
        <ul>Máquinas y Equipos
			<li><a href="<?php bloginfo('url'); ?>/maquinas-de-procesamiento/?_maquinas_de_procesamiento=dosificadores-de-pastas-y-salsas">Máquinas de Procesamiento</a></li>
			<li><a href="<?php bloginfo('url'); ?>/maquinas-cortadoras/?_maquinas_cortadoras=cortadoras-de-pan">Máquinas Cortadoras</a></li>
			<li><a href="<?php bloginfo('url'); ?>/maquinas-envasadoras/?_maquinas_envasadoras=envasadoras-flow-pack">Máquinas Envasadoras</a></li>
			<li><a href="<?php bloginfo('url'); ?>/lavadoras-industriales/">Lavadoras Industriales</a></li>
			<li><a href="<?php bloginfo('url'); ?>/filtros-sanitarios/?_filtros_sanitarios=control-de-acceso-y-lavado-de-manos">Filtros Sanitarios</a></li>
			<li><a href="<?php bloginfo('url'); ?>/manipulacion-de-cargas/">Manipulación de Cargas</a></li>
			<li><a href="<?php bloginfo('url'); ?>/hornos-y-marmitas/?_hornos_y_marmitas=hornos-de-coccion-y-ahumado-mediana-industria">Hornos y Marmitas</a></li>
        </ul>

        <ul>Aplicaciones
			<li><a href="<?php bloginfo('url'); ?>/pan-industrial/?_pan_industrial=embutidoras-al-vacio">Pan Industrial</a></li>
			<li><a href="<?php bloginfo('url'); ?>/bolleria-industrial/?_bolleria_industrial=embutidoras-al-vacio">bollería Industrial</a></li>
			<li><a href="<?php bloginfo('url'); ?>/barras-de-pan/?_barras_de_pan=embutidoras-al-vacio">Barras de Pan</a></li>
			<li><a href="<?php bloginfo('url'); ?>/tostadas-hojaldres/?_tostadas_hojaldres=embutidoras-al-vacio">Tostadas/ Hojaldres</a></li>
			<li><a href="<?php bloginfo('url'); ?>/galletas/?_galletas=embutidoras-al-vacio">Galletas</a></li>
			<li><a href="<?php bloginfo('url'); ?>/chocolates-y-dulces/?_chocolates_y_dulces=embutidoras-al-vacio">Chocolates y Dulces</a></li>
			<li><a href="<?php bloginfo('url'); ?>/platos-preparados/?_platos_preparados=embutidoras-al-vacio">Platos Preparados</a></li>
        </ul>
        <ul>Bakery
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


<?php wp_footer(); ?>

	
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
});

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
	
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>	
<script type="text/javascript">
jQuery(document).ready(function ($) {
	var owl = $("#equipos-tecnologias");
	owl.owlCarousel({
		autoplay: false,
		autoplayTimeout: 1000,
		autoplayHoverPause: false,
		items: 3,
		loop: true,
		center: false,
		rewind: false,
		mouseDrag: true,
		touchDrag: true,
		pullDrag: true,
		freeDrag: false,
		margin: 0,
		stagePadding: 0,
		merge: false,
		mergeFit: true,
		autoWidth: false,
		startPosition: 0,
		rtl: false,
		smartSpeed: 250,
		fluidSpeed: false,
		dragEndSpeed: false,
		dots: true,
        nav: false,
		responsive: {
			0: {
				items: 1
				// nav: true
			},
			480: {
				items: 1,
				nav: false
			},
			768: {
				items: 3,
				// nav: true,
				loop: false
			},
			992: {
				items: 3,
				// nav: true,
				loop: false
			}
		},
		responsiveRefreshRate: 200,
		responsiveBaseElement: window,
		fallbackEasing: "swing",
		info: false,
		nestedItemSelector: false,
		itemElement: "div",
		stageElement: "div",
		refreshClass: "owl-refresh",
		loadedClass: "owl-loaded",
		loadingClass: "owl-loading",
		rtlClass: "owl-rtl",
		responsiveClass: "owl-responsive",
		dragClass: "owl-drag",
		itemClass: "owl-item",
		stageClass: "owl-stage",
		stageOuterClass: "owl-stage-outer",
		grabClass: "owl-grab",
		autoHeight: false,
		lazyLoad: false
	});

	$(".next").click(function () {
		owl.trigger("owl.next");
	});
	$(".prev").click(function () {
		owl.trigger("owl.prev");
	});
});	
jQuery(document).ready(function ($) {
	var owl = $("#marcas");
	owl.owlCarousel({
		autoplay: true,
		autoplayTimeout: 1500,
		autoplayHoverPause: false,
		items: 3,
		loop: true,
		center: false,
		rewind: false,
		mouseDrag: true,
		touchDrag: true,
		pullDrag: true,
		freeDrag: false,
		margin: 0,
		stagePadding: 0,
		merge: false,
		mergeFit: true,
		autoWidth: false,
		startPosition: 0,
		rtl: false,
		smartSpeed: 500,
		fluidSpeed: false,
		dragEndSpeed: false,
		responsive: {
			0: {
				items: 1,
				nav: false
			},
			480: {
				items: 1,
				nav: false
			},
			768: {
				items: 2,
				nav: false,
				loop: false
			},
			992: {
				items: 6,
				nav: false,
				loop: false
			}
		},
		responsiveRefreshRate: 200,
		responsiveBaseElement: window,
		fallbackEasing: "swing",
		info: false,
		nestedItemSelector: false,
		itemElement: "div",
		stageElement: "div",
		refreshClass: "owl-refresh",
		loadedClass: "owl-loaded",
		loadingClass: "owl-loading",
		rtlClass: "owl-rtl",
		responsiveClass: "owl-responsive",
		dragClass: "owl-drag",
		itemClass: "owl-item",
		stageClass: "owl-stage",
		stageOuterClass: "owl-stage-outer",
		grabClass: "owl-grab",
		autoHeight: false,
		lazyLoad: false
	});

	$(".next").click(function () {
		owl.trigger("owl.next");
	});
	$(".prev").click(function () {
		owl.trigger("owl.prev");
	});
});
</script>


</body>
</html>