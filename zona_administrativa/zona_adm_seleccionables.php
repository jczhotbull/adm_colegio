<?php

include("identificador.php");


if ($_SESSION ['cargo'] != 'Administrador' && $_SESSION ['cargo'] != 'Secretario'  )

    {

      session_unset();                     // libera todas las variables de sessión
        setcookie("id", "", time()-60*60);   // crea la cookie id con el valor vacio y que caduque una hora antes.
        $_COOKIE ['id']="";                  // borra el valor de id contenido en el cookie, por medida extra

        setcookie("cargo", "", time()-60*60);   // crea la cookie cargo con el valor vacio y que caduque una hora antes.
        $_COOKIE ['cargo']="";                  // borra el valor de cargo contenido en el cookie, por medida extra

        header("Location: ../index.php");

    }
    


include("../conectar.php");
include("listas_php/00_listar.php");
mysqli_close($enlace); 
         

?>



<?php include ("Header.php"); ?>


        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="alert alert-primary" role="alert">
                    <i class="far fa-check-circle fa-lg"></i> &nbsp; &nbsp; Verificar y agregar seleccionables.
                </div>
      


 <!-- Icon Cards-->

 <h4 class="glowwhite">Ref. a la labor del personal y a la estructura del plantel:</h4>
      
      <div class="row">
    
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-ocean o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-servicestack"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_areas->total_areas; ?>&nbsp;Áreas y</div>
              <div class="infozzzpe">especialidades</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="selecc_areas.php">
              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-ocean o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-share-alt-square"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_cargos->total_cargos; ?>&nbsp;Cargos</div>
              <div class="infozzz">y puestos</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="selecc_cargos.php">
              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-ocean o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-signal"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_grados->total_grados; ?>&nbsp;Grados</div>
              <div class="infozzz">y ciclos</div>
            </div>

<a class="card-footer card-footerz text-white clearfix small z-1"

href="selecc_grados.php">


              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

         <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-ocean o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-bars"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_secciones->total_secciones; ?>&nbsp;Secciones</div>
              <div class="infozzz">y niveles</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"

href="selecc_00.php?ttabla=secciones&idtabla=id_seccion&nombdato=nombre_seccion&ttitulo=Secciones y niveles">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>  

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-yellow o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-red-river"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_pisos->total_pisos; ?>&nbsp;Pisos</div>
              <div class="infozzz">en el plantel</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" 

href="selecc_00.php?ttabla=pisos&idtabla=id_piso&nombdato=nombre_piso&ttitulo=Pisos en el plantel">


              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-yellow o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-window-restore"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_aulas->total_aulas; ?>&nbsp;Aulas</div>
              <div class="infozzzpe">en el plantel</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" 

href="selecc_00.php?ttabla=aulas&idtabla=id_aula&nombdato=nombre_aula&ttitulo=Aulas en el plantel">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-yellow o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-audible"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_divisiones->total_divisiones; ?></div>
              <div class="infozzz">Divisiones</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" 

href="selecc_00.php?ttabla=divisiones&idtabla=id_division&nombdato=nombre_division&ttitulo=Divisiones">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>





        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-yellow o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-network-wired"></i>  
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_indicadores->total_indicadores; ?></div>
              <div class="infozzz">Aprendizajes u Objetivos</div>
            </div>

           <a class=" card-footer card-footerz text-white clearfix small z-1" href="selecc_indicadores.php">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>




      </div> <!-- cierre primer row -->








      <div class="row">

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-orange o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="far fa-calendar"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_turnos->total_turnos; ?></div>
              <div class="infozzz">Turnos</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" 

href="selecc_00.php?ttabla=plantilla_turnos&idtabla=id_turno&nombdato=nombre_turno&ttitulo=Turnos">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>



        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-orange o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="far fa-clock"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_horas->total_horas; ?></div>
              <div class="infozzz">Horas</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" 

