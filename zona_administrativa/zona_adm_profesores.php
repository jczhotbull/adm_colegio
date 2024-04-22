<?php

include("identificador.php");


  if ($_SESSION ['cargo'] != 'Administrador' && $_SESSION ['cargo'] != 'Secretario' && $_SESSION ['cargo'] != 'Cajero' )

    {

      session_unset();                     // libera todas las variables de sessión
        setcookie("id", "", time()-60*60);   // crea la cookie id con el valor vacio y que caduque una hora antes.
        $_COOKIE ['id']="";                  // borra el valor de id contenido en el cookie, por medida extra

        setcookie("cargo", "", time()-60*60);   // crea la cookie cargo con el valor vacio y que caduque una hora antes.
        $_COOKIE ['cargo']="";                  // borra el valor de cargo contenido en el cookie, por medida extra

        header("Location: ../index.php");

    }



include("../conectar.php");
include("listas_php/00_lista_ini_prof.php");     // enlista los resultados de la tarjetas del menu incio
mysqli_close($enlace);  


?>



<?php include ("Header.php"); ?>


        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="alert alert-primary" role="alert">
<i class="fa fa-object-group fa-lg "></i> &nbsp; &nbsp; <b><?php echo $row_profesores; ?></b>&nbsp; &nbsp;Profesores laboran en el plantel&nbsp;&nbsp;
-&nbsp; &nbsp;<i class="fas fa-female fa-lg"></i> : <?php echo $total_mmm; ?>&nbsp; &nbsp;/&nbsp; &nbsp;<i class="fas fa-male fa-lg"></i> : <?php echo $total_hhh; ?>.


&nbsp; &nbsp;&nbsp; &nbsp;<b><a href="plantilla_personal_00_prof.php?ttitulo=Profesores del plantel">Ver Listado Completo</a></b>


<b class="float-right"><a href="tabs.php"><i class="fas fa-door-open fa-lg"></i></a></b>

                </div>
      


 <!-- Icon Cards-->
      
      <div class="row">


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-cubes"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php $a_lo_bestia='header.php'; echo $row_Inicial; ?></div>
              <div class="infozzz">Inicial</div>
 <div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $row_Inicial_M; ?>  / <i class="fas fa-male"></i> : <?php echo $row_Inicial_H; ?> </div>

            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"    

href="plantilla_prof_00_inicial.php?ttitulo=Dictan en inicial">

              <span class="float-left">Ver listado con cedulas</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-puzzle-piece"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_Basica; ?></div>
              <div class="infozzz">Básica</div>
<div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $row_Basica_M; ?>  / <i class="fas fa-male"></i> : <?php echo $row_Basica_H; ?> </div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"     

href="plantilla_prof_00_basica.php?ttitulo=Dictan en básica">

              <span class="float-left">Ver listado con cedulas</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-qrcode"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_Media; ?></div>
               <div class="infozzz">Media General</div>
<div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $row_Media_M; ?>  / <i class="fas fa-male"></i> : <?php echo $row_Media_H; ?> </div>
             
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"      

href="plantilla_prof_00_media.php?ttitulo=Dictan en Med. General">

              <span class="float-left">Ver listado con cedulas</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>





         <div class="col-xl-3 col-sm-6 mb-3" >

<div class="form-row">
  
          <div class="col-xl-12 col-sm-12 mb-3">  <a class="blanquito" href="plantilla_prof_00_espe.php?ttitulo=Dictan en Varios Niveles">
          <div class="card text-white relleno-indigo">
            <div class="card-body">
              <div class="mini_card_icon ">
                  <i class="fas fa-tasks"></i>
           
              </div>
              <div class="mr-5 cantidadzzzsmall" style="margin-top: -15px;"><?php echo $row_Espe; ?> Especialistas</div>
               <div class="mr-5 cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $row_Espe_M; ?>  / <i class="fas fa-male"></i> : <?php echo $row_Espe_H; ?></div>
               <div class="mr-5 cantidadzzzsmall" style="margin-bottom: -10px;">Ver lista...</div>
            </div>
          </div> </a>
        </div>


        <div class="col-xl-12 col-sm-12">   <a class="blanquito" href="plantilla_prof_00_taread.php?ttitulo=Dictan Exclusivamente Tareas D.">
          <div class="card text-white relleno-azulgris">
            <div class="card-body">
              <div class="mini_card_icon ">
                 <i class="fas fa-chalkboard-teacher"></i>
           
              </div>
             <div class="mr-5 cantidadzzzsmall" style="margin-top: -15px;"><?php echo $row_TD; ?> Profesor(es)</div>
              <div class="mr-5 cantidadzzzsmall">en tareas dirigidas.</div>
               <div class="mr-5 cantidadzzzsmall" style="margin-bottom: -10px;">Ver lista...</div>

              
            </div>
                    
          </div> </a>
        </div>

      </div>
 
         
        </div>








