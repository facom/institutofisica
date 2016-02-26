<?php
$widthvid=300;
$heightvid=$widthvid/1.4;
?>
<html>
  <!-- -------------------------------------------------------------------------------- -->
  <!-- HEAD -->
  <!-- -------------------------------------------------------------------------------- -->
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" href="css/if.css" />
    <style>
      #diagonal_label {
      height:50px;
      line-height:25px;
      text-transform:uppercase;
      font-family:sans-serif;
      font-weight:bold;
      text-align:center;
      z-index: 20;
      }

      #diagonal_label a {
      display:block;
      height:100%;
      color:#000;
      text-decoration:none;
      background: green;
      }

      #diagonal_label span {
      display:inline-block;
      margin:0 10px;
      }
      #break {display:none;}

      @media only screen and (min-width : 480px) {

      #diagonal_label {
      width: 400px;
      height:70px;
      position:fixed;
      right:-120px;
      top:42px;
      line-height:20px;
      z-index: 20;
      }
      
      #diagonal_label a {
      -webkit-transform: rotate(45deg);
      -moz-transform: rotate(45deg);
      -o-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
      color: #fff;
      }
      
      #diagonal_label span {
      margin:0 3px;
      }
      
      #diagonal_label b {
      font-size:22px;
      font-weight:normal;
      display: inline-block;
      padding-top: 6px;
      }

      #break { display: block; }
      }    

      li{
	  margin-bottom:10px;
      }     
    </Style>
  </head>
  <body>
    <!-- -------------------------------------------------------------------------------- -->
    <!-- DIAGONAL BAR -->
    <!-- -------------------------------------------------------------------------------- -->
    <div id="diagonal_label">
      <a href="?" target="_blank">
	<span><b>&nbsp;</b></span><br/>
	<span>Sitio temporal</span><br id='break' />
	<span></span>
      </a>
    </div>
    <!-- -------------------------------------------------------------------------------- -->
    <!-- HEADER -->
    <!-- -------------------------------------------------------------------------------- -->
    <table width=100% border=0>
      <tr>
	<td width=100px><image src="img/udea_fcen.jpg"/ height=120px></td>
	<td valign=bottom>
	  <div class="title">
	    <a href="index.php">IF - FCEN</a><br/>
	  </div>
	  <div class="subtitle">
	    Instituto de Física
	  </div>
	  <div class="affiliation">
	    Facultad de Ciencias Exactas y Naturales<br/>
	    Universidad de Antioquia
	  </div>
	</td>
    </table>
    <!-- -------------------------------------------------------------------------------- -->
    <!-- MENU -->
    <!-- -------------------------------------------------------------------------------- -->
    <div class="mainmenu">
      <a href="index.php">Principal</a>
      | <a href="#formularios">Formularios</a> 
      | <a href="#documentos">Documentos</a> 
      | <a href="#enlaces">Enlaces</a> 
      | <a href="#agenda">Agenda</a>
      | <a href="#videos">Videos</a>
    </div>
    <div class="container">
      <div class="warning">
	Esta es una página temporal creada con el propósito de publicar
	información importante sobre el Instituto de Física de la Universidad
	de Antioquia.  En este momento se encuentra en elaboración un portal
	completo para el Instituto.
      </div>

      <!-- -------------------------------------------------------------------------------- -->
      <!-- ENLACES DE INTERÉS -->
      <!-- -------------------------------------------------------------------------------- -->
      <div class="section">

	<a name="enlaces"><h2>Enlaces</h2></a>

	<ul>
	  
	  <li style="font-size:16px;font-weight:bold;">
	    Programación 2016-1: 
	    <a href=http://bit.ly/if-carga-2016-1 target=_blank>http://bit.ly/if-carga-2016-1</a>
	  </li>

	  <li>
	    Sistema de Solicitudes, SSOFI: 
	    <a href=http://bit.ly/ssofi target=_blank>http://bit.ly/ssofi</a>
	  </li>

	  <li>
	    Sistema Integrado de Información Curricular, <b>SInfin</b><sup style="font-style:italic;color:green;">New</sup>:
	    <a href=http://bit.ly/fcen-sinfin target=_blank>http://bit.ly/fcen-sinfin</a>
	  </li>

	  <li>
	    Solicitud de reconocimientos y homologaciones:
	    <a href=http://bit.ly/fcen-reconocimientos target=_blank>http://bit.ly/fcen-reconocimientos</a>
	  </li>

	  <li> Listas de correo: si no esta recibiendo correos de la
	    coordinación o la Facultad inscríbase en una de las listas
	    de correos enumeradas aquí.  Para hacerlo debe tener una
	    cuenta en google (se recomienda usar la cuenta de correo
	    de la Universidad).  Si no tiene todavía su cuenta
	    institucional y tampoco tiene una cuenta de correo en
	    gmail, abra una cuenta en google con su dirección de
	    correo electrónico actual.<br/><br/>

	    <ul>
	      <li>Lista de correo de estudiantes de pregrado de Física:
		<a href=http://bit.ly/correo-fisica target=_blank>http://bit.ly/correos-fisica</a>
	      </li>
	      <li>Lista de correo de estudiantes de pregrado de astronomía:
		<a href=http://bit.ly/correo-astronomia target=_blank>http://bit.ly/correo-astronomia</a>
	      </li>
	      <li>Lista de correo de profesores de cátedra del Instituto de Física:
		<a href=http://bit.ly/correos-catedra target=_blank>http://bit.ly/correos-catedra</a>
	      </li>
	      <li>Lista de correo de egresados del pregrado de astronomía:
		<a href=http://bit.ly/correo-egresados-astronomia target=_blank>http://bit.ly/correo-egresados-astronomia</a>
	      </li>
	      <li>Lista de correo de egresados del pregrado de física:
		<a href=http://bit.ly/correo-egresados-fisica target=_blank>http://bit.ly/correo-egresados-fisica</a>
	      </li>
	    </ul>

	  </li>
	  
	</ul>

      </div>

      <!-- -------------------------------------------------------------------------------- -->
      <!-- CONVOCATORIAS -->
      <!-- -------------------------------------------------------------------------------- -->
      <div class="section">

	<a name="convocatorias"><h2>Convocatorias</h2></a>

	<!--
	<div class="convocatoria">
	  <div class="convocatoria-title">
	    Feb.12/2016, Encuesta del Proceso de Matrícula
	  </div>
	  <p class="convocatoria-contenido">
	    Con el fin de evaluar el proceso de matrícula el
	    Vicedecanato de la Facultad ha diseñado un formulario que
	    invitamos a llenar a todos los estudiantes de pregrado de
	    la Facultad.  Ver <a href=#formularios>Formularios</a>.
	  </p>
	</div>

	<div class="convocatoria">
	  <div class="convocatoria-title">
	    Feb.12/2016, Matrícula en cursos de otros programas
	  </div>
	  <p class="convocatoria-contenido">
	    A todos los estudiantes que deseen matricular asignaturas
	    de otros programas (o versiones de su mismo pensum) se les
	    informa que el procedimiento se realizará electrónicamente
	    usando el formulario habilitado para ese fin
	    (ver <a href=#formularios>Formularios</a>).  Antes de
	    llenar el formulario debe conseguir la información
	    completa del curso código y grupo solicitado.
	  </p>
	</div>

	<div class="convocatoria">
	  <div class="convocatoria-title">
	    Feb.12/2016, Solicitud de reconocimiento de materias
	  </div>
	  <p class="convocatoria-contenido">
	    Para todos aquellos que deseen solicitar reconocimiento de
	    materias de la Universidad de Antioquia o de cualquier
	    otra institución se ha habilitado un nuevo servicio en
	    línea para este propósito.  La página del servicio es:
	    <a href=http://bit.ly/fcen-sinfin
	    target=_blank>http://bit.ly/fcen-sinfin</a>.  Si lo esta
	    usando por primera vez vea el videotutorial disponible
	    en <a href=#videos>Videos</a>.
	  </p>
	</div>

	<div class="convocatoria">
	  <div class="convocatoria-title">
	    Feb.5/2016, Solicitud de excención de prerrequisitos
	  </div>
	  <p class="convocatoria-contenido">
	    Para todos aquellos estudiantes que vayan a solicitar
	    excención de pre y correquisitos, se informa que el plazo
	    máximo para la recepción de solicitudes para esta
	    situación particular es el <b>viernes 12 de febrero de
	    2016</b>.  Les recordamos que solo se otorgan solicitudes
	    de este tipo con la debida justificación de causa mayor.
	    No es causa mayor: incompatibilidad horaria, recomendación
	    del profesor, haber visto el prerrequisito sin aprobarlo,
	    no tener como matrícular el mínimo de créditos, haber
	    asistido un prerrequisito, creer que no se necesita saber
	    nada del prerrequisito para ver la materia, entre otras
	    situaciones comunes no contempladas en el reglamento de
	    pre y correqusitos (plan de estudios).
	  </p>
	</div>

	<div class="convocatoria">
	  <div class="convocatoria-title">
	    Feb.2/2016, Solicitud de cambio de versión del Pensum
	  </div>
	  <p class="convocatoria-contenido">
	    Se convoca a los estudiantes del programa de Física que
	    están en la versión del pensum previa a la Transformación
	    Curricular (versión 4) y que deseen cambiarse a la versión
	    nueva del pensum (versión 5) para que se evalue su caso y
	    se proceda si aplica a la firma del acto de pensum.  Solo
	    podrán cambiarse al nuevo pensum estudiantes que para el
	    próximo semestre solo vean cursos del nivel 4 para abajo
	    (ver <a href=#documentos>Planes de Estudio</a>).  El plazo
	    para este procedimiento es el <b>viernes 5 de febrero de
	    2016</b>.
	  </p>
	</div>

	<div class="convocatoria">
	  <div class="convocatoria-title">
	    Feb.1/2016, Solicitud de Matrícula con menos de 8 créditos (primer grupo)
	  </div>
	  <p class="convocatoria-contenido">
	    Se convoca a todos los estudiantes de pregrado que sepan
	    desde ya que solo pueden matricular menos de 8 créditos en
	    el semestre 2016-1 para que presenten su solicitud al
	    Comité de Pregrado en SSOFI antes del <b>miércoles 3 de
	    febrero de 2016</b>.  No se recibiran solicitudes por otro
	    medio.  Todas las solicitudes de matrícula de menos de 8
	    créditos deberán ir acompañadas de documentos de respaldo
	    de la situación que los lleva a hacer la solicitud.
	    Después de la matrícula y de los ajustes se abrirán dos
	    ventanas adicionales (segundo y tercer grupo) para la
	    solicitud de menos de 8 créditos.
	    Ver <a href=#enlaces>Enlaces</a>.
	  </p>
	</div>

	<div class="convocatoria">
	  <div class="convocatoria-title">
	    Feb.1/2016, Presentación de proyectos de trabajo de grado
	  </div>
	  <p class="convocatoria-contenido">
	    Todos los estudiantes que aspiran matricular y realizar el
	    curso <b>Trabajo de Grado</b> en el semestre 2016-1 deben,
	    por directiva del comité de pregrado, presentar un
	    proyecto usando para ello un formulario especialmente
	    diseñado con ese fin.  El plazo máximo para la
	    presentación de proyectos de trabajo de grado es
	    el <b>sábado 6 de febrero de 2016</b>.
	    Ver <a href=#formularios>Formularios</a>.
	  </p>
	</div>

	<div class="convocatoria">
	  <div class="convocatoria-title">
	    Feb.1/2016, Inscripción en cursos de Seminario
	  </div>
	  <p class="convocatoria-contenido">
	    Están abiertas las inscripciones en los cursos de
	    Seminario III, Lectura Dirigida y Seminario de Trabajo de
	    Grado.  Las inscripciones van hasta el <b>sábado 6 de
	    Febrero de 2016</b>.
	    Ver <a href=#formularios>Formularios</a>.
	  </p>
	</div>
	-->

	<div class="convocatoria">
	  <div class="convocatoria-title">
	    Feb.1/2016, Entrega de trabajos de grado
	  </div>
	  <p class="convocatoria-contenido">
	    Para todos aquellos que estén terminando o hayan terminado
	    trabajo de grado en el semestre 2015-2 les recordamos que
	    deben usar el formulario de <b>Entrega de Trabajo de
	    Grado</b>. El envio de un documento a través de este
	    sistema es independiente de si el trabajo es una tesis o
	    cualquier otra modalidad contemplada por el Consejo de
	    Facultad. Ver <a href=#formularios>Formularios</a>.
	  </p>
	</div>

      </div>

      <!-- -------------------------------------------------------------------------------- -->
      <!-- DOCUMENTOS -->
      <!-- -------------------------------------------------------------------------------- -->
      <div class="section">

	<a name="documentos"><h2>Documentos</h2></a>

	<ul>
	  
	  <li>
	    Planes de estudio de los Programas del Instituto: 
	    <a href=http://bit.ly/if-pensums target=_blank>http://bit.ly/if-pensums</a>
	  </li>
	  
	  <li>
	    Planes de Asignatura de los cursos ofrecidos en el Instituto: 
	    <a href=http://bit.ly/if-cursos target=_blank>http://bit.ly/if-cursos</a>
	  </li>

	  <li>
	    Plan de transición (equivalencia de asignaturas) de la versión 4 a la versión 5 del Pensum de Física:
	    <a href=http://bit.ly/if-fisica-plan-transicion-v4-v5 target=_blank>http://bit.ly/if-fisica-plan-transicion-v4-v5</a>
	  </li>

	</ul>

      </div>
      

      <!-- -------------------------------------------------------------------------------- -->
      <!-- FORMULARIOS -->
      <!-- -------------------------------------------------------------------------------- -->
      <div class="section">

	<a name="formularios"><h2>Formularios</h2></a>
	
	<p>Muchos procesos administrativos en el Instituto se realizan
	por comodidad y para una adecuada gestión usando formularios
	en línea.  El uso de formularios permite que los procesos se
	puedan hacer sin requerir presencialidad.  Adicionalmente la
	información suministrada en los formularios es almacenada y
	puede ser usada posteriormente para realizar informes o
	levantar estadísticas.</p>

	<p>Formularios temporales:</p>

	<ul>

	  <li>
	    Encuesta del Proceso de Matrícula
	    <a href=http://bit.ly/fcen-form-matricula target=_blank>
	      http://bit.ly/fcen-form-matricula
	    </a>
	  </li>

	  <li>
	    Matrícula en Cursos de Otros Programas
	    <a href=http://bit.ly/fcen-otros-programas target=_blank>
	      http://bit.ly/fcen-otros-programas
	    </a>
	  </li>

	  <li>
	    Matrícula en seminarios de investigación. 
	    <a href=http://bit.ly/if-form-seminv target=_blank>
	      http://bit.ly/if-form-seminv
	    </a>
	  </li>

	  <li>
	    Presentación de Proyectos de Trabajo de Grado.
	    <a href=http://bit.ly/if-form-proyectogrado target=_blank>
	      http://bit.ly/if-form-proyectogrado
	    </a>
	  </li>

	  <li>
	    Preguntas frecuentes sobre la matrícula.
	    <a href=http://bit.ly/if-form-faq target=_blank>
	      http://bit.ly/if-form-faq
	    </a>
	  </li>
	  
	</ul>
	  
	<p>Formularios permanentes:</p>

	<ul>

	  <li>
	    Entrega de Trabajos de Grado. 
	    <a href=http://bit.ly/if-form-trabajogrado target=_blank>
	      http://bit.ly/if-form-trabajogrado
	    </a>
	  </li>


	  <li>
	    Ausencia de profesores de cátedra.
	    <a href=http://bit.ly/if-form-ausencia-catedra target=_blank>
	      http://bit.ly/if-form-ausencia-catedra
	    </a>
	  </li>

	</ul>

      </div>

      <!-- -------------------------------------------------------------------------------- -->
      <!-- VIDEOS -->
      <!-- -------------------------------------------------------------------------------- -->
      <div class="section">

	<a name="videos"><h2>Videos</h2></a>

	<ul>
	  
	  <li>
	    Presentación de los Grupos de Investigación del Instituto de Física (2015-2016):
	    <a href=http://bit.ly/if-video-grupos target=_blank>http://bit.ly/if-video-grupos</a> 
	    <div style="text-align:center;padding:10px">
	      <iframe width="<?php echo $widthvid ?>" height="<?php echo $heightvid ?>" 
		      src="https://www.youtube.com/embed/videoseries?list=PLPdkBLbDPtqry4r_qJ5fETPw4hHN4lEtE" 
		      frameborder="0" allowfullscreen>
	      </iframe>	      
	    </div>
	  </li>

	  <li>
	    Inducción al Instituto de Física semestre 2015-2:
	    <a href=http://bit.ly/if-video-grupos target=_blank>http://bit.ly/if-video-grupos</a> 
	    <div style="text-align:center;padding:10px">
	      <iframe width="<?php echo $widthvid ?>" height="<?php echo $heightvid ?>" 
		      src="https://www.youtube.com/embed/videoseries?list=PLPdkBLbDPtqoSGrAHRbZjO5hGMk6dN-2F" 
		      frameborder="0" allowfullscreen>
	      </iframe>	      
	    </div>
	  </li>

	  <li>
	    ¿Cómo solicitar un reconocimiento de materias?:
	    <div style="text-align:center;padding:10px">
	      <iframe width="<?php echo $widthvid?>" height="<?php echo $heightvid?>" 
		      src="https://www.youtube.com/embed/O85cGBINggU" 
		      frameborder="0" allowfullscreen>
	      </iframe>	      
	    </div>
	  </li>
	  
	</ul>

      </div>

      <!-- -------------------------------------------------------------------------------- -->
      <!-- AGENDA -->
      <!-- -------------------------------------------------------------------------------- -->
      <div class="section">

	<a name="agenda"><h2>Agenda</h2></a>

	<p>En esta agenda se encuentran programados los más
	  importantes eventos y fechas de interés de la actividad
	  académica y administrativa del Instituto de Física.  Haga
	  "click" en los eventos para conocer los detalles.</p>

	<iframe src="https://calendar.google.com/calendar/embed?title=Agenda%20del%20Instituto%20de%20F%C3%ADsica%20de%20la%20Universidad%20de%20Antioquia&amp;mode=AGENDA&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=pregradofisica%40udea.edu.co&amp;color=%230D7813&amp;src=es.co%23holiday%40group.v.calendar.google.com&amp;color=%23A32929&amp;ctz=America%2FBogota"
		style="border-width:0" width="100%" height="600"
		frameborder="0" scrolling="no"></iframe>
	
      </div>

      <!-- -------------------------------------------------------------------------------- -->
      <!-- THE END -->
      <!-- -------------------------------------------------------------------------------- -->
    </div>
    <!-- -------------------------------------------------------------------------------- -->
    <!-- FOOTER -->
    <!-- -------------------------------------------------------------------------------- -->
    <!--
    <div class="footer">
    </div>
    -->
  </body>
</html>
