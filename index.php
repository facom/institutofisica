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
      <!-- CONVOCATORIAS -->
      <!-- -------------------------------------------------------------------------------- -->
      <div class="section">

	<a name="convocatorias"><h2>Convocatorias</h2></a>

	<div class="convocatoria">
	  <div class="convocatoria-title">
	    Octubre 18/2016, Finalización de Semestre
	  </div>
	  <p class="convocatoria-contenido">
	    A cerca de un mes de finalizar el semestre hay una serie
	    de procesos administrativos que deben realizarse con la
	    debida anticipación.  Para facilitar estos procesos el
	    comité de currículo de la FCEN y la coordinación de
	    pregrado del Instituto de Física han habilidato una serie
	    de mecanismos en línea.  
	    procesos:
	    <ul>
	      <li>Inscripción en el II Simposio FCEN (sustentación de
	      trabajos de
	      grado): <a href="http://bit.ly/fcen-simposio-inscripcion">http://bit.ly/fcen-simposio-inscripcion</a></li>
	      <li>Matrícula de cursos
	      intensivos: (Pendiente).</li>
	      <li>Presentación de proyectos de trabajo de grado: (Pendiente).</li>
	      <li>Presentación de manuscritos de trabajo de grado: (Pendiente).</li>
	      <li>Reconocimientos y homologaciones de materias vistas
	      antes de 2016-2: (Pendiente).</li>
	      <li>Propuesta de nuevos cursos electivos: (Pendiente).</li>
	      <li>Propuesta de trabajos de grado meritorios: (Pendiente).</li>
	    </ul>
	  </p>
	</div>

	<div class="convocatoria">
	  <div class="convocatoria-title">
	    Septiembre 22/2016, Convocatoria para inscripción en el II Simposio FCEN
	  </div>
	  <p class="convocatoria-contenido">
	    Están abiertas las inscripciones para el II Simposio FCEN
	    en el que se presentan los trabajos de grado desarrollados
	    por los estudiantes de la Facultad de Ciencias Exactas y
	    Naturales que terminan en el semestre 2016-2.  El enlace
	    para la inscripción en el Simposio es:
	    <a href="http://bit.ly/fcen-simposio-inscripcion">http://bit.ly/fcen-simposio-inscripcion</a>
	  </p>
	</div>

	<!--
	<div class="convocatoria">
	  <div class="convocatoria-title">
	    Jul. 15/2016, Grupos habilitados de Fundamentación en Matemáticas 
	  </div>
	  <p class="convocatoria-contenido">
	     Se informa que los grupos habilitados del curso
	     Fundamentación en Matemáticas para los estudiantes de los
	     programas de Física y Astronomía son los Grupos del 5 al
	     8.  Se recomienda a todos los estudiantes de estos
	     programas matricularse únicamente en estos grupos.  En
	     caso de no alcanzar cupo pueden matricularse en el grupo
	     de lista de espera 55.
	  </p>
	</div>

	<div class="convocatoria">
	  <div class="convocatoria-title">
	    Jul. 14/2016, Inconvenientes con oferta y con matrícula
	  </div>
	  <p class="convocatoria-contenido">
	     Los estudiantes que tengan inconvenientes con la oferta de matrícula o con la matrícula pueden hacernos saber de los inconvenientes usando el siguiente formulario:<a href=http://bit.ly/fcen-inconvenientes>http://bit.ly/fcen-inconvenientes</a>.  Debe aclararse que el coordinador de pregrado no puede hacer nada para resolver los inconvenientes más que informar de los mismos a Admisiones y Registro.
	  </p>
	</div>

	<div class="convocatoria">
	  <div class="convocatoria-title">
	    Jul. 12/2016, Seminarios y Trabajo de Grado
	  </div>
	  <p class="convocatoria-contenido">
	     Los estudiantes que vayan a matricular los cursos de Seminario de Trabajo de Grado, Seminario III, Lectura Dirigida y Trabajo de Grado deben llenar los formularios de inscripción o presentación del proyecto de trabajo de grado. Ver <a href=#formularios>Formularios</a>.  El plazo para la inscripción y el envío del proyecto es el sábado Julio 16 de 2016.
	  </p>
	</div>
	-->

	<!--
	<div class="convocatoria">
	  <div class="convocatoria-title">
	    Mar. 30/2016, Cancelaciones
	  </div>
	  <p class="convocatoria-contenido">
	     A todos los estudiantes que esten contemplando cancelar asignaturas o semestre se les recuerda que en esta pagina encontraran publicada una Guia para la Cancelacion.  Alli se explica cuando se recomienda usar y cuando no este mecanismo.  Adicionalmente se explica como realizar el procedimiento en SSOFI y como llenar los formularios. Ver <a href=#documentos>Documentos</a>.
	  </p>
	</div>

	<div class="convocatoria">
	  <div class="convocatoria-title">
	    Feb.29/2016, Conferencia "Sobre años bisiestos y otras curiosidades del calendario"
	  </div>
	  <p class="convocatoria-contenido">
	    A propósito de la fecha más curiosa del calendario el
	    <b>Solar, Earth and Planetary Physics Group</b> y
	    el <b>Semillero de Investigación en Astronomía y Física
	    Solar</b>, invitan a una conferencia sobre el calendario y
	    el origen de los años bisiestos.  La conferencia se
	    realizará en el <b style=color:red>Salón Planetario,
	    Planetario de Medellín</b>, a las 6:30 p.m.
	  </p>
	</div>
	-->

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

	<!--
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
	-->

      </div>

      <!-- -------------------------------------------------------------------------------- -->
      <!-- ENLACES DE INTERÉS -->
      <!-- -------------------------------------------------------------------------------- -->
      <div class="section">

	<a name="enlaces"><h2>Enlaces</h2></a>

	<ul>
	  
	  <li>
	    Sistema de Solicitudes, <b>SSOFI</b>: 
	    <ul>
	    <li>Sitio: <a href=http://bit.ly/ssofi target=_blank>http://bit.ly/ssofi</a></li>
	    <li>Ayuda: <a href=http://bit.ly/ssofi-ayuda target=_blank>http://bit.ly/ssofi-ayuda</a></li>
	    </ul>
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
	  
	  <li>Sistema de Solicitud de Comisiones: <a href=http://bit.ly/fcen-comisiones target=_blank>http://bit.ly/fcen-comisiones</a></li>

	  <li>Calendario de semestre: <a href=http://bit.ly/fcen-calendario target=_blank>http://bit.ly/fcen-calendario</a></li>

	  <li>Programación de Cursos: <a href=http://bit.ly/fcen-calendario target=_blank>http://bit.ly/fcen-calendario</a></li>

	  <li>Fechas claves para la realización de procedimientos administrativos: <a href=http://bit.ly/if-fechas target=_blank>http://bit.ly/if-fechas</a></li>

	  <li>Actas del comité de Pregrado: Repositorio oficial <a href=http://bit.ly/if-normativa target=_blank>http://bit.ly/if-normativa</a>, Repositorio local (mas actualizado) <a href=http://bit.ly/if-compre-actas target=_blank>http://bit.ly/if-compre-actas</a></li>

	</ul>

      </div>

      <!-- -------------------------------------------------------------------------------- -->
      <!-- DOCUMENTOS -->
      <!-- -------------------------------------------------------------------------------- -->
      <div class="section">

	<a name="documentos"><h2>Documentos</h2></a>

	<ul>
	  
	  <li>

	    Guia de Cancelaciones.  Este es un documento que explica detalladamente como se realiza el procedimiento de cancelacion.

	    <a href=doc/Guia-Cancelaciones.pdf target=_blank>Guia de cancelaciones</a>
	  </li>

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

	<p>Formularios temporales:</p>

	<ul>

	  <!--<li>
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
	  -->
	</ul>
	  
      </div>

      <!-- -------------------------------------------------------------------------------- -->
      <!-- VIDEOS -->
      <!-- -------------------------------------------------------------------------------- -->
      <div class="section">

	<a name="videos"><h2>Videos</h2></a>

	<ul>
	  
	  <li>
	    ¿Cómo usar SSOFI?:
	    <div style="text-align:center;padding:10px">
	      <iframe width="<?php echo $widthvid?>" height="<?php echo $heightvid?>" 
		      src="https://www.youtube.com/embed/ze7L0Bu8ea4" 
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