href="selecc_00.php?ttabla=plantilla_horas&idtabla=id_hora&nombdato=nombre_hora&ttitulo=Horas">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>




        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-green o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="far fa-calendar-alt"></i>
              </div>
              <div class="mr-5 cantidadzzzsmall"><?php echo $row_periodo_esc->total_periodo_esc; ?> Periodos</div>
              <div class="infozzz">Escolares.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" 

href="selecc_periodos.php?ttabla=temporada_escolar&idtabla=id_periodo_es&nombdato=periodo_escolar&ttitulo=Periodos Escolares">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>





        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-green o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="far fa-grin-beam-sweat"></i>     
              </div>
              <div class="mr-5 cantidadzzzsmall"><?php echo $row_reforzar->total_reforzar; ?> Aspectos</div>
              <div class="infozzz">a reforzar.</div>
            </div>


<a class=" card-footer card-footerz text-white clearfix small z-1" href="selecc_aspectos.php">

           

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>









      </div> <!-- cierre primer row -->








 <h4 class="glowwhite">Relacionado con el personal del plantel:</h4>

    <div class="row">


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-purpplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="far fa-file-alt"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_cursos->total_cursos; ?>&nbsp;Cursos</div>
              <div class="infozzz">y títulos.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"  

href="selecc_00.php?ttabla=plantilla_titulos&idtabla=id_titulos&nombdato=nombre_titulos&ttitulo=Cursos y títulos">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>   
        </div>



        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-purpplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-book"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_menciones->total_mencion; ?> </div>
              <div class="infozzz">Menciones</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"  

href="selecc_00.php?ttabla=plantilla_mencion&idtabla=id_mencion&nombdato=nombre_mencion&ttitulo=Menciones">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>   
        </div>

     
         


         <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-purpplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="far fa-bookmark"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_institutos->total_instituto; ?></div>
              <div class="infozzz">Institutos</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"  

href="selecc_00.php?ttabla=plantilla_instituto&idtabla=id_instituto&nombdato=nombre_instituto&ttitulo=Institutos">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>   
        </div>



        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-purpplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-angle-double-up"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_tipos->total_tipos; ?> &nbsp;Tipos</div>
              <div class="infozzz">de planteles.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"   

href="selecc_00.php?ttabla=tipo_plantel&idtabla=id_tipo&nombdato=nombre_tipo&ttitulo=Tipos de planteles">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>   
        </div>



        



    </div>







      <h4 class="glowwhite">Relacionado con la familia del plantel:</h4>

    <div class="row">

      

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-briefcase"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_profesiones->total_profesiones; ?></div>
              <div class="infozzz">Profesiones</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"    

href="selecc_00.php?ttabla=tb_profesiones&idtabla=id_profesion&nombdato=nombre_profesion&ttitulo=Profesiones">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-universal-access"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_parentescos->total_parentescos; ?></div>
              <div class="infozzz">Parentescos</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"    

href="selecc_00.php?ttabla=tb_parentescos&idtabla=id_parentesco&nombdato=nombre_parentesco&ttitulo=Parentescos">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-medrt"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_medicos->total_medicos; ?>&nbsp;Casos</div>
              <div class="infozzz">médicos.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"    

href="selecc_00.php?ttabla=tb_medicos&idtabla=id_medico&nombdato=nombre_medico&ttitulo=Casos médicos">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>




        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-syringe"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_sangres->total_sangres; ?>&nbsp;Tipos</div>
              <div class="infozzz">de sangre.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"    

href="selecc_00.php?ttabla=tipo_sangres&idtabla=id_sangre&nombdato=tipo_sangre&ttitulo=Tipos de Sangre:">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>




          <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="far fa-user-circle"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_civiles->total_civiles; ?> Estados</div>
              <div class="infozzz">Civiles.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"   

href="selecc_00.php?ttabla=tb_estado_civil&idtabla=id_estado_civil&nombdato=nombre_estado_civil&ttitulo=Estados civiles">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>   
        </div>



        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-hospital"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_aseguradoras->total_aseguradoras; ?> Empresas</div>
              <div class="infozzz">Aseguradoras.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"   

