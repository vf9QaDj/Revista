 <div id="cont_sec_20A">
        <div class="noticias_20A">
          <h2>PUBLICACIONES:</h2>

          <div class="sing_20A">
                  
         
@yield('posts')
   
</div>
         
          <div class="historico_not"><a href="http://www.utem.cl/actualidad/" target="_self">Ver Noticias Anteriores</a></div>
        </div>
      <!--<div class="agenda_20A">
          <h2>AGENDA UTEM:</h2>
          <ul class="lista_agenda_20A">
          </ul>       
        </div>
      </div>-->

      <div id="cont_ter_20A">

      </div>

      <div class="menu_inferior_20A">
        <div id="menu_inf_20A">
          <ul class="menu_metainf_20A">
            <li><a href="acercade" target="_self">ACERCA DEL SITIO</a></li>
            <li><a href="contactenos" target="_self">CONTÁCTENOS</a></li>
          </ul>
        </div>
      </div>

      <div class="pie_20A">

        <div id="contenido_inferior_20A">

          <div id="contenido_inferior_enlaces_20A">
            <div class="logos_20A">
              <div class="logos_internos_20A">
              <ul>
                <li><h2>ORGANIZACIONES INTERNAS</h2>
                <ul>
                  <li><a href="http://www.utemvirtual.cl/" target="_blank"><img src="http://www.utem.cl/wp-content/uploads/enlaces/utemvirtual.jpg" alt="UTEMVirtual"></a></li>
                </ul>
                </li>
              </ul>
            </div>
          <div class="logos_externos_20A">
            <ul>
              <li id="linkcat-26" class="linkcat"><h2>ORGANIZACIONES EXTERNAS</h2>
                <ul class="xoxo blogroll">
                <li><a href="http://www.cnachile.cl/" target="_blank"><img src="http://www.utem.cl/wp-content/uploads/enlaces/cna.jpg" alt="CNA"></a></li>
                <li><a href="http://www.cruch.cl/" target="_blank"><img src="http://www.utem.cl/wp-content/uploads/enlaces/cruch.jpg" alt="CRUCH"></a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>  
        <div class="enlaces_20A">
          <ul>
            <li><h2>SITIOS DE INTERÉS:</h2>
            <ul class="xoxo blogroll">
              <li><a href="https://www.mercadopublico.cl/Portal/login.aspx" target="_blank">CHILECOMPRA</a></li>
              <li><a href="http://reko.utem.cl/" rel="me" target="_blank">REKO</a></li>
              <li><a href="http://www.reuna.cl/" target="_blank">REUNA</a></li>
              <li><a href="http://www.uestv.cl/" target="_blank">UESTV</a></li>
              <li><a href="http://www.universia.cl/" target="_blank">UNIVERSIA</a></li>
              <li><a href="http://www.utemvirtual.cl/" rel="me" target="_blank">UTEMVirtual</a></li>
            </ul>
            </li>
          </ul>
        </div>
      </div> <!-- </div class="pie_20A"> -->

    <div id="acceso_intranet_20A">
     <h2>ACCESO USUARIOS</h2>

     {{ Form::open(array('url' => '/login')) }}
   
     <div class="membresia_20A">
       <div class="campo_20A">
         <div class="col_01_20A">
           Usuario:
         </div>
         <div class="col_02_20A">
           {{ Form::text('username', Input::old('username'), array('class' => 'form-control')); }}
         </div>
       </div>
       <div class="campo_20A">
         <div class="col_01_20A">
          Clave:
         </div>
       <div class="col_02_20A">
          {{ Form::password('password', array('class' => 'form-control')); }}
       </div>
     </div>
     <div class="campo_20A">
        <div class="col_03_20A">{{ Form::submit('Enviar', array('class' => 'submit')) }}
        </div>
     </div>
    </div> <!-- acceso_intranet_20A-->
  </div>

 </div>