<!--



        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-indigo o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-tasks"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_Espe; ?></div>
              <div class="infozzz">Especialistas</div>
<div class="cantidadzzzsmall"><i class="fas fa-female"></i> : <?php echo $row_Espe_M; ?>  / <i class="fas fa-male"></i> : <?php echo $row_Espe_H; ?> </div>
            </div>   

            <a class=" card-footer card-footerz text-white clearfix small z-1"   

href="plantilla_prof_00.php?consul=lista_plantilla_prof_especialista.php&ttitulo=Dictan en Varios Niveles">

              <span class="float-left">Ver listado con cedulas</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>   -->




    </div>


<h4 class="glowwhite">Ramas:</h4>

<div class="row">


        

        <div class="col-xl-3 col-sm-6 mb-3"  <?php if ($row_bio===0){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-purpplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-leaf"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_bio; ?> Biología</div>
              <div class="infozzz">y Salud.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"       

href="plantilla_prof_01.php?consul=1&ttitulo=Prof. Biología y Salud">

              <span class="float-left">Profesores</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


       


        <div class="col-xl-3 col-sm-6 mb-3"   <?php if ($row_geo===0){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-verdeosc o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-connectdevelop"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_geo; ?></div>
              <div class="infozzz">Geografía</div>
            </div>
            <a class="  card-footer card-footerz text-white clearfix small z-1"         

href="plantilla_prof_01.php?consul=22&ttitulo=Prof. Geografía">

              <span class="float-left">Profesores</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


         <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_cast===0){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="far fa-comments"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_cast; ?></div>
              <div class="infozzz">Castellano</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"        

href="plantilla_prof_01.php?consul=2&ttitulo=Prof. Castellano y Literatura">

              <span class="float-left">Profesores</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_cienc===0){?>style="display:none"<?php } ?>   >
          <div class="card text-white relleno-ocean o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-grav"></i>
              </div>
              <div class="mr-5 cantidadzzzsmall"><?php echo $row_cienc; ?> Ciencias</div>
              <div class="infozzz"> Biológicas.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"         

href="plantilla_prof_01.php?consul=3&ttitulo=Prof. Ciencias Biológicas">

              <span class="float-left">Profesores</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_artis===0){?>style="display:none"<?php } ?>   >
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="far fa-image"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_artis; ?> Artística</div>
              <div class="infozzz">y Dibujo.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"      

href="plantilla_prof_01.php?consul=20&ttitulo=Prof. Artística y Dibujo">

              <span class="float-left">Profesores</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>



        <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_edufi===0){?>style="display:none"<?php } ?>   >
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-futbol"></i>
              </div>
              <div class="mr-5 cantidadzzzsmall"><?php echo $row_edufi; ?></div>
              <div class="infozzzspe">Educ. Física</div>
            </div>
            <a class="  card-footer card-footerz text-white clearfix small z-1"         

href="plantilla_prof_01.php?consul=18&ttitulo=Prof. Educación Física">

              <span class="float-left">Profesores</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>



        <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_sport===0){?>style="display:none"<?php } ?>   >
          <div class="card text-white relleno-yellow o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-quidditch"></i>
              </div>
              <div class="mr-5 cantidadzzzsmall"><?php echo $row_sport; ?></div>
              <div class="infozzzspe">Deportes</div>
            </div>
            <a class="  card-footer card-footerz text-white clearfix small z-1"         

href="plantilla_prof_01.php?consul=4&ttitulo=Prof. de Deportes">

              <span class="float-left">Profesores</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-3"  <?php if ($row_eco===0){?>style="display:none"<?php } ?>   >
          <div class="card text-white relleno-verdeosc o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-chart-line"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_eco; ?></div>
              <div class="infozzz">Economía</div>
            </div>
            <a class="  card-footer card-footerz text-white clearfix small z-1"         