href="selecc_00.php?ttabla=tipo_aseguradoras&idtabla=id_aseguradora&nombdato=tipo_aseguradora&ttitulo=Empresas Aseguradoras">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>   
        </div>




      </div>


      
        <h4 class="glowwhite">Ref. a las direcciones y a las nacionalidades:</h4>


      <div class="row">

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-road"></i>   
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_avenidas->total_avenidas; ?></div>   
              <div class="infozzz">Avenidas</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"     

href="selecc_00.php?ttabla=d_avenidas&idtabla=id_avenida&nombdato=nombre_av&ttitulo=Avenidas">

              <span class="float-left">Ver Lista</span>
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
                <i class="far fa-flag"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_municipios->total_municipios; ?></div>
              <div class="infozzz">Municipios</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"     

href="selecc_00.php?ttabla=d_municipio&idtabla=id_municipio&nombdato=nombre_municipio&ttitulo=Municipios">

              <span class="float-left">Ver Lista</span>
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
                <i class="fas fa-arrow-circle-right"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_parroquias->total_parroquias; ?></div>
              <div class="infozzz">Parroquias</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"     

href="selecc_00.php?ttabla=d_parroquia&idtabla=id_parroquia&nombdato=nombre_parroquia&ttitulo=Parroquias">

              <span class="float-left">Ver Lista</span>
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
                <i class="fab fa-gg"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_codigos->total_codigos; ?>&nbsp;Códigos</div>
              <div class="infozzz">postales</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"     

href="selecc_00.php?ttabla=d_codigo&idtabla=id_codigo&nombdato=nombre_codigo&ttitulo=Códigos postales">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>



        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-indigo o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-home"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_viviendas->total_viviendas; ?></div>
              <div class="infozzz">Viviendas</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"      

href="selecc_00.php?ttabla=d_vivienda&idtabla=id_vivienda&nombdato=nombre_vivienda&ttitulo=Viviendas">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-indigo o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="far fa-building"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_pisos_apto->total_pisos_apto; ?></div>
              <div class="infozzz">Pisos</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"      

href="selecc_00.php?ttabla=d_piso&idtabla=id_piso&nombdato=nombre_piso&ttitulo=Pisos">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-indigo o-hidden h-100">
            <div class="card-body">

              <div class="card-body-icon">
                <i class="fas fa-hashtag"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_numeros->total_numeros; ?>&nbsp;N°(s)</div>
              <div class="infozzzpe">y/o letras</div>
            </div>

            <a class=" card-footer card-footerz text-white clearfix small z-1"      

href="selecc_00.php?ttabla=d_numero&idtabla=id_numero&nombdato=nombre_numero&ttitulo=N°(s) y/o letras">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>  


      
      
</div>  <!-- cierre row -->


<div class="row">



        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-map-pin"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_ciudades->total_ciudades; ?>&nbsp;Capitales</div>
              <div class="infozzz">y ciudades</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"       

href="selecc_00.php?ttabla=d_ciudades&idtabla=id_ciudad&nombdato=nombre_ciudad&ttitulo=Capitales y ciudades">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="far fa-map"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_estados->total_estados; ?></div>
              <div class="infozzz">Estados</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"       

href="selecc_00.php?ttabla=d_estados&idtabla=id_estado&nombdato=nombre_estado&ttitulo=Estados">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-globe"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_paises->total_paises; ?></div>
              <div class="infozzz">Naciones</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"       

href="selecc_00.php?ttabla=d_paises&idtabla=id_pais&nombdato=nombre_pais&ttitulo=Naciones">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        </div>  <!-- cierre row -->



<h4 class="glowwhite">Ref. al alumnado:</h4>

    <div class="row">

      <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-columns"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_religiones->total_religiones; ?></div>
              <div class="infozzz">Religiones</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"        

href="selecc_00.php?ttabla=religiones&idtabla=id_religion&nombdato=tipo_religion&ttitulo=Religiones">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>




      <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-odnoklassniki"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_edades->total_edades; ?></div>
              <div class="infozzz">Edades</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"        

