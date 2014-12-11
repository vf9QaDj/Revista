
@include('posts/partials/headutem')


  <!--INICIO WRAP-->
  <div class="wrap_20A">

    <!--INICIO CONTENEDOR-->
    <div class="contenedor_20A">

      <div id="menu_sup_20A">

        <ul class="menu_meta_20A">
          <li class="item_img_20A"><a href="https://www.facebook.com/universidadtecnologicametropolitana" target="_blank"><img src="http://www.utem.cl/wp-content/themes/utem/images/20A/face_20A.jpg" alt=""/></a></li>
          <li class="item_img_20A"><a href="https://twitter.com/utem" target="_blank"><img src="http://www.utem.cl/wp-content/themes/utem/images/20A/twitter_20A.jpg" alt=""/></a></li>
          <!--<li class="item_text_20A"><a href="http://www.utem.cl/mapa-del-sitio/" target="_self">MAPA</a></li>-->

@yield('boton')
<li class="item_text_20A">@yield('saludo')</li>

        </ul>
        <div id="buscador">
          <!--<form method="get" id="searchform" action="http://www.utem.cl/">
            <input type="text" value="Busque aqu&iacute;" name="s" id="s" onFocus="clearField('s')" onBlur="setField('s', 'Busque aqu&iacute;')"/>
            <input type="submit" id="searchsubmit" value="ir"/>
          </form>-->
        </div>
        <ul class="menu_meta_20A">
          <li class="item_text_20A">@yield('saludo')</li>
  

        </ul>
      </div> <!-- contenedor_20A-->


      <div id="cabecera_20A">
        <div class="logoutem_20A"><a href="http://www.utem.cl/futuros-estudiantes/oferta-academica/" target="_self"><img src="{{ asset('assets/logo_utem_editado.png') }}" alt="" width="300" height="140"/></a></div>
        <div class="logoacred_20A"><img src="{{ asset('assets/LogoRevista.png') }}" alt="" width="620" height="140"/></div>
      </div>
      <div id="menu_prin_20A">
        <div class="mp_20A">
          <ul class="lista_a_20A">
            <li class="home_20A"><a href="http://www.utem.cl/" target="_self"><img src="http://www.utem.cl/wp-content/themes/utem/images/20A/home_off_20A.jpg" alt=""/></a></li>
            <li class="nivel_a_20A">@yield('boton1')</li>
            <li class="nivel_a_20A">@yield('boton2')</li>
          </ul>
        </div>
      </div>

@include('posts.partials.bodyprincipal')

 <div id="pie_pagina" class="vcard">
  
  <span>Sitio diseñado y desarrollado por Henry Sepúlveda - Alejandra Muñoz</span><br>
  <span>Proyecto final asignatura Ingenieria de Software - UTEM - diciembre 2014</span>
 </div>
 
</div>

</div>
<!--fin contenedor-->

</div>
<!--fin wrap-->

</body></html>