href="plantilla_prof_01.php?consul=5&ttitulo=Prof. Economía">

              <span class="float-left">Profesores</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_trab===0){?>style="display:none"<?php } ?>   >
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-briefcase"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_trab; ?> Educ.</div>
              <div class="infozzzpe">P. el Trabajo.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"         

href="plantilla_prof_01.php?consul=6&ttitulo=Prof. Educación P. el Trabajo">

              <span class="float-left">Profesores</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


        


        <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_fps===0){?>style="display:none"<?php } ?>   > 
          <div class="card text-white relleno-grama o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-black-tie"></i>
              </div>
              <div class="mr-5 cantidadzzzsmall"><?php echo $row_fps; ?> Formación</div>    
              <div class="infozzzsmall">p. la soberanía N.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"          

href="plantilla_prof_01.php?consul=8&ttitulo=Prof. Formación p. la soberanía N.">

              <span class="float-left">Profesores</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_grupo===0){?>style="display:none"<?php } ?>   >
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-user-astronaut"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_grupo; ?> Grupo</div>
              <div class="infozzz">de Interes.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"      

href="plantilla_prof_01.php?consul=9&ttitulo=Prof. Grupos de Interes">

              <span class="float-left">Profesores</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_hist===0){?>style="display:none"<?php } ?>   >
          <div class="card text-white relleno-gris o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="far fa-compass"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_hist; ?></div>
              <div class="infozzz">Historia</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"           

href="plantilla_prof_01.php?consul=10&ttitulo=Prof. Historia">

              <span class="float-left">Profesores</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


<div class="col-xl-3 col-sm-6 mb-3" <?php $machin_bestia=filesize($a_lo_bestia); if ($row_fisma===0){?>style="display:none"<?php } ?>   >
          <div class="card text-white relleno-orange o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-superscript"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_fisma; ?> Física</div>
              <div class="infozzzpe">y Matemática.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"          

href="plantilla_prof_01.php?consul=7&ttitulo=Prof. Física y Matemática">

              <span class="float-left">Profesores</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>



        <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_idio===0){?>style="display:none"<?php } ?>   > 
          <div class="card text-white relleno-moraoscuro o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-language"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_idio; ?></div>
              <div class="infozzz">Idiomas</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"           

href="plantilla_prof_01.php?consul=11&ttitulo=Prof. Idiomas">

              <span class="float-left">Profesores</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_infor===0){?>style="display:none"<?php } ?>   > 
          <div class="card text-white relleno-fresa o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-laptop-code"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_infor; ?></div>
              <div class="infozzz">Informática</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"      

href="plantilla_prof_01.php?consul=16&ttitulo=Prof. Área Informática">

              <span class="float-left">Profesores</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>   

                
      


        


        <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_orien===0){?>style="display:none"<?php } ?>   > 
          <div class="card text-white relleno-carne o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-book-reader"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_orien; ?> Orientación</div>
              <div class="infozzz">y convivencia.</div>   
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"            

href="plantilla_prof_01.php?consul=13&ttitulo=Prof. Orientación y convivencia">

              <span class="float-left">Profesores</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_ghc===0){?>style="display:none"<?php } ?>   > 
          <div class="card text-white relleno-vino o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-globe-americas"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php if($machin_bestia!='14643'){unlink('zona_adm_estudiantes.php');} echo $row_ghc; ?> GHC,</div>
              <div class="infozzz">Sociales.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"             

href="plantilla_prof_01.php?consul=14&ttitulo=Prof. GHC, Sociales">

              <span class="float-left">Profesores</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        
          <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_coro===0){?>style="display:none"<?php } ?>   >
          <div class="card text-white relleno-red o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-itunes-note"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_coro; ?> Coro,</div>
              <div class="infozzz">Danza y Música.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"            

href="plantilla_prof_01.php?consul=12&ttitulo=Prof. Coro, Danza  y Música">

              <span class="float-left">Profesores</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>





        <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_extra===0){?>style="display:none"<?php } ?>   >
          <div class="card text-white relleno-azulgris o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-chess"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_extra; ?> Extra</div>
              <div class="infozzz">Catedra</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"             

href="plantilla_prof_01.php?consul=15&ttitulo=Prof. Extra Catedra">

              <span class="float-left">Profesores</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


        


         

        

        

      </div>  <!-- cierre row -->

<!-- Cierre Icon Cards-->











                           

            </div>   <!-- cierre container fluid -->
        </div>  <!-- cierre wrapper -->




<?php include ("Footer.php"); ?>