href="selecc_00.php?ttabla=edades&idtabla=id_edad&nombdato=nombre_edad&ttitulo=Edades">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>



        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-weight"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_pesos->total_pesos; ?></div>
              <div class="infozzz">Pesos en Kgs</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"        

href="selecc_00.php?ttabla=pesos&idtabla=id_peso&nombdato=nombre_peso&ttitulo=Pesos en Kgs">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>



        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-sort-numeric-up"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_alturas->total_alturas; ?></div>
              <div class="infozzz">Altura en cms</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"        

href="selecc_00.php?ttabla=alturas&idtabla=id_altura&nombdato=nombre_altura&ttitulo=Aluras en centimetros">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

</div>




<div class="row">


  <div class="col-xl-3 col-sm-6 mb-3">  
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-house-user"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_vive_con->total_vive_con; ?> - El Est.</div>
              <div class="infozzz">Vive con...</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"        

href="selecc_00.php?ttabla=d_vive_con&idtabla=id_vive_con&nombdato=nombre_vive_con&ttitulo=Vive Con">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>




      <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-walking"></i>   
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_traslada_en->total_traslada_en; ?> - El Est.</div>
              <div class="infozzz">Se traslada...</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"        

href="selecc_00.php?ttabla=d_traslada_en&idtabla=id_traslada_en&nombdato=nombre_traslada_en&ttitulo=Se Traslada">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>



        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-shoe-prints"></i>  
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_se_retira->total_se_retira; ?> - El Est.</div>
              <div class="infozzz">Se retira...</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"        

href="selecc_00.php?ttabla=d_se_retira&idtabla=id_se_retira&nombdato=nombre_se_retira&ttitulo=Se Retira">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

</div>






<div class="row">


  <div class="col-xl-3 col-sm-6 mb-3">  
          <div class="card text-white relleno-gris o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-pied-piper"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_camisas->total_camisas; ?> Tallas</div>
              <div class="infozzz">Camisas</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"        

href="selecc_00.php?ttabla=tall_cam&idtabla=id_camisa&nombdato=talla_camisa&ttitulo=Tallas de Camisas">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>




      <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-gris o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-typo3"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_pantalones->total_pantalones; ?> Tallas</div>
              <div class="infozzz">Pantalones</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"        

href="selecc_00.php?ttabla=tall_pant&idtabla=id_pantalon&nombdato=nombre_pantalon&ttitulo=Tallas de Pantalones">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>



        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-gris o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-renren"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_zapatos->total_zapatos; ?> Tallas</div>
              <div class="infozzz">Zapatos</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"        

href="selecc_00.php?ttabla=tall_zap&idtabla=id_zapato&nombdato=talla_zapato&ttitulo=Tallas de Zapatos">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

</div>







<h4 class="glowwhite">Varios:</h4>

    <div class="row">

      <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-pink o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-venus-mars"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_sexos->total_sexos; ?></div>
              <div class="infozzz">Genero</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"        

href="selecc_00.php?ttabla=sexo&idtabla=id_sexo&nombdato=nombre_sexo&ttitulo=Genero">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


  <!--        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-moraoscuro o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-percent"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_iva->total_iva; ?></div>
              <div class="infozzz">IVA</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"        

href="selecc_00.php?ttabla=iva&idtabla=id_iva&nombdato=cant_iva&ttitulo=IVA">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>  -- >


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-vino o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-angellist"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_descuentos->total_descuentos; ?></div>
              <div class="infozzz">Descuentos</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"        

href="selecc_00.php?ttabla=descuentos&idtabla=id_descuento&nombdato=nombre_desc&ttitulo=Descuentos">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


<!-- Cierre Icon Cards-->


</div>



</div>









        








                           

            </div>   <!-- cierre container fluid -->
        </div>  <!-- cierre wrapper -->




<?php include ("Footer.php"); ?>
