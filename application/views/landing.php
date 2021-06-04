 <!-- ======= Landing Section ======= -->
 <section id="landing" class="landing section-bg">
   <div class="container-fluid">
    <div class="topBox row">
     <div class="logo col-md-8 col-12"></div>
     <div class="col-md-4 col-12 right padder">
      <div onclick="this.nextElementSibling.style.display='block'; this.style.display='none'" style="overflow : hidden">
       <img src="assets/img/home-reel.JPG" style="cursor:pointer" class="thumbnail"/>
     </div>
     <div class='youtube-video-container' style="display:none">
       <div class="embed-responsive embed-responsive-16by9">
        <iframe src="https://www.youtube-nocookie.com/embed/kRIo2UgWEGs?&autoplay=0&mute=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>

    <div class="intro" style="margin-top:3vh;">
      <div class="title">What´s this?</div>
      <div class="intro-text" style="height:30vh">
        <p>ROCKNROLLA no es una agencia de publicidad. 
ROCKNROLLA es una mesa de trabajo. Cinco directores. Psicólogos, facilitadores, diseñadores, redactores, arquitectos, directores audiovisuales, ilustradores, animadores, fotógrafos, desarrolladores de tecnologías y decenas de otros talentos de todas partes del mundo sumándose para enriquecer la creación de cada proyecto. 
Experiencia, frescura y recursos específicamente seleccionados al servicio de la definición, creación y ejecución de proyectos de branding, ideas o entretenimiento. 
Desde el diseño de una etiqueta, hasta el diseño de experiencia, concepto de valor, arquitectura y mobiliario de un restaurante; series originales para youtube; video clips musicales con estrellas a nivel global o una colección ilustrada de stickers de whatsapp. Un app que transforme el ahorro en un juego. Un website que no se parece a otro que hayas visto. Definición de arquetipos de personalidad y de un nuevo y honesto propósito para una marca, y luego, la creación de sus toolkits de comunicación adaptados a todos los mercados donde participa. 
Ya lo hemos hecho, y lo seguiremos haciendo cada vez mejor. Sin repetirnos, ni traicionarnos. 
Acá el target es lo más importante, la idea es lo más importante y la ejecución es lo más importante. Por todos los medios, más allá de los medios y a pesar de los medios. 
Aprendemos la receta, solo para poder romperla. Vamos muchas veces contra la razón, y nos dejamos llevar por la emoción. 
Sabemos que la data y la tecnología nos necesitan más a nosotros que nosotros a ellas. 
Cobramos por lo que realmente tiene valor y muchas veces decimos: “no”. 
Nuestro trabajo nos define, por eso nos juntamos con los mejores del mundo para que cada proyecto sea mejor que el último. 
#weareROCKNROLLA
#RocktheTalk</p>
      </div>
    </div>
		</div>
</div>
<div class="bottomBox col-12">
 <div class="title">What´s new?</div>
 <div class="videoContainer row">
  <?php  
  foreach ($destacados as $destacado) {
    echo '<div class="col-md-4 col-12 reel">
    <div onclick="this.nextElementSibling.style.display=\'block\'; this.style.display=\'none\'">
    <img src="assets/img/'.$destacado->thumbnail.'" style="cursor:pointer" class="thumbnail"/>
    </div>
    <div class="youtube-video-container" style="display:none">
    <div class="embed-responsive embed-responsive-16by9">
    <iframe src="https://www.youtube-nocookie.com/embed/'.$destacado->videoId.'?&autoplay=0&mute=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    </div>
    </div>';
  }; 
  ?>

</div>
</div>

</div>
    </section><!-- End Portfolio Section -->